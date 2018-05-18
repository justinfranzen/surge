$(document).ready(function () {
    'use strict';

    $('#welcome').slideDown(1800);
                 
    $('#mission').animate({'opacity': '1'}, 2300);
    
    var top = 750; 

    $(window).on('scroll', function () {
        if ($(window).scrollTop() >= top) {
            // if so, add the fixed class
            $('#header').css({position: 'fixed'});
        } else {
            $('#header').css({position: 'relative'});
        }
    });
});

