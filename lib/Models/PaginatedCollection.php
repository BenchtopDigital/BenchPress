<?php

namespace Benchpress\Models;

use Benchpress\Collections\ICollection;

class PaginatedCollection {
    public function __construct(
        public $page,
        public $perPage,
        public $collection
    ) {

    }
}