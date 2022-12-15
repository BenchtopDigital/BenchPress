<?php

namespace Benchpress\Services\Cache;

use Benchpress\Collections\Dictionary;

class RuntimeMemoryCacheService implements ICacheService {

    private static RuntimeMemoryCacheService $instance;
    private readonly Dictionary $cache;

    private function __construct() {
        $this->cache = new Dictionary('string', 'mixed');
    }

    public static function GetInstance(): RuntimeMemoryCacheService {
        if (isset(self::$instance) === false) {
            self::$instance = new RuntimeMemoryCacheService();
        }

        return self::$instance;
    }

    public function get(string $key): mixed {
        return $this->cache->get($key);
    }

    public function set(string $key, mixed $value, ?int $ttl = null): void {
        $this->cache->add($key, $value);
    }

    public function delete(string $key): void {
        $this->cache->delete($key);
    }
}