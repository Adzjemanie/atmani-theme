<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
<footer class="site-footer">
    <div class="footer-inner">
        <p>&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?></p>
        <nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'atmani' ); ?>">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'menu_class'     => 'footer-menu',
                'container'      => false,
            ]);
            ?>
        </nav>
    </div>
</footer>
