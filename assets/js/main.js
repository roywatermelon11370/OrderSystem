$(document).ready(function(){ 
	$(window).on('scroll', function() {
        if($(window).scrollTop()) {
            $('#navbar').removeClass('alt');
            $('#navbar-normal').removeClass('bg-light');
            $('#navbar-normal').addClass('bg-white');
            $('#navbar-normal').addClass('nav-shadow');
        }
        else {
            $('#navbar').addClass('alt');
            $('#navbar-normal').removeClass('bg-white');
            $('#navbar-normal').removeClass('nav-shadow');
            $('#navbar-normal').addClass('bg-light');
        }
    })

    $()
});
