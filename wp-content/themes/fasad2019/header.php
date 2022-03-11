<!DOCTYPE html>
<html lang="sv">
<head>
    <?php
    $postType = get_queried_object();
    $title = esc_html($postType->label);
    if (is_category() || is_tag()) $title = single_cat_title("", false);
    ?>
    <title><?php if ( is_single() ) {
        bloginfo('name'); echo " - "; single_post_title('', true); 
    } else if (is_post_type_archive()) {
        bloginfo('name'); echo " - " . $title;
    } else if (is_front_page()) {
        bloginfo('name');
    } else {
        bloginfo('name'); echo " - "; the_title();
    }?>"</title>
    <meta name="description" content="<?php if ( is_single() ) {
        single_post_title('', true); 
    } else {
        bloginfo('name'); echo " - "; bloginfo('description');
    }?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/e50c82b448.js" crossorigin="anonymous" defer></script>
    <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="1b015562-64b5-4dc2-bdc5-7aedb4548120" data-blockingmode="auto" async></script>
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
                'depth' => 1,
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
    <?php get_search_form(); ?>
    <div class="fasad-main">
        <div class="fasad-main__container">