<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Output the custom logo or site title.
 */
function atmani_site_branding() {
    if ( has_custom_logo() ) {
        the_custom_logo();
    } else {
        printf(
            '<a class="site-title" href="%1$s">%2$s</a>',
            esc_url( home_url( '/' ) ),
            esc_html( get_bloginfo( 'name' ) )
        );
    }
}
