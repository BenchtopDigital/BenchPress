<?php

namespace Benchpress\Resolvers;

use Benchpress\Models\WordpressQueryContext;

interface ITwigContextResolver {
    public function resolveContext(WordpressQueryContext $queryContext): array;
}