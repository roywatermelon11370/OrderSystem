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

        if($(window).scrollTop() >= $('#banner').outerHeight() && $(window).scrollTop() <= $('#banner').outerHeight() + $('#introduce').outerHeight()) {
            $('#navbar-index').addClass('navbar-light');
            $('#navbar-index').removeClass('navbar-dark');
            $('.btn-outline-light').addClass('btn-outline-dark');
        }
        else {
            $('#navbar-index').removeClass('navbar-light');
            $('#navbar-index').addClass('navbar-dark');
            $('.btn-outline-light').removeClass('btn-outline-dark');
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
