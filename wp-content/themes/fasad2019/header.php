<!DOCTYPE html>
<html>
<head>
    <title>FASAD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
<body>
    <pre style="display: none;">
        <?php //var_dump(get_custom_logo()) ?>
    </pre>
    <header class="header">
        <?php the_custom_logo() ?>

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
    </header>