$(document).ready(function () {
    $(window).on('scroll', function () {
        if ($(window).scrollTop()) {
            $('#navbar-normal').addClass('bg-white');
            $('#navbar-normal').addClass('nav-shadow');
        }
        else {
            $('#navbar-normal').removeClass('bg-white');
            $('#navbar-normal').removeClass('nav-shadow');
        }

        if($(window).scrollTop() >= $('#banner').outerHeight() + $('#introduce').outerHeight() - $('.navbar').outerHeight()) {
            $('#navbar-index').addClass('bg-primary')
            $('#navbar-index').addClass('nav-shadow')
        }
        else {
            $('#navbar-index').removeClass('bg-primary')
            $('#navbar-index').removeClass('nav-shadow')
        }

        if($(window).scrollTop() >= $('.main-area-header').outerHeight()) {
            $('.actionbar').addClass('actionbar-active');
            $('.actionbar-title').addClass('actionbar-title-active');
        }
        else {
            $('.actionbar').removeClass('actionbar-active');
            $('.actionbar-title').removeClass('actionbar-title-active');
        }
    })

    $('#NavBtn, .nav-link').click(function () {
        let target = $(this).attr('href');
        let position = $(target).offset().top - $('.navbar').outerHeight();
        $('html,body').stop().animate({
            scrollTop: position
        }, 600, $.bez([0, 0.98, 0.58, 1]));
    });

    $('#service').click(function(){
        $('#service2').text("服務條款是什麼，能吃嗎?");
    })
});
