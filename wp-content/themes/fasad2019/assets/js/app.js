import css from '../css/index.scss'; 
'use strict';

(function($) {
    $(function() {
        
        // Mobile menu
        $( '.mobile-menu-logo--js' ).on( 'click' , ( e ) => {

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

            // Child menu 
            if ($( '.menu-item' ).hasClass( 'menu-item-has-children' )) {
                $('.menu-item.menu-item-has-children').append('<span class="child-menu-icon child-menu-icon--js"><i class="fas fa-chevron-down"></i></span>');
            }

            // Child menu
            $( '.child-menu-icon--js' ).on( 'click' , function( e ) {
                var submenu = $(this).siblings('.sub-menu');

                if ($(submenu).is(':hidden')) {
                  $(submenu).slideDown(200);
                } else {
                  $(submenu).slideUp(200);
                }
            });

        });
    });
})(jQuery);
