<?php
// Allow gutenberg blocks
function allowed_blocks( $allowed_block_types, $post ) {
    return array(
        'fasad/grid-block',
        'fasad/grid-column',
        'fasad/heading-block',
        'fasad/list-block',
        'fasad/text-block',
        'fasad/image-block'
    );
}
add_filter( 'allowed_block_types', 'allowed_blocks', 10, 2 );

// Customazier logo
add_theme_support( 'custom-logo', array(
    'width'  => 324,
    'flex-height' => true,
) );

// Excerpt
function excerpt($limit) {
    return wp_trim_words(get_the_excerpt(), $limit, '&hellip;');
}

// ACF Options page Footer
add_action('acf/init', 'acf_footer_settings');

function acf_footer_settings() {
    if( function_exists('acf_add_options_page') ) {
        $option_page = acf_add_options_page(array(
            'page_title'    => __('Footer Settings'),
            'menu_title'    => __('Footer Settings'),
            'menu_slug'     => 'footer-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    }
}