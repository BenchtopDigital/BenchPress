<?php

namespace Benchpress\Services\Cache;

interface ICacheService {
    public function get(string $key): mixed;
    public function set(string $key, mixed $value, ?int $ttl);
    public function delete(string $key): void;
}