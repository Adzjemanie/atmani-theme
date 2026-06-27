<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
    <span class="screen-reader-text"><?php esc_html_e( 'Menu', 'atmani' ); ?></span>
    <span class="menu-icon"></span>
</button>
<nav class="primary-navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'atmani' ); ?>">
    <?php
    wp_nav_menu([
        'theme_location' => 'primary',
        'menu_id'        => 'primary-menu',
        'container'      => false,
        'menu_class'     => 'primary-menu',
        'fallback_cb'    => false,
    ]);
    ?>
</nav>
