$(document).ready(function() {

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
    });

    // Counter
    function isCounterElementVisible($elementToBeChecked) {
        var TopView = $(window).scrollTop();
        var BotView = TopView + $(window).height();
        var TopElement = $elementToBeChecked.offset().top;
        var BotElement = TopElement + $elementToBeChecked.height();
        return ((BotElement <= BotView) && (TopElement >= TopView));
    }

    $(window).on('scroll', function() {
        $(".counter").each(function() {
            var isOnView = isCounterElementVisible($(this));
            if (isOnView && !$(this).hasClass('Starting')) {
                $(this).addClass('Starting');
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 3000,
                    easing: 'swing',
                    step: function(now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            }
        });
    });

    $('.sorting-options a').on('click', function() {
        $(this).addClass('active').siblings().removeClass('active');
    });

    $(".jobs_box").addClass('grid_view');

    $('.sorting-options a.list_btn').on('click', function() {
        $(".jobs_box").removeClass('grid_view');
    });

    $('.sorting-options a.grid_btn').on('click', function() {
        $(".jobs_box").addClass('grid_view');
    });


});