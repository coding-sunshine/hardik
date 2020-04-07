require('./bootstrap');

$(document).ready(function() {

    $(".down").click(function() {
        var scroll = $(window).scrollTop();

        if (scroll < 800) {
            $("html, body").animate(
                {
                    scrollTop: $("#work").offset().top
                },
                1000
            );
        } else if (scroll < 1550) {
            $("html, body").animate(
                {
                    scrollTop: $("#about").offset().top
                },
                1000
            );
        } else if (scroll < 2350) {
            $("html, body").animate(
                {
                    scrollTop: $("#skills").offset().top
                },
                1000
            );
        } else if (scroll < 3450) {
            $("html, body").animate(
                {
                    scrollTop: $("#contact").offset().top
                },
                1000
            );
        }
    });
});
