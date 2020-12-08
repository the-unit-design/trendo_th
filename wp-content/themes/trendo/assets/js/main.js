jQuery(document).ready(function(){

    jQuery('.teaser__slider').slick({
        dots: true,
        arrows: true,
        autoplay: true,
        infinite: true,
        speed: 1000,
        fade: true,
        cssEase: 'linear'
    });
    jQuery('.categories__slider').slick({
        dots: false,
        arrows: true,
        infinite: false,
        speed: 1000,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    jQuery( ".toggle-nom" ).click(function( event ) {
        event.preventDefault();
        jQuery( "div.menu-overlay" ).toggleClass( "menu-overlay--open" );
        jQuery( ".mobile-menu-toggle" ).toggleClass( "mobile-menu-toggle--active" );
        jQuery( "body" ).toggleClass( "noscroll" );
    });

    jQuery( ".cta__title" ).matchHeight();
    jQuery( ".vacancies__item__title" ).matchHeight();
    jQuery( ".products__item__image" ).matchHeight();
    jQuery( ".products__item__title" ).matchHeight();
    jQuery( ".item__content__title" ).matchHeight();
    jQuery( ".item__content__specs" ).matchHeight();

    jQuery('[data-fancybox="productgallery"]').fancybox({
        buttons: [
            "zoom",
            //"share",
            //"slideShow",
            //"fullScreen",
            //"download",
            "thumbs",
            "close"
        ],
    });

});

jQuery(window).scroll(function() {
    var header = jQuery(document).scrollTop();
    var headerHeight = jQuery( ".main-header" ).outerHeight();
    if (header > headerHeight) {
        jQuery( ".main-header" ).addClass( "fixed" );
    } else {
        jQuery( ".main-header" ).removeClass( "fixed" );
    }
});