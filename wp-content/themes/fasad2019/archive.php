<?php
    get_header();

    $postType = get_queried_object();
    $title = esc_html($postType->label);
    if (is_category() || is_tag()) $title = single_cat_title("", false);

    // $sub_menu = array(
    //     'menu' => $postType->query_var,
    //     'menu_class' => 'child-menu__list',
    //     'container' => 'nav',
    //     'container_class'=> 'child-menu'
    // );

    // if (wp_get_nav_menu_object($postType->query_var)->count >= 1) wp_nav_menu( $sub_menu );
?>
    <h1 class="fasad-main__title"><?= $title ?></h1>

    <div class="fasad-news">
        <?php
            if (is_category() || $postType->name === 'aktuella') {
                $categories = get_categories(array( 'taxonomy' => 'category', 'exclude' => 1 ));
                echo '<div class="fasad-news__filter">';
                foreach ($categories as $category) {
                    echo '<a class="fasad-news__filter--item" href="' . get_term_link($category->term_id) . '">';
                    echo $category->name;
                    echo '</a> ';
                }
                echo '</div>';
            }
            // $counter =  1;

            if ( have_posts() ) {
                echo '<div class="fasad-news__list">';

                while ( have_posts() ) : the_post();
                    $post_page_link = get_the_permalink();
                    $title = get_the_title();
                    $image = get_the_post_thumbnail_url(get_the_ID(), 'fasad_frontpage');
                    $etikett = get_field('etikett');

                    if (!$image) $image = 'http://localhost:8888/js-bootcamp/wp-content/uploads/2021/11/hero-image.fill_.size_1248x702.v1624470400.jpg';

                    // if ($counter%2 == 0) {
                    //     $order = 'reverse-order';
                    // } else {
                    //     $order = '';
                    // }

                    // echo '<div class="fasad-news__item ' . $order . '">';
                    echo '<div class="fasad-news__item">';
                    echo '<a class="fasad-news__link" href="' . $post_page_link . '">';
                    echo '<img class="image fasad-news__item-image" src="' . $image . '" alt="' . $title . '">';
                    echo '<div class="fasad-news__item-content">';
                    if ($etikett) {
                        echo '<p class="fasad-news__item-etikett">' . $etikett . '</p>';
                    }
                    echo '<h3 class="fasad-news__item-title">' . $title . '</h3>';
                    
                    echo '<p>' . wp_trim_words( get_the_content(), 20, '...' ) . '</p>';
                    echo '</div>';
                    echo '</a>';
                    echo '</div>';

                    // $counter++;
                endwhile;
                echo '</div>';
            }
        ?>
    </div> <!-- END: .fasad-news -->
<?php
    get_footer();