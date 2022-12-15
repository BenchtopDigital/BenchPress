<?php

use Benchpress\Bootstrapper;
use Benchpress\Models\WordpressQueryContext;

global $wp_query;

$context = new WordpressQueryContext($wp_query);
$bootstrapper = new Bootstrapper($context);
$container = $bootstrapper->bootstrap();