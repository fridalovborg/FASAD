<?php
    get_header();
?>
    <h1 class="fasad-main__title"><?php single_post_title(); ?></h1>

    <div class="fasad-news">
        <ol class="fasad-news__list">
        <?php
            if ( have_posts() ) {
                while ( have_posts() ) : the_post();
                    $post_page_link = get_the_permalink();
                    echo '<li class="fasad-news__list-item">';
                    echo '<span class="fasad-news__content">';
                    echo '<a class="fasad-news__content-link" href="' . $post_page_link . '">';
                    the_title('<h2 class="fasad-news__content-title">', '</h2>');
                    echo '<p>' . excerpt(50) . '</p>';
                    echo '</a>';
                    echo '</span>';
                    echo '</li>';
                endwhile;
            }
        ?>
        </ol>
    </div> <!-- END: .fasad-news -->
<?php
    get_footer();