<?php

namespace Benchpress\Services;

use Benchpress\Collections\PostCollection;
use Timber\Post;
use Timber\Timber;

class CustomPostTypeService {
    public function getOne(string $postType, int $postId, $args = []): Post | null {
        $args = array_merge_recursive($args, array(
            'id' => $postId,
            'post_status' => 'publish',
        ));

        $result = $this->get($postType, $args);

        return count($result) > 0 ? $result[0] : null;
    }

    public function get(string $postType, array $args = []): array {
        $args = array_merge_recursive($args, array(
            'post_type' => $postType,
            'post_status' => 'publish',
            'posts_per_page' => -1,
        ));

        return Timber::get_posts($args);
    }
}