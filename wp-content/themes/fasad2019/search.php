<?php
get_header();

if (have_posts()) : 
    echo 'test';
    while ( have_posts() ) :
        the_post();

        echo '<a href="' . get_permalink() . '">';
        the_title();
        echo '</a>';
        echo '<br>';
    endwhile;
endif;

get_footer();