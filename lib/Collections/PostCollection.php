<?php

namespace Benchpress\Collections;

use Timber\Post;

class PostCollection extends Collection {

    /**
     * @param Post[] $items
     */
    public function __construct(array $items = []) {
        parent::__construct('Timber\Post', $items);
    }
}