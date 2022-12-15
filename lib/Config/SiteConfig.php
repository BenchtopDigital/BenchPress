<?php

namespace Benchpress\Config;

class SiteConfig {

    public readonly string $twigTemplateDirectory;
    public readonly string $twigCacheDirectory;
    public readonly string $themeDir;
    public readonly bool $isDebug;

    public function __construct() {
        $this->themeDir = get_template_directory();
        $this->twigTemplateDirectory = $this->themeDir . '/twig-templates';
        $this->twigCacheDirectory = $this->themeDir . '/twig-cache';
        $this->isDebug = WP_DEBUG;
    }
}