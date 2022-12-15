<?php

namespace Benchpress\Mappers;

use Timber\Post;

interface IPostMapper {
    public function map(Post $post): Object;
}