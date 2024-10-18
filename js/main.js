//intialization plugins
$(document).ready(function () {
    //animation icon toggler of navbar
    $(`.navbar-toggler`).click(function() {
        $(`.navbar-toggler`).toggleClass(`active`);
    });
    $(function () {
        $(document).scroll(function () {
          var $nav = $(".navbar-fixed-top");
          $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        });
    });
    //Wow intit
    wow = new WOW({
        boxClass: 'wow',
        animateClass: 'animated',
        offset: 200,
        mobile: true,
        live: false
    });
    wow.init();
    //smooth_scroll
    smoothScroll.init();
    var amountScrolled = 300;
    $(window).scroll(function () {
        if ($(window).scrollTop() > amountScrolled) {
            $('#scroll-btn').fadeIn('slow');
        } else {
            $('#scroll-btn').fadeOut('slow');
        }
    });
    $('#scroll-btn').click(function () {
        $('html, body').animate({
            scrollTop: 0
        }, 1000);
        return false;
    });
    //fancybox
    $("[data-fancybox]").fancybox({
        selector: '[data-fancybox="images"]',
        loop: true
    });
    //tooltip
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
    /*Loading page */
    $(window).on("load", function(){
        $(".loading-page")
        .fadeOut(2000 , function(){
            $("body").css("overflow" , "auto");
            $("this").fadeOut(1500 , function(){
                $(this).remove();
            });
        });
    });  
});
var swiper = new Swiper('.clients-swiper', {
    loop: true,
    speed: 900,
    slidesPerView: 1,
    spaceBetween: 25,
    // autoplay: {
    //     delay: 2500,
    // },
    breakpoints: {
        640: {
            slidesPerView: 2,
        },
        768: {
            slidesPerView: 3,
        },
        1024: {
            slidesPerView: 5,
        },
    }
});

//Swiper 
// var swiper = new Swiper(' .swiper-container', {
//     loop: true,
//     speed: 900,
//     slidesPerView: 1,
//     spaceBetween: 15,
//     // autoplay: {
//     //     delay: 2500,
//     // },
//     navigation: {
//         nextEl: '.swiper-button-next',
//         prevEl: '.swiper-button-prev',
//     },
// pagination: {
//     el: '.swiper-pagination',
// },
//     breakpoints: {
//         640: {
//             slidesPerView: 2,
//             spaceBetween: 20,
//         },
//         768: {
//             slidesPerView: 3,
//             spaceBetween: 20,
//         },
//         1024: {
//             slidesPerView: 5,
//             spaceBetween: 20,
//         },
//     }
// });

