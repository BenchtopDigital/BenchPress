<?php

namespace Benchpress\Resolvers;

use Benchpress\Models\WordpressQueryContext;

interface ITwigTemplateResolver {
    public function resolveTemplate(WordpressQueryContext $queryContext): string | null;
}