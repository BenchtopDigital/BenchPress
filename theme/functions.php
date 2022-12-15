<?php

$composer_autoload = __DIR__ . '/vendor/autoload.php';
if (file_exists($composer_autoload)) {
    require_once $composer_autoload;
}

if (WP_DEBUG) {
    // Hide depracation warnings
    error_reporting(E_ALL ^ E_DEPRECATED);
}

/**
 * Theme setup.
 */
function benchpress_setup(): void {
    add_theme_support('title-tag');

    register_nav_menus(
        array(
            'primary' => 'Main Menu',
        )
    );

    add_theme_support(
        'html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
        )
    );

    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');

    add_theme_support('align-wide');
    add_theme_support('wp-block-styles');

    add_theme_support('editor-styles');
    add_editor_style('dist/css/editor.min.css');

    add_theme_support('responsive-embeds');

    // if( function_exists('acf_add_options_page') ) {
    //     acf_add_options_page('Content Settings');
    // }
}

add_action('after_setup_theme', 'benchpress_setup');

function benchpress_enqueue_scripts(): void {
    $theme = wp_get_theme();

    wp_enqueue_style('ifm-styles', benchpress_asset('dist/css/benchpress.min.css'), array(), $theme->get('Version'));
    wp_enqueue_script('ifm-scripts', benchpress_asset('dist/js/benchpress.min.js'), array(), $theme->get('Version'));
}

add_action('wp_enqueue_scripts', 'benchpress_enqueue_scripts');

function benchpress_asset(string $path): string {
    if (wp_get_environment_type() === 'production') {
        return get_stylesheet_directory_uri() . '/' . $path;
    }

    return add_query_arg('time', time(), get_stylesheet_directory_uri() . '/' . $path);
}

function enable_svg_upload( $upload_mimes ) {
    $upload_mimes['svg'] = 'image/svg+xml';
    $upload_mimes['svgz'] = 'image/svg+xml';
    return $upload_mimes;
}
add_filter( 'upload_mimes', 'enable_svg_upload', 10, 1 );