<?php

namespace Benchpress\Helpers;

class DebugHelpers {
    public static function Dump(mixed $data): void {
        echo '<div class="bg-white text-black text-body"><pre>';
        var_dump($data);
        echo '</pre></div>';
    }
}