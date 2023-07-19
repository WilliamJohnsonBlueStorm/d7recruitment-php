$(function(){

    //Open mobile menu when open-mobile-menu is clicked
    $('#open-mobile-menu').on('click', function(e){
        e.preventDefault();
        var mobileHeader = $('#mobile-header');

        if(mobileHeader) {
            mobileHeader.show();
        }
    });

    //Close mobile menu when close-mobile-menu is clicked
    $('#close-mobile-menu').on('click', function(e){
        e.preventDefault();
        var mobileHeader = $('#mobile-header');

        if(mobileHeader) {
            mobileHeader.hide();
        }
    });

    $('.expand-mobile-nav').on('click', function()
    {
        $(this).parent().find('ul').toggleClass('hidden');
        $(this).toggleClass('fa-plus fa-minus');

    });


    const swiper= new Swiper('.homepage-callouts-slider .swiper', {
        // Optional parameters
        slidesPerView: 1.2,
        spaceBetween: 15,
        direction: 'horizontal',
        loop: false,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },
        // Navigation arrows
        navigation: {
            nextEl: '.home-swiper-button-next',
            prevEl: '.home-swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            1200: {
                slidesPerView: 3,
                spaceBetween: 24,
                loop: false,
            },
        }
    });


    const jobs_swiper= new Swiper('#similar-jobs-swiper', {
        // Optional parameters
        slidesPerView: 1.2,
        spaceBetween: 15,
        direction: 'horizontal',
        loop: false,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },
        // Navigation arrows
        navigation: {
            nextEl: '.home-swiper-button-next',
            prevEl: '.home-swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            1200: {
                slidesPerView: 3,
                spaceBetween: 24,
                loop: false,
            },
        }
    });
});