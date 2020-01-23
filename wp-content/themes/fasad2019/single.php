<?php
    get_header();
?>
    <div class="fasad-news__single">
        <?php
            if ( have_posts() ) {
                while ( have_posts() ) : the_post();
                    the_title('<h1 class="fasad-main__title">', '</h1>');
                    the_content();
                endwhile;
            }
        ?>
        <a class="fasad-news__single--go-back-link" href="/js-bootcamp/nyheter"><h3>< Tillbaka till nyheter</h3></a>
    </div> <!-- END: .fasad-news__single -->
<?php
    get_footer();