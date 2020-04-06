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

            // Remove box shadow when menu is open
            if ($( '.header' ).hasClass( 'mobile-menu-icon-active' )) {
                $( '.header' ).css( 'box-shadow', 'none' );
            } else {
                $( '.header' ).css( 'box-shadow', '1px 1px 6px #BEAF9A' );
            }

            // Child menu fontawesome icon
            if ($( '.menu-item' ).hasClass( 'menu-item-has-children' )) {
                $('.menu-item.menu-item-has-children').append('<span class="child-menu-icon child-menu-icon--js"><i class="fas fa-chevron-down"></i></span>');
            }

            // Child menu slide effect
            $( '.child-menu-icon--js' ).on( 'click' , function( e ) {
                var submenu = $(this).siblings('.sub-menu');

                if ($(submenu).is(':hidden')) {
                    $(submenu).slideDown(200);
                    $( '.child-menu-icon--js > .fas' ).css( 'transform', 'rotate(180deg)' );
                } else {
                    $(submenu).slideUp(200);
                    $( '.child-menu-icon--js > .fas' ).css( 'transform', 'rotate(0deg)' );
                }
            });

            // Child menu current sub menu item
            if ($( '.sub-menu > .menu-item' ).hasClass( 'current-menu-item' )) {
                $( '.sub-menu' ).css( 'display', 'block' );
            } else {
                $( '.sub-menu' ).css( 'display', 'none' );
            }

            // Rotate child menu arrow
            if ( $( '.sub-menu' ).is( ':hidden' )) {
                $( '.child-menu-icon--js > .fas' ).css( 'transform', 'rotate(0deg)' );
            } 
            else {
                $( '.child-menu-icon--js > .fas' ).css( 'transform', 'rotate(180deg)' );
            }
        });
    });
})(jQuery);
