jQuery(document).ready(function ($) {

    $('.wpcf7-countrytext').attr('readonly', 'readonly');
    // news slider start 
    $('#news_scroll').slick({
        dots: true,
        arrows: false,
        slidesToShow: 3,
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [{
            breakpoint: 1199,
            settings: {
                slidesToShow: 2,
                // arrows: true,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
                // arrows: true,
            }
        }]
    });

    $('.courses-posts-slider').slick({
        dots: true,
        arrows: false,
        slidesToShow: 3,
        autoplay: false,
        autoplaySpeed: 3000,
        responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 2,
                // arrows: true,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
                // arrows: true,
            }
        }]
    });



    // Header start 
    jQuery(function () {
        var header = jQuery(".header");
        jQuery(window).scroll(function () {
            var scroll = jQuery(window).scrollTop();
            if (scroll >= 100) {
                header.addClass("fixed-header");
            } else {
                header.removeClass('fixed-header');
            }
        });
    });

    jQuery('.navbar-toggler').on('click', function () {
        jQuery(this).find('.menu-btn').toggleClass("close");
        jQuery("body").toggleClass('sticky-overlay');
        jQuery('.menu-item').removeClass("subopaned");
        jQuery(".sub-menu").removeClass("mobile-subopan");
    });

    jQuery(".navbar-nav  li.menu-item-has-children > a").after(
        '<span class="mobile-click"><span>'
    );
    jQuery(".mobile-click").each(function () {
        jQuery(this).on("click", function () {
            jQuery(this).next(".sub-menu").toggleClass("mobile-subopan");
            jQuery(this).parent("li").toggleClass("subopaned");
        });
    });


    // Header end 

    $('.slick-slider-banner').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
        adaptiveHeight: true,
        dots: true,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        arrows: false,
    });


    // testimonial slider 
    var rev = $('#testimonial_scroll');
    rev.on('init', function (event, slick, currentSlide) {
        var
            cur = $(slick.$slides[slick.currentSlide]),
            next = cur.next(),
            prev = cur.prev();
        prev.addClass('slick-sprev');
        next.addClass('slick-snext');
        cur.removeClass('slick-snext').removeClass('slick-sprev');
        slick.$prev = prev;
        slick.$next = next;
    }).on('beforeChange', function (event, slick, currentSlide, nextSlide) {
        //console.log('beforeChange');
        var
            cur = $(slick.$slides[nextSlide]);
        //console.log(slick.$prev, slick.$next);
        slick.$prev.removeClass('slick-sprev');
        slick.$next.removeClass('slick-snext');
        next = cur.next();
        prev = cur.prev();
        prev.prev();
        prev.next();
        prev.addClass('slick-sprev');
        next.addClass('slick-snext');
        slick.$prev = prev;
        slick.$next = next;
        cur.removeClass('slick-next').removeClass('slick-sprev');
    });

    rev.slick({
        speed: 1000,
        arrows: false,
        dots: true,
        focusOnSelect: true,
        infinite: true,
        centerMode: true,
        slidesPerRow: 1,
        slidesToShow: 1,
        slidesToScroll: 1,
        centerPadding: '0',
        swipe: true,
        autoplay: true,
        autoplaySpeed: 3000,
    });
    // testimonial slider 

});