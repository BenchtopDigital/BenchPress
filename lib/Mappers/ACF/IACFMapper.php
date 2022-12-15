<?php

namespace Benchpress\Mappers\ACF;

interface IACFMapper {
    public function map(array $fields): Object;
}