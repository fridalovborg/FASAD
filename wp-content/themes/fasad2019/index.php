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
                // $parent_title = get_post($post->post_parent)->post_title;
                // $parent_url = get_post($post->post_parent)->guid;
                // $is_active = is_page($post->post_parent) ? 'current_page_item' : '';
                
                echo '<nav class="child-menu">';
                echo '<ul class="child-menu__list">';
                // echo '<li class="page_item '. $is_active .'"><a href="'. $parent_url .'">'. $parent_title .'</a></li>';
                echo $children;
                echo '</ul>';
                echo '</nav>';
            }

            // post content
            while ( have_posts() ) : the_post();
                the_title('<h1 class="fasad-main__title">', '</h1>');
                the_content();
            endwhile;
        }

    get_footer();