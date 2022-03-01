<?php
    get_header();
?>
    <h1 class="fasad-main__title"><?php single_post_title(); ?></h1>

    <div class="fasad-news">
        <?php
            if ( have_posts() ) {
                echo '<div class="fasad-news__list">';
                while ( have_posts() ) : the_post();
                    $post_page_link = get_the_permalink();
                    $title = get_the_title();
                    $image = get_the_post_thumbnail_url(get_the_ID(), 'fasad_frontpage');
                    $etikett = get_field('etikett');

                    echo '<a class="fasad-news__link" href="' . $post_page_link . '">';
                    echo '<div class="fasad-news__item ' . $order . '">';
                    if ($image) {
                        echo '<img class="image fasad-news__item-image" src="' . $image . '" alt="' . $title . '">';
                    }
                        echo '<div class="fasad-news__item-content">';
                    if ($etikett) {
                        echo '<p class="fasad-news__item-etikett">' . $etikett . '</p>';
                    }
                    echo '<h3 class="fasad-news__item-title">' . $title . '</h3>';
                    echo '<p>' . excerpt(20) . '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</a>';
                endwhile;
                echo '</div>';
            }
        ?>
    </div> <!-- END: .fasad-news -->
<?php
    get_footer();