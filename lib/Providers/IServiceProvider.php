<?php

namespace Benchpress\Providers;

use DI\Container;

interface IServiceProvider {
    public function registerServices(Container $container): void;
}