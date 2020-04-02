<?php
get_header();

    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
?>
            <div class="frontpage_container">
<?php
            // Map (image & link)
            while( have_rows('map') ): the_row();
                $image = get_sub_field('image');
                $link = get_sub_field('link');

                // echo '<pre>';
                // var_dump('image', $image);
                // echo '</pre>';
?>
                <div class="frontpage_container-item">
                    <a href="<?= $link['url'] ?>" target="<?= $link['target'] ?>">
                        <img src="<?= $image['sizes']['fasad_frontpage'] ?>" alt="<?= $image['description'] ?>">
                    </a>
                </div>
<?php
            endwhile;   

            // Next meeting
            while( have_rows('next_meting') ): the_row();
                $text = get_sub_field('text');
                $link = get_sub_field('link');

                // echo '<pre>';
                // var_dump('image', $text);
                // echo '</pre>';
?>
                <div class="frontpage_container-item">
                    <a href="<?= $link['url'] ?>" target="<?= $link['target'] ?>">
                        <p><?= $text ?></p>
                    </a>
                </div>
<?php
            endwhile;  

            // News
            // WP Query
?>
                <div class="frontpage_container-item">
                    <a href="">
                        <p>News</p>
                    </a>
                </div>
<?php
            // Let us know
            while( have_rows('let_us_know') ): the_row();
                $title = get_sub_field('title');
                $text = get_sub_field('text');
                $link = get_sub_field('link');
?>
                <div class="frontpage_container-item">
                    <a href="<?= $link['url'] ?>" target="<?= $link['target'] ?>">
                        <h2><?= $title ?></h2>
                        <p><?= $text ?></p>
                    </a>
                </div>
<?php
            endwhile;

            // Manifest
            while( have_rows('manifest') ): the_row();
                $image = get_sub_field('image');
                $link = get_sub_field('link');
?>
                <div class="frontpage_container-item">
                    <a href="<?= $link['url'] ?>" target="<?= $link['target'] ?>">
                        <img src="<?= $image['sizes']['fasad_frontpage'] ?>" alt="<?= $image['description'] ?>">
                    </a>
                </div>
<?php
            endwhile;  

            // Member
            while( have_rows('member') ): the_row();
                $title = get_sub_field('title');
                $text = get_sub_field('text');
                $link = get_sub_field('link');
?>
                <div class="frontpage_container-item">
                    <a href="<?= $link['url'] ?>" target="<?= $link['target'] ?>">
                        <h2><?= $title ?></h2>
                        <p><?= $text ?></p>
                    </a>
                </div>
<?php
            endwhile;
?>
            </div>
<?php
        endwhile;
    endif;
get_footer();