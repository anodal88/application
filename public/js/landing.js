// INSPINIA Landing Page Custom scripts
$(document).ready(function () {

    // Highlight the top nav as scrolling
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 80
    })

    // Page scrolling feature
    $('a.page-scroll').bind('click', function(event) {
        var link = $(this);
        $('html, body').stop().animate({
            scrollTop: $(link.attr('href')).offset().top - 70
        }, 500);
        event.preventDefault();
    });
    /*To initialize checkboxes and radio buttons*/
    $('.i-checks').iCheck({
        checkboxClass: 'icheckbox_square-green',
        radioClass: 'iradio_square-green',
    });
    
    // Move modal to body
    // Fix Bootstrap backdrop issu with animation.css
    $('.modal').appendTo("body");

});

// Activate WOW.js plugin for animation on scrol
new WOW().init();