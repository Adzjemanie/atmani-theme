<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Theme setup and support registration.
 */
function atmani_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support(
        'custom-logo',
        [
            'height'      => 90,
            'width'       => 240,
            'flex-height' => true,
            'flex-width'  => true,
        ]
    );
    add_theme_support(
        'custom-header',
        [
            'default-image' => '',
            'width'         => 2000,
            'height'        => 900,
            'flex-width'    => true,
            'flex-height'   => true,
            'header-text'   => false,
        ]
    );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'wp-block-styles' );

    register_nav_menus(
        [
            'primary' => __( 'Primary Menu', 'atmani' ),
        ]
    );
}

add_action( 'after_setup_theme', 'atmani_theme_setup' );
