<?php

namespace Benchpress\Service;

use Benchpress\Collections\Collection;
use Benchpress\Mappers\ACF\IACFMapper;
use Benchpress\Services\ACFService;

abstract class CollectionService {

    public function __construct(
        protected readonly string $collectionType,
        protected readonly string $postType,
        protected readonly ACFService $acf,
        protected readonly IACFMapper $mapper
    ) {}

    protected function getOne(\WP_Post | int $postOrPostId): Object | false {
        $fields = false;

        if (is_numeric($postOrPostId)) {
            $fields = $this->acf->getFields($postOrPostId);
        } else {
            $fields = $this->acf->getFieldsForPost($postOrPostId);
        }

        return $fields ? $this->mapper->map($fields) : $fields;
    }

    protected function getCollection(): mixed {
        $collection = new Collection($this->collectionType);
        $postFields = $this->acf->getFieldsForPostType($this->postType);

        foreach($postFields as $fields) {
            $collection->add($this->mapper->map($fields));
        }

        return $collection;
    }
}