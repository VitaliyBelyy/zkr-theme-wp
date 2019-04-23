// VIDEO

function onYouTubeIframeAPIReady() {
    player = new YT.Player('my-video', {
        events: {
            onReady: initialize
        }
    });
}
function initialize(){

    $('#play').on('click', function () {
        player.playVideo();
    });

    $('.overlay, #close').on('click', function () {
        player.pauseVideo();
    });

}

$(document).ready(function() {

    //SIDEBAR SWIPEABLE
    $("#sidebar-toggle").click(function() {
        $('#sidebar-toggle').toggleClass('active');
        $("#sidebar").toggleClass("open-sidebar");
    });
    $(".swipe-area").swipe({
        swipeStatus:function(event, phase, direction, distance, duration, fingers)
        {
            if (phase=="move" && direction =="right") {
                $("#sidebar").addClass("open-sidebar");
                return false;
            }
            if (phase=="move" && direction =="left") {
                $("#sidebar").removeClass("open-sidebar");
                return false;
            }
        }
    });

    //HEADER SLIDER
    $(".header-slider").children(".owl-carousel").owlCarousel(
        {
            loop: true,
            autoplay:true,
            autoplayTimeout:10000,
            margin: 0,
            responsiveClass: true,
            smartSpeed:1000,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 1,
                    nav: false
                },
                1000: {
                    items: 1,
                    nav: true,
                }
            }
        }
    );

    //COOPERATION SLIDER
    $(".cooperation-slider").children(".owl-carousel").owlCarousel(
        {
            loop: true,
            autoplay:true,
            autoplayTimeout:10000,
            margin: 20,
            stagePadding: 10,
            responsiveClass: true,
            smartSpeed:1000,
            responsive: {
                0: {
                    items: 1,
                    stagePadding: 20,
                    nav: false
                },
                400: {
                    items: 2,
                    margin: 5,
                    stagePadding: 0,
                    nav: false
                },
                700: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 4,
                    nav: true,
                }
            }
        }
    );

    //POSTS SLIDER
    $(".recent-slider").children(".owl-carousel").owlCarousel(
        {
            loop: true,
            autoplay:true,
            autoplayTimeout:10000,
            responsiveClass: true,
            nav:true,
            margin: 5,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                530: {
                    items: 2,
                    nav: true
                },
                830: {
                    items: 3,
                    nav: true
                },
                1000: {
                    items: 3,
                    nav: true,
                }
            }
        }
    );

    //SCROLL UP BUTTON
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });

    //PARALLAX
    $.stellar({
        horizontalOffset: 50,
        verticalOffset: 50
    });

    // $(".comment-reply-title").append('<i class="fa fa-angle-down" aria-hidden="true"></i>');
    // $("#commentform").hide();
    // $(".comment-reply-title").click(function(){
    //     $(".comment-reply-title i").toggleClass('rotate');
    //     $("#commentform").slideToggle('500');
    // })

    $('.category a').addClass('cat-link');

});

