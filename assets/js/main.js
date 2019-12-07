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

        if($(window).scrollTop() >= $('.main-area-header').outerHeight()) {
            $('#actionbar1').addClass('actionbar-active');
            $('#actionbar2').addClass('actionbar-active');
            $('#actionbar3').addClass('actionbar-active');
            $('#actionbar4').addClass('actionbar-active');
            $('#actionbar5').addClass('actionbar-active');
            $('#actionbar-title-1').addClass('actionbar-title-active');
            $('#actionbar-title-2').addClass('actionbar-title-active');
            $('#actionbar-title-3').addClass('actionbar-title-active');
            $('#actionbar-title-4').addClass('actionbar-title-active');
            $('#actionbar-title-5').addClass('actionbar-title-active');
        }
        else {
            $('#actionbar1').removeClass('actionbar-active');
            $('#actionbar2').removeClass('actionbar-active');
            $('#actionbar3').removeClass('actionbar-active');
            $('#actionbar4').removeClass('actionbar-active');
            $('#actionbar5').removeClass('actionbar-active');
            $('#actionbar-title-1').removeClass('actionbar-title-active');
            $('#actionbar-title-2').removeClass('actionbar-title-active');
            $('#actionbar-title-3').removeClass('actionbar-title-active');
            $('#actionbar-title-4').removeClass('actionbar-title-active');
            $('#actionbar-title-5').removeClass('actionbar-title-active');
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
