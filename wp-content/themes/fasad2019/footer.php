
        </div> <!-- END: .fasad-main__container -->
        <footer class="fasad-footer">
            <div class="fasad-footer__container">
            <?php
                $contact = get_field( 'contact', 'option' );
                $collaboration = get_field('collaboration', 'option');
                $social_media = get_field('social_media', 'option');

                if( $social_media ) :
                    echo '<div class="fasad-footer__item">';
                    echo '<h4>' . esc_html( $social_media['title'] ) . '</h4>';
                    $links = $social_media['add_link'];

                    if ($links) :
                        foreach ($links as $link) :
                            echo '<a class="socialmedia-link" href="' . esc_url( $link['link']['url'] ) . '" '.( $link['link']['target'] ? 'target="' . esc_attr( $link['link']['target'] ) . '"' : '').'>';
                            echo esc_html( $link['link']['title'] );
                            echo ' </a>';
                        endforeach;
                    endif;
                    echo '</div>';
                endif;

                if( $collaboration ): 
                    echo '<div class="fasad-footer__item">';
                    echo '<h4>' . esc_html( $collaboration['title'] ) . '</h4>';
                    $links = $collaboration['add_link'];

                    if ($links) :
                        foreach ($links as $link) :
                            echo '<a class="collaboration-link" href="' . esc_url( $link['link']['url'] ) . '" '.( $link['link']['target'] ? 'target="' . esc_attr( $link['link']['target'] ) . '"' : '').'>';
                            echo esc_html( $link['link']['title'] );
                            echo '</a>';
                        endforeach;
                    endif;  
                    echo '</div>';
                endif;
                
                if( $contact ):
                    echo '<div class="fasad-footer__item">';
                    echo '<h4>' . esc_html( $contact['title'] ) . '</h4>';
                    echo '<a href="' . esc_url( $contact['link']['url'] ) . '" '.( $contact['link']['target'] ? 'target="' . esc_attr( $contact['link']['target'] ) . '"' : '').'>';
                    echo esc_html( $contact['link']['title'] );
                    echo '</a>';
                    echo '</div>';
                endif;
            ?>
            </div> <!-- END: .fasad-footer__container -->
        </footer> <!-- END: .fasad-footer -->
    </div> <!-- END: .fasad-main -->
</body>
</html>