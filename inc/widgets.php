<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register widget areas.
 */
function atmani_widgets_init() {
    register_sidebar(
        [
            'name'          => __( 'Footer Widget Area', 'atmani' ),
            'id'            => 'footer-1',
            'description'   => __( 'Add widgets to the footer area.', 'atmani' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ]
    );
}
add_action( 'widgets_init', 'atmani_widgets_init' );
