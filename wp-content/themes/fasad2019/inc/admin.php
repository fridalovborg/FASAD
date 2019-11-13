<?php
function allowed_blocks( $allowed_block_types, $post ) {
    return array(
        'fasad/text-block',
        'fasad/heading-block'
    );
}
add_filter( 'allowed_block_types', 'allowed_blocks', 10, 2 );

// Customazier logo
add_theme_support( 'custom-logo' );