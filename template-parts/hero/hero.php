<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$header_image = get_header_image();
$hero_style   = '';

if ( $header_image ) {
    $hero_style = sprintf(
        ' style="background-image: linear-gradient(180deg, rgba(13,17,23,0.8), rgba(13,17,23,0.92)), url(%s);"',
        esc_url( $header_image )
    );
}
?>
<section class="hero-section"<?php echo wp_kses_post( $hero_style ); ?> aria-label="<?php esc_attr_e( 'Hero section', 'atmani' ); ?>">
    <div class="hero-overlay"></div>
    <div class="hero-content container">
        <div class="hero-copy">
            <p class="hero-eyebrow"><?php esc_html_e( 'Dark cinematic storytelling', 'atmani' ); ?></p>
            <h1 class="hero-title"><?php bloginfo( 'name' ); ?></h1>
            <p class="hero-description"><?php bloginfo( 'description' ); ?></p>
            <a class="button button-primary" href="<?php echo esc_url( home_url( '/#site-content' ) ); ?>">
                <?php esc_html_e( 'Explore the experience', 'atmani' ); ?>
            </a>
        </div>
    </div>
</section>
