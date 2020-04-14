<!DOCTYPE html>
<html lang="sv">
<head>
    <title><?= get_bloginfo( 'name' ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/e50c82b448.js" crossorigin="anonymous"></script>
    <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="1b015562-64b5-4dc2-bdc5-7aedb4548120" data-blockingmode="auto" type="text/javascript"></script>
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
            <div class="mobile-menu-logo--open"><?= file_get_contents( get_stylesheet_directory_uri() . '/images/mobile-menu-open.svg' ); ?></div>
            <div class="mobile-menu-logo--close"><?= file_get_contents( get_stylesheet_directory_uri() . '/images/mobile-menu-close.svg' ); ?></div>
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
                'link_before' => '<h3 class="mobile__nav-item">',
                'link_after' => '</h3>',
            )
        );
        ?>
    </nav><!-- .mobile-menu -->
    <div class="fasad-main">
        <div class="fasad-main__container">