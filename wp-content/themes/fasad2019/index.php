<?php
    get_header();

        if ( have_posts() ) {

            // child menu
            if ( !$post->post_parent ) {
                $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
            } else {
                if ( $post->ancestors ) {
                    $ancestors = end($post->ancestors);
                    $children = wp_list_pages("title_li=&child_of=".$ancestors."&echo=0");
                }
            }
            
            if ( $children ) {
                echo '<nav class="child-menu">';
                echo '<ul class="child-menu__list">' . $children . '</ul>';
                echo '</nav>';
            }

            // post content
            while ( have_posts() ) : the_post();
                the_title('<h1 class="fasad-main__title">', '</h1>');
                the_content();
            endwhile;
        }

    get_footer();