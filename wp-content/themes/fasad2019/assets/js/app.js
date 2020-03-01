import css from '../css/index.scss'; 
'use strict';

(function($) {
    $(function() {
        
        // Mobile menu
        const mobileMenu = $('.mobile-menu-logo--js');
        mobileMenu.on('click', ( e ) => {
            console.log('menu clicked, någonting ska hända')
        });

    });
})(jQuery);