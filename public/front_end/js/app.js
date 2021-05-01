$(function() {

    'use strict';

    // Showing page loader
    $(window).on('load', function() {
        // populateColorPlates();
        setTimeout(function() {
            $(".page_loader").fadeOut("fast");
        }, 100);

        if ($('body .filter-portfolio').length > 0) {
            $(function() {
                $('.filter-portfolio').filterizr({
                    delay: 0
                });
            });
            $('.filteriz-navigation li').on('click', function() {
                $('.filteriz-navigation .filtr').removeClass('active');
                $(this).addClass('active');
            });
        }
    });

    // Select picket
    $('.selectpicker').selectpicker();

    $(window).scroll(function() {
        var sticky = $('.main-header'),
            scroll = $(window).scrollTop();

        if (scroll >= 100) sticky.addClass('header-shrink');
        else sticky.removeClass('header-shrink');
    });

    $('.reviews_box').owlCarousel({
        loop: true,
        margin: 0,
        center: true,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            }
        }
    })


});