<?php
    get_header();

        if ( have_posts() ) {
            while ( have_posts() ) : the_post();
                the_title('<h1 class="fasad-main__title">', '</h1>');
                the_content();
            endwhile;
        }

    get_footer();