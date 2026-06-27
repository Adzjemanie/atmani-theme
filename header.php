<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo('charset'); ?>">

<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header class="site-header">

    <div class="container">

        <div class="logo">

            <a href="<?php echo esc_url(home_url('/')); ?>">

                <?php
                if (has_custom_logo()) {
                    the_custom_logo();
                } else {
                    bloginfo('name');
                }
                ?>

            </a>

        </div>

        <nav class="main-navigation">

            <?php

            wp_nav_menu(array(

                'theme_location' => 'primary',

                'container'      => false,

                'menu_class'     => 'main-menu',

                'fallback_cb'    => false,

            ));

            ?>

        </nav>

        <button class="menu-toggle">

            ☰

        </button>

    </div>

</header>

<section class="hero">

    <div class="hero-overlay">

        <div class="hero-content">

            <h1><?php bloginfo('name'); ?></h1>

            <p><?php bloginfo('description'); ?></p>

            <a href="#featured" class="button">

                Discover Stories

            </a>

        </div>

    </div>

</section>