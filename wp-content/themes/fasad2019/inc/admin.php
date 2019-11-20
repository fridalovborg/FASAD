<?php
function allowed_blocks( $allowed_block_types, $post ) {
    return array(
        'fasad/text-block',
        'fasad/heading-block',
        'fasad/list-block'
    );
}
add_filter( 'allowed_block_types', 'allowed_blocks', 10, 2 );

// Customazier logo
add_theme_support( 'custom-logo', array(
    'width'  => 324,
    'flex-height' => true,
) );