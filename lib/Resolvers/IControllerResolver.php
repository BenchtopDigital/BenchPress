<?php

namespace Benchpress\Resolvers;

use Benchpress\Controllers\IController;
use Benchpress\Models\WordpressQueryContext;

interface IControllerResolver {
    public function resolveController(WordpressQueryContext $context): IController | null;
}