<?php

namespace Benchpress\Services;

use Benchpress\Services\Cache\ICacheService;
use Benchpress\Services\Cache\RuntimeMemoryCacheService;

class ACFService {

    private readonly ICacheService $cacheService;

    public function __construct() {
        $this->cacheService = RuntimeMemoryCacheService::GetInstance();
    }

    public function getFields(int|string $postIdOrKey): array|false {
        $cacheKey = is_string($postIdOrKey) ? $postIdOrKey : strVal($postIdOrKey);
        $fields = $this->cacheService->get($cacheKey);

        if (!is_null($fields)) {
            return $fields;
        }

        return get_fields($postIdOrKey);
    }

    public function getFieldsForPost(\WP_Post $post): array|false {
        return $this->getFields($post->ID);
    }

    public function getFieldsForPostType($postType): array|false {
        global $wpdb;

        $cacheKey = 'post_type' . $postType . '_fields';
        $cachedFields = $this->cacheService->get($cacheKey);

        if (!is_null($cachedFields)) {
            return $cachedFields;
        }

        $sql = "SELECT p.ID, p.post_title, p.post_name, pm.meta_value as rule
          FROM $wpdb->posts p 
          LEFT JOIN $wpdb->postmeta pm 
          ON ( p.ID = pm.post_id AND pm.meta_key = 'rule' ) 
          WHERE p.post_type = 'acf'";

        $result = $wpdb->get_results($sql);
        $postIds = array();
        $fields = array();

        foreach($result as $row){
            $rule = unserialize($row->rule);
            if($rule['param'] == 'post_type' && $rule['operator'] == '==' && $rule['value'] == $postType) {
                $postIds[] = $row->ID;
            }
        }

        foreach($postIds as $postId) {
            $fsql = "SELECT * FROM $wpdb->postmeta WHERE post_id = '$postId' AND meta_key LIKE 'field_%';";

            $fields = $wpdb->get_results($fsql);

            $field_array = array();
            foreach($fields as $field)
            {
                $f = unserialize($field->meta_value);
                $field_array[$field->meta_key] = $f;
            }
            $fields[$postId] = $field_array;
        }

        $this->cacheService->set($cacheKey, $fields);
        return $fields;
    }
}