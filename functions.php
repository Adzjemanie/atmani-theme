<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function atmani_theme_setup() {

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('custom-header');

    register_nav_menus([
        'primary' => __('Primary Menu','atmani')
    ]);

}

add_action('after_setup_theme','atmani_theme_setup');


function atmani_enqueue() {

    wp_enqueue_style(
        'atmani-style',
        get_stylesheet_uri(),
        [],
        wp_get_theme()->get('Version')
    );

}

add_action('wp_enqueue_scripts','atmani_enqueue');