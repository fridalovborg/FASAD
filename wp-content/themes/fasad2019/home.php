<?php
    get_header();
?>
    <h1 class="fasad-main__title"><?php single_post_title(); ?></h1>

    <div class="fasad-news">
        <?php
            if ( have_posts() ) {
                while ( have_posts() ) : the_post();
                    $post_page_link = get_the_permalink();
                    echo '<div class="fasad-news__item">';
                    echo '<a class="fasad-news__item-link" href="' . $post_page_link . '">';
                    the_title('<h2 class="fasad-news__item-title">', '</h2>');
                    echo excerpt(50);
                    echo '</a>';
                    echo '</div>';
                endwhile;
            }
        ?>
    </div> <!-- END: .fasad-news -->
<?php
    get_footer();