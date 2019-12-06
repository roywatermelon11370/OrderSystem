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

        if($(window).scrollTop() >= $('#banner').outerHeight() - $('.navbar').outerHeight()) {
            $('#navbar').addClass('bg-primary')
            $('#navbar').addClass('nav-shadow')
        }
        else {
            $('#navbar').removeClass('bg-primary')
            $('#navbar').removeClass('nav-shadow')
        }

        let headerHeight=$('.navbar').outerHeight()+$('.main-area-header').outerHeight()- $('.actionbar').outerHeight();

        if($(window).scrollTop() >= headerHeight ) {
            
        }
    })

    $('#NavBtn').click(function () {
        let target = $(this).attr('href');
        let position = $(target).offset().top - $('.navbar').outerHeight();
        $('html,body').animate({
            scrollTop: position
        }, 600, $.bez([0, 0.98, 0.58, 1]));
    });

    $('#service').click(function(){
        $('#service2').text("服務條款是什麼，能吃嗎?");
    })
});
