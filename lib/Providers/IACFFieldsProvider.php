<?php

namespace Benchpress\Providers;

interface IACFFieldsProvider {
    public function getFields(): array|false;
}