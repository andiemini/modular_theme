$( document ).scroll(function () {
    if ($(this).scrollTop() > 200) {
        $( '.navbar' ).addClass( 'navbar-scroll' );
    }
    else {
        $( '.navbar' ).removeClass( 'navbar-scroll' );
    }
});

$(document).ready(function() {
    $( '.navbar-menu__burger-icon' ).click( function () {
        $( 'body' ).toggleClass('overflow-hidden');
        $( '.navbar' ).removeClass( 'navbar-scroll' );
        $( '.main-navbar' ).toggleClass( 'active-mobile' );
        $( '.navbar-menu__burger-icon' ).toggleClass( 'display-none' );
        $( '.navbar-menu__x-icon' ).toggleClass( 'display-none' );
    });
    $( '.navbar-menu__x-icon' ).click( function () {
        $( 'body' ).toggleClass('overflow-hidden');
        $( '.main-navbar' ).toggleClass( 'active-mobile' );
        $( '.navbar-menu__burger-icon' ).toggleClass( 'display-none' );
        $( '.navbar-menu__x-icon' ).toggleClass( 'display-none' );
    });
});