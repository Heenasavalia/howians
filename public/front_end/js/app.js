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



});