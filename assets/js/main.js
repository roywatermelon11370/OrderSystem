$(document).ready(function () {
    $(window).on('scroll', function () {
        if ($(window).scrollTop()) {
            $('#navbar-normal').removeClass('bg-light');
            $('#navbar-normal').addClass('bg-white');
            $('#navbar-normal').addClass('nav-shadow');
        }
        else {
            $('#navbar-normal').removeClass('bg-white');
            $('#navbar-normal').removeClass('nav-shadow');
            $('#navbar-normal').addClass('bg-light');
        }

        if($(window).scrollTop() > $('#banner').outerHeight()) {
            $('#navbar').addClass('bg-primary')
            $('#navbar').addClass('nav-shadow')
        }
        else {
            $('#navbar').removeClass('bg-primary')
            $('#navbar').removeClass('nav-shadow')
        }
    })

    $('#NavBtn').click(function () {
        let target = $(this).attr('href');
        let position = $(target).offset().top;
        $('html,body').animate({
            scrollTop: position
        }, 600, $.bez([0.07, 0.66, 0.27, 0.99]));
    });

});
