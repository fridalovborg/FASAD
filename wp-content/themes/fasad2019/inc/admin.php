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

// Image sizes
add_action( 'after_setup_theme', 'fasad_image_sized' );

function fasad_image_sized() {
    add_image_size( 'fasad_frontpage', 400, 400, true );
}

//Latest posts
function latestPost() {
    $get_latest_post = array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'order' => 'DESC',
    );

    $latest_post_query = new WP_Query( $get_latest_post );

    if ( $latest_post_query->have_posts() ) {
        while ( $latest_post_query->have_posts() ) {
            $latest_post_query->the_post();

            $link = get_the_permalink();
            $title = get_the_title();
            $image = get_the_post_thumbnail_url(get_the_ID(), 'fasad_frontpage');

            echo '<a class="link" href="' . $link . '">';
            echo '<div class="news-title-overlay"><h2 class="title">' . $title . '</h2></div>';
            echo '<img class="image" src="' . $image . '" alt="' . $title . '">';
            echo '</a>';
        } 
        wp_reset_postdata();
    }
}

//Feature image
add_theme_support( 'post-thumbnails' );