<?php

namespace Benchpress\Helpers;

class StringHelpers {
    static function Lowercase(string $str): string {
        return  strtolower($str);
    }

    static function Capitalize(string $str): string {
        return ucfirst($str);
    }

    public static function Slugify($str, string $divider = '-'): string {
        $str = preg_replace('~[^\pL\d]+~u', $divider, $str);
        $str = iconv('utf-8', 'us-ascii//TRANSLIT', $str);
        $str = preg_replace('~[^-\w]+~', '', $str);
        $str = trim($str, $divider);
        $str = preg_replace('~-+~', $divider, $str);
        return strtolower($str);
    }
}