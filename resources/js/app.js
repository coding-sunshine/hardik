require('./bootstrap');

$(function() {
    var up = $(".up");
    var down = $(".down");
    var sidebar = $(".sidebar");

    var workImg = $(".work").data("hoverimage");
    var aboutImg = $(".about").data("hoverimage");
    var skillsImg = $(".skills").data("hoverimage");
    var contactImg = $(".contact").data("hoverimage");

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll < 190) {
            $(".work").css("background-image", "");
            $(".about").css("background-image", "");
            $(".skills").css("background-image", "");
            $(".contact").css("background-image", "");

            $(".work").removeClass("font-bold");
            $(".about").removeClass("font-bold");
            $(".skills").removeClass("font-bold");
            $(".contact").removeClass("font-bold");

            down.removeClass("hidden").addClass("block");
            up.removeClass("block").addClass("hidden");
            sidebar.removeClass("block").addClass("hidden");
        }

        if (scroll > 800) {
            sidebar.removeClass("hidden").addClass("block");

            if (scroll < 1000) {
                $(".work").css("background-image", "url(" + workImg + ")");
                $(".work").addClass("font-bold");

                $(".about").css("background-image", "");
                $(".about").removeClass("font-bold");
            }
        }

        if (scroll > 1560) {
            $(".work").css("background-image", "");
            $(".work").removeClass("font-bold");

            if (scroll < 1800) {
                $(".about").css("background-image", "url(" + aboutImg + ")");
                $(".about").addClass("font-bold");

                $(".skills").css("background-image", "");
                $(".skills").removeClass("font-bold");
            }
        }

        if (scroll > 2350) {
            $(".about").css("background-image", "");
            $(".about").removeClass("font-bold");

            if (scroll < 2900) {
                $(".skills").css("background-image", "url(" + skillsImg + ")");
                $(".skills").addClass("font-bold");

                $(".contact").css("background-image", "");
                $(".contact").removeClass("font-bold");

                up.removeClass("block").addClass("hidden");
                down.removeClass("hidden").addClass("block");
            }
        }

        if (scroll > 3400) {
            $(".skills").css("background-image", "");
            $(".skills").removeClass("font-bold");

            $(".contact").css("background-image", "url(" + contactImg + ")");
            $(".contact").addClass("font-bold");

            up.removeClass("hidden").addClass("block");
            down.removeClass("block").addClass("hidden");
        }
    });
});

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
