( function () {
    'use strict';

    const menuToggle = document.querySelector( '.menu-toggle' );
    const primaryMenu = document.querySelector( '.primary-menu' );

    if ( menuToggle && primaryMenu ) {
        menuToggle.addEventListener( 'click', () => {
            const expanded = menuToggle.getAttribute( 'aria-expanded' ) === 'true';
            menuToggle.setAttribute( 'aria-expanded', ! expanded );
            primaryMenu.classList.toggle( 'is-open' );
        } );
    }
} )();
