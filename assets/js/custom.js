$(document).ready(function () {
    // header sticky animation
    $(function () {
        var header = $("#headerScroll");
        $(window).scroll(function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 20) {
                header.removeClass("header").addClass("header-scroll");
            } else {
                header.removeClass("header-scroll").addClass("header");
            }
        });
    });

    // Header ProgressBar
    function progressBarScroll() {
        let winScroll =
                document.body.scrollTop || document.documentElement.scrollTop,
            height =
                document.documentElement.scrollHeight -
                document.documentElement.clientHeight,
            scrolled = (winScroll / height) * 100;
        document.getElementById("scroll-bar").style.width = scrolled + "%";
    }
    window.onscroll = function () {
        progressBarScroll();
    };

    // Circle Button Progress Bar
    var progressPath = document.querySelector(".progress-wrap path");
    var pathLength = progressPath.getTotalLength();
    progressPath.style.transition = progressPath.style.WebkitTransition =
        "none";
    progressPath.style.strokeDasharray = pathLength + " " + pathLength;
    progressPath.style.strokeDashoffset = pathLength;
    progressPath.getBoundingClientRect();
    progressPath.style.transition = progressPath.style.WebkitTransition =
        "stroke-dashoffset 10ms linear";
    var updateProgress = function () {
        var scroll = $(window).scrollTop();
        var height = $(document).height() - $(window).height();
        var progress = pathLength - (scroll * pathLength) / height;
        progressPath.style.strokeDashoffset = progress;
    };
    updateProgress();
    $(window).scroll(updateProgress);
    var offset = 50;
    var duration = 900;
    jQuery(window).on("scroll", function () {
        if (jQuery(this).scrollTop() > offset) {
            jQuery(".progress-wrap").addClass("active-progress");
        } else {
            jQuery(".progress-wrap").removeClass("active-progress");
        }
    });
    jQuery(".progress-wrap").on("click", function (event) {
        event.preventDefault();
        jQuery("html, body").animate({ scrollTop: 0 }, duration);
        return false;
    });

    //
    $(".navbar-toggler").click(function () {
        $(".navbar-toggler").toggleClass("active-one");
    });
    // Toggle Active Class On Click
    $("#thisTgglCls a").click(function () {
        $(this).addClass("active");
        $(this).siblings().removeClass("active");
    });
    // filter toggle js
    $(".min-filter").click(function () {
        $(".tab-side").slideToggle();
    });
    //
    $(".dropdown").on("show.bs.dropdown", function () {
        $(this).find(".dropdown-menu").first().stop(true, true).slideDown();
    });
    $(".dropdown").on("hide.bs.dropdown", function () {
        $(this).find(".dropdown-menu").first().stop(true, true).slideUp();
    });

    //
    $("#clientsLogo").slick({
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 1500,
        slidesToShow: 6,
        slidesToScroll: 1,
        prevArrow: false,
        nextArrow: false,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4,
                    infinite: true,
                },
            },
            {
                breakpoint: 800,
                settings: {
                    slidesToShow: 3,
                },
            },
            {
                breakpoint: 500,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 400,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ],
    });
    // Home page banner slider
    $("#homeSlider").slick({
        dots: true,
        infinite: true,
    });
    // blog banner slider
    $(".blog-banner-slider").slick({
        dots: true,
        infinite: true,
    });
    //
    $("#testimonialSlider").slick({
        dots: false,
        centerMode: true,
        centerPadding: "0",
        slidesToShow: 3,
        infinite: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    centerPadding: "100px",
                    slidesToShow: 1,
                },
            },
            {
                breakpoint: 576,
                settings: {
                    centerPadding: "50px",
                    slidesToShow: 1,
                },
            },
        ],
    });
    $("#trustedCmpSlider").slick({
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 1500,
        slidesToShow: 6,
        slidesToScroll: 1,
        prevArrow: false,
        nextArrow: false,
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 5,
                    infinite: true,
                },
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 4,
                },
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
        ],
    });
    // footer slider
    $("#multiLogo").slick({
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 1500,
        slidesToShow: 6,
        slidesToScroll: 1,
        prevArrow: false,
        nextArrow: false,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4,
                    infinite: true,
                },
            },
            {
                breakpoint: 800,
                settings: {
                    slidesToShow: 3,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
        ],
    });
    $("#clientSlider").slick({
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
    });
    $("#recentCase").slick({
        dots: true,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: false,
        nextArrow: false,
    });
});

document.addEventListener('DOMContentLoaded', function () {
    document.getElementById("uploadCV").addEventListener("change", showUploadCV);
    document.getElementById("uploadCVLink").addEventListener("change", showUploadCVLink);
    document.getElementById("uploadPortfolio").addEventListener("change", showUploadPortfolio);
    document.getElementById("uploadPortfolioLink").addEventListener("change", showUploadPortfolioLink);
});


function showUploadCV() {
    document.getElementById("uploadCVInput").style.display = "block";
    document.getElementById("uploadCVLinkInput").style.display = "none";
}

function showUploadCVLink() {
    document.getElementById("uploadCVInput").style.display = "none";
    document.getElementById("uploadCVLinkInput").style.display = "block";
}

function showUploadPortfolio() {
    document.getElementById("uploadPortfolioInput").style.display = "block";
    document.getElementById("uploadPortfolioLinkInput").style.display = "none";
}

function showUploadPortfolioLink() {
    document.getElementById("uploadPortfolioInput").style.display = "none";
    document.getElementById("uploadPortfolioLinkInput").style.display = "block";
}


// video player javaScript
const video = document.getElementById("video");
const circlePlayButton = document.getElementById("circle-play-b");

function togglePlay() {
    if (video.paused || video.ended) {
        video.play();
    } else {
        video.pause();
    }
}
circlePlayButton.addEventListener("click", togglePlay);
video.addEventListener("playing", function () {
    circlePlayButton.style.opacity = 0;
});
video.addEventListener("pause", function () {
    circlePlayButton.style.opacity = 1;
});