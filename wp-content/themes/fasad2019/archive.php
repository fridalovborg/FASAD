<?php
    get_header();

    $postType = get_queried_object();
    $title = esc_html($postType->label);
    if (is_category() || is_tag()) $title = single_cat_title("", false);

    $sub_menu = array(
        'menu' => $postType->query_var,
        'menu_class' => 'child-menu__list',
        'container' => 'nav',
        'container_class'=> 'child-menu'
    );

    if (wp_get_nav_menu_object($postType->query_var)->count >= 1) wp_nav_menu( $sub_menu );
?>
    <h1 class="fasad-main__title"><?= $title; ?></h1>

    <div class="fasad-news">
        <?php
            $counter =  1;
        
            if ( have_posts() ) {
                echo '<div class="fasad-news__list">';

                while ( have_posts() ) : the_post();
                    $post_page_link = get_the_permalink();
                    $title = get_the_title();
                    $image = get_the_post_thumbnail_url(get_the_ID(), 'fasad_frontpage');
                    $etikett = get_field('etikett');

                    if ($counter%2 == 0) {
                        $order = 'reverse-order';
                    } else {
                        $order = '';
                    }

                    echo '<a class="fasad-news__link" href="' . $post_page_link . '">';
                    echo '<div class="fasad-news__item ' . $order . '">';
                    echo '<img class="image fasad-news__item-image" src="' . $image . '" alt="' . $title . '">';
                    echo '<div class="fasad-news__item-content">';
                    if ($etikett) {
                        echo '<p class="fasad-news__item-etikett">' . $etikett . '</p>';
                    }
                    echo '<h2 class="fasad-news__item-title">' . $title . '</h2>';
                    echo '<p>' . excerpt(50) . '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</a>';

                    $counter++;
                endwhile;
                echo '</div>';
            }
        ?>
    </div> <!-- END: .fasad-news -->
<?php
    get_footer();