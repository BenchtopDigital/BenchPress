<?php

namespace Benchpress\Models;

use Benchpress\Collections\PostCollection;
use Benchpress\Enums\WordpressArchiveType;
use Benchpress\Enums\WordpressPageType;
use Exception;

class WordpressQueryContext {
    public readonly WordpressArchiveType $archiveType;
    public readonly WordpressPageType $pageType;
    public readonly array $fields;
    public readonly int $postId;
    public readonly \WP_Post|null $post;
    public readonly PostCollection $posts;

    public function __construct(\WP_Query $wpQuery) {
        if (!isset($wpQuery)) {
            throw new Exception('Cannot create WordpressPageContext instance outside of Wordpress loop');
        }
        $this->archiveType = $this->getArchiveType($wpQuery);
        $this->pageType = $this->getPageType($wpQuery);
        $this->posts = new PostCollection(get_posts() ?: []);
        $this->post = get_post() ?: null;
        $this->postId = $this->postId?->ID ?? 0;
        $this->fields = (function_exists('get_fields') ? get_fields() ?: [] : []) ?: [];
    }

    /**
     * @return int[];
     */
    public function getPostIds(): array {
        if ($this->posts->count() == 0) {
            return [];
        }

        return $this->posts->map(fn($x) => $x->ID);
    }

    private function GetPageType(\WP_Query $wpQuery): WordpressPageType {
        if ($wpQuery->is_front_page()) {
            return WordpressPageType::HOME;
        }

        if ($wpQuery->is_archive()) {
            return WordpressPageType::ARCHIVE;
        }

        if ($wpQuery->is_single()) {
            return WordpressPageType::POST;
        }

        if ($wpQuery->is_404()) {
            return WordpressPageType::NOT_FOUND;
        }

        return WordpressPageType::UNSET;
    }

    private function GetArchiveType(\WP_Query $wpQuery): WordpressArchiveType {
        if (!$wpQuery->is_archive()) {
            return WordpressArchiveType::UNSET;
        }

        if ($wpQuery->is_post_type_archive) {
            return WordpressArchiveType::CUSTOM;
        }

        if ($wpQuery->is_category()) {
            return WordpressArchiveType::CATEGORY;
        }

        if ($wpQuery->is_author()) {
            return WordpressArchiveType::AUTHOR;
        }

        if ($wpQuery->is_date()) {
            return WordpressArchiveType::DATE;
        }

        if ($wpQuery->is_tag()) {
            return WordpressArchiveType::TAG;
        }

        if ($wpQuery->is_tax()) {
            return WordpressArchiveType::TAXONOMY;
        }

        return WordpressArchiveType::UNSET;
    }

    public function getACFID(): int|false {
        $postId = (int)get_the_ID();

        if (!$postId) {
            $postId = get_queried_object();
        }

        // $postId may be an object.
        // todo: Compare class types instead.
        if (is_object($postId)) {
            if (isset($postId->post_type, $postId->ID)) {
                $postId = $postId->ID;
            } elseif (isset($postId->roles, $postId->ID)) {
                $postId = 'user_' . $postId->ID;
            } elseif (isset($postId->taxonomy, $postId->term_id)) {
                $postId = 'term_' . $postId->term_id;
            } elseif (isset($postId->comment_ID)) {
                $postId = 'comment_' . $postId->comment_ID;
            } else {
                $postId = false;
            }
        }

        return $postId;
    }
}