<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Enqueue theme assets.
 */
function atmani_enqueue_assets() {
    $theme_version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style(
        'atmani-main',
        get_template_directory_uri() . '/assets/css/main.css',
        [],
        $theme_version
    );

    wp_enqueue_style(
        'atmani-navigation',
        get_template_directory_uri() . '/assets/css/navigation.css',
        [ 'atmani-main' ],
        $theme_version
    );

    wp_enqueue_style(
        'atmani-hero',
        get_template_directory_uri() . '/assets/css/hero.css',
        [ 'atmani-main' ],
        $theme_version
    );

    wp_enqueue_script(
        'atmani-theme',
        get_template_directory_uri() . '/assets/js/theme.js',
        [],
        $theme_version,
        true
    );
}

add_action( 'wp_enqueue_scripts', 'atmani_enqueue_assets' );
