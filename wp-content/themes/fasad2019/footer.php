
        </div> <!-- END: .fasad-main__container -->
        <footer class="fasad-footer">
            <div class="fasad-footer__container">
            <?php
                $contact = get_field( 'contact', 'option' );
                $collaboration = get_field('collaboration', 'option');
                $social_media = get_field('social_media', 'option');
                $facebook = $social_media['facebook'];
                $instagram = $social_media['instagram'];

                echo '<div class="fasad-footer__item">';
                echo '<h3 class="fasad-footer__item-title">' . esc_html( $social_media['title'] ) . '</h3>';
                if( $facebook ) :
                    echo '<a class="socialmedia-link" href="' . esc_url( $facebook ) . '" target="_blank" title="Facebook" rel="noopener">';
                    echo '<i class="fa fa-facebook"></i>';
                    echo '</a>';
                endif;
                if( $instagram ) :
                    echo '<a class="socialmedia-link" href="' . esc_url( $instagram ) . '" target="_blank" title="LinkedIn" rel="noopener">';
                    echo '<i class="fa fa-linkedin"></i>';
                    echo '</a>';
                endif;    
                echo '</div>';

                if( $collaboration ): 
                    echo '<div class="fasad-footer__item">';
                    echo '<h3 class="fasad-footer__item-title">' . esc_html( $collaboration['title'] ) . '</h3>';
                    $links = $collaboration['add_link'];

                    if ($links) :
                        foreach ($links as $link) :
                            echo '<a class="collaboration-link" href="' . esc_url( $link['link']['url'] ) . '" rel="noopener" '.( $link['link']['target'] ? 'target="' . esc_attr( $link['link']['target'] ) . '"' : '').'>';
                            echo esc_html( $link['link']['title'] );
                            echo '</a>';

                            if ( next( $links ) ) {
                                echo ', ';
                            }
                        endforeach;
                    endif;
                    echo '</div>';
                endif;
                
                if( $contact ):
                    echo '<div class="fasad-footer__item">';
                    echo '<h3 class="fasad-footer__item-title">' . esc_html( $contact['title'] ) . '</h3>';
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