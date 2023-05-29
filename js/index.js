document.addEventListener('DOMContentLoaded', () => {
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
        
        $(".search-icon").on("click", function(){
            $(".menu-search").find("form").toggleClass("search-form-active");
            $(this).addClass('close-search');
            $(".close-icon").addClass('open-icon');
        });

        $(".close-icon").on("click", function(){
            $(".menu-search").find("form").toggleClass("search-form-active");
            $(".search-icon").removeClass('close-search')
            $(this).removeClass('open-icon');
        });
    });
    
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    var swiper = new Swiper(".latest-posts-slider", {
        slidesPerView: 1,
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
          "@0.00": {
            slidesPerView: 1,
            spaceBetween: 10,
          },
          "@0.75": {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          "@1.00": {
            slidesPerView: 4,
            spaceBetween: 30,
          },
        },
    });

    var swiper = new Swiper(".industries-slider", {
        slidesPerView: 1,
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
          "@0.00": {
            slidesPerView: 1,
            spaceBetween: 10,
          },
          "@0.75": {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          "@1.00": {
            slidesPerView: 1,
            spaceBetween: 30,
          },
          "@1.5": {
            slidesPerView: 2,
            spaceBetween: 30,
          },
        },
    });
})
