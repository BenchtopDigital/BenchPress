<?php

namespace Benchpress\Providers;

use Benchpress\Services\ACFService;

abstract class ACFFieldsProvider implements IACFFieldsProvider {

    protected readonly ACFService $service;

    public function __construct() {
        $this->service = new ACFService();
    }
}