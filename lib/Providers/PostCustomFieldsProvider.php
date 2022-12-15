<?php

namespace Benchpress\Providers;

use Benchpress\Services\ACFService;

class PostCustomFieldsProvider extends ACFFieldsProvider {

    public function __construct(private readonly \WP_Post $post) {
        parent::__construct();
    }

    public function getFields(): array {
        return $this->service->getFieldsForPost($this->post);
    }

}