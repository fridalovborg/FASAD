<?php
    get_header();
?>
    <div class="fasad-main">
        <div class="fasad-main__container">
            <?php
                if ( have_posts() ) {
                    while ( have_posts() ) : 
                        the_post();
                        the_title('<h1 class="fasad-main__title">', '</h1>');
                        the_content();
                    endwhile;
                }
            ?>
        </div>

        <footer class="fasad-footer">
            <div class="fasad-footer__container">
                <p>hej sidfot</p>
            </div>
        </footer>
    </div>
<?php
    get_footer();