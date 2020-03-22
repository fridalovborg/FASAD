<!DOCTYPE html>
<html>
<head>
    <title><?= get_bloginfo( 'name' ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon -->
    <!-- <link rel="icon" type="image/png" href="<?= get_stylesheet_directory_uri(); ?>/images/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="<?= get_stylesheet_directory_uri(); ?>/images/android-chrome-512x512.png" sizes="512x512">
    <link rel="apple-touch-icon" type="image/png" href="<?= get_stylesheet_directory_uri(); ?>/images/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" type="image/png" href="<?= get_stylesheet_directory_uri(); ?>/images/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="<?= get_stylesheet_directory_uri(); ?>/images/favicon-32x32.png" sizes="32x32"> -->
<?php
    wp_head();
?>
<style>
    /* Override wp_head css */
    html { 
        margin-top: 0 !important;
    }
</style>
</head>
<body class="fasad">
    <header class="header">
        <?php the_custom_logo() ?>

        <div class="mobile-menu-logo mobile-menu-logo--js">
            <div class="mobile-menu-logo--open"><?= file_get_contents( get_stylesheet_directory_uri() . '/images/menu.svg' ); ?></div>
            <div class="mobile-menu-logo--close"><?= file_get_contents( get_stylesheet_directory_uri() . '/images/menu.svg' ); ?></div>
        </div>

        <?php
        wp_nav_menu(
            array(
                'menu' => 'main-menu',
                'container_class' => 'header__menu',
                'menu_class' => 'header__menu-list',
                'items_wrap' => '<ul class="%2$s">%3$s</ul>',
            )
        );
        ?>
    </header> <!-- END: .header -->
    <nav class="mobile-menu">
        <?php
        wp_nav_menu(
            array(
                'menu' => 'mobile-menu',
                'container_class' => 'mobile__nav',
                'menu_class' => 'mobile__nav-list',
                'items_wrap' => '<ul class="%2$s">%3$s</ul>',
            )
        );
        ?>
    </nav><!-- .menu -->
    <div class="fasad-main">
        <div class="fasad-main__container">