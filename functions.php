<?php

if (!defined('ABSPATH')) {
    exit;
}

function atmani_setup() {

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('custom-header');

    register_nav_menus([
        'primary' => __('Primary Menu', 'atmani'),
    ]);

}

add_action('after_setup_theme', 'atmani_setup');

function atmani_assets() {

    $uri = get_template_directory_uri();

    wp_enqueue_style(
        'atmani-main',
        $uri . '/assets/css/main.css',
        [],
        filemtime(get_template_directory() . '/assets/css/main.css')
    );

    if (file_exists(get_template_directory() . '/assets/js/main.js')) {
        wp_enqueue_script(
            'atmani-main',
            $uri . '/assets/js/main.js',
            [],
            filemtime(get_template_directory() . '/assets/js/main.js'),
            true
        );
    }
}

add_action('wp_enqueue_scripts', 'atmani_assets');