import css from '../css/index.scss'; 
'use strict';

(function($) {
    $(function() {
        
        // Mobile menu
        const mobileMenu = $( '.mobile-menu-logo--js' );
        mobileMenu.on( 'click' , ( e ) => {
            
            $( '.mobile-menu' ).toggleClass( 'mobile-menu-active' );
            $( '.header' ).toggleClass( 'mobile-menu-icon-active' );
            
            if ($( '.mobile-menu' ).hasClass( 'mobile-menu-active' )) {
                $( '.mobile-menu' ).fadeIn();
            } else {
                $( '.mobile-menu' ).fadeOut();
            }

            // Change color of Header
            if ($( '.header' ).hasClass( 'mobile-menu-icon-active' )) {
                $( '.header' ).css( 'background', '#FFF9F5' );
            } else {
                $( '.header' ).css( 'background', '#FFF' );
            }
        });

    });
})(jQuery);