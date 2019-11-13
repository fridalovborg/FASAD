<?php
/**
 * STYLES
 */
wp_enqueue_style( 'site', get_template_directory_uri() . '/dist/css/style.css' , false, '1.1' , 'all' );

/**
 * SCRIPTS
 */
wp_enqueue_script( 'site', get_template_directory_uri() . '/dist/js/app.min.js' , array('jquery'), '1.1' , false );