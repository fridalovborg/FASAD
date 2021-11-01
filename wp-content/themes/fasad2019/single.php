<?php
    get_header();
?>
    <div class="fasad-news__single">
        <?php
            if ( have_posts() ) {
                while ( have_posts() ) : the_post();
                    the_title('<h1 class="fasad-main__title">', '</h1>');
                    the_content();
                    the_tags('Relaterat: ');
                endwhile;
            }
        ?>
        <a class="fasad-news__single--go-back-link" href="<?= get_post_type_archive_link(get_post_type()) ?>"><h3>< Tillbaka till <?= get_post_type_object(get_post_type())->label ?></h3></a>
    </div> <!-- END: .fasad-news__single -->
<?php
    get_footer();