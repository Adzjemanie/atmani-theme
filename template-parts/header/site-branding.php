<?php
/**
 * Site Branding
 */

if ( has_custom_logo() ) {
    the_custom_logo();
} else {
    ?>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-title">
        <?php bloginfo( 'name' ); ?>
    </a>
    <p class="site-description">
        <?php bloginfo( 'description' ); ?>
    </p>
    <?php
}