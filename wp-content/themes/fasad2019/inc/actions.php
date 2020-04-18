<?php
/**
 * Enqueue styles
 */
wp_enqueue_style( 'site-css', get_template_directory_uri() . '/dist/css/style.css' , false, '1.1' , 'all' );

/**
 * Remove Emoji icons
 */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

/**
 * Async load
 */
function ikreativ_async_scripts($url) {
    if ( strpos( $url, '#asyncload') === false )
        return $url;
    else if ( is_admin() )
        return str_replace( '#asyncload', '', $url );
    else
        return str_replace( '#asyncload', '', $url )."' async='async"; 
}
add_filter( 'clean_url', 'ikreativ_async_scripts', 11, 1 );

/**
 * Enqueue scripts
 */
function ikreativ_theme_scripts() {
    wp_enqueue_script( 'site-js', get_template_directory_uri() . '/dist/js/app.min.js#asyncload' , array('jquery'), '1.1' , false );
}
add_action( 'wp_enqueue_scripts', 'ikreativ_theme_scripts');
