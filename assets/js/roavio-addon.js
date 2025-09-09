; (function ($) {
    "use strict";

    var WidgetDefaultHandler = function ($scope) {

        // ## Video Popup
        if ($scope.find('.video-play').length) {
            $('.video-play').magnificPopup({
                type: 'video',
            });
        }

        const sliderActive2 = ".hero-slider";
        const sliderInit2 = new Swiper(sliderActive2, {
            loop: true,
            slidesPerView: 1,
            effect: "fade",
            speed: 3000,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            
            pagination: {
               el: ".dot",
               clickable: true,
           },
        });

       function animated_swiper(selector, init) {
           const animated = function animated() {
               $(selector + " [data-animation]").each(function () {
                   let anim = $(this).data("animation");
                   let delay = $(this).data("delay");
                   let duration = $(this).data("duration");
                   $(this)
                       .removeClass("anim" + anim)
                       .addClass(anim + " animated")
                       .css({
                           webkitAnimationDelay: delay,
                           animationDelay: delay,
                           webkitAnimationDuration: duration,
                           animationDuration: duration,
                       })
                       .one("animationend", function () {
                           $(this).removeClass(anim + " animated");
                       });
               });
           };
           animated();
           init.on("slideChange", function () {
               $(sliderActive2 + " [data-animation]").removeClass("animated");
           });
           init.on("slideChange", animated);
       }
       animated_swiper(sliderActive2, sliderInit2);


        // ## Scroll to Top
        if ($scope.find('.scroll-to-target').length) {
            $(".scroll-to-target").on('click', function () {
                var target = $(this).attr('data-target');
                // animate
                $('html, body').animate({
                    scrollTop: $(target).offset().top
                }, 1000);

            });
        }


        // ## Nice Select
        $('select').niceSelect();

          //>> Brand Slider Start <<//
          if($('.brand-slider').length > 0) {
            const BrandSlider = new Swiper(".brand-slider", {
               spaceBetween: 30,
               speed: 1300,
               loop: true,
               centeredSlides: true,
               autoplay: {
                   delay: 2000,
                   disableOnInteraction: false,
               },
   
               breakpoints: {
                   1199: {
                       slidesPerView: 7,
                   },
                   991: {
                       slidesPerView: 4,
                   },
                   767: {
                       slidesPerView: 3,
                   },
                   575: {
                       slidesPerView: 2,
                   },
                   0: {
                       slidesPerView: 2,
                   },
               },
           });
       }
   


    };

    //elementor front start
    $(window).on("elementor/frontend/init", function () {
        elementorFrontend.hooks.addAction(
            "frontend/element_ready/widget",
            WidgetDefaultHandler
        );

    });

    /* ==========================================================================
     When document is loaded, do
  ========================================================================== */

    $(window).on('load', function () {


        // ## Latest Work
        // $('.latest-work-item').click(function () {
        //     $('.latest-work-item').removeClass('active');
        //     $(this).addClass('active');
        //     $('.normal-area').slideDown();
        //     $(this).find('.normal-area').slideUp();
        //     $('.active-area').slideUp();
        //     $(this).find('.active-area').slideDown();
        // });

        // // ## Latest Work
        // $('.latest-work-item .active-area').hide();
        // $('.latest-work-item.active .active-area').show();
        // $('.latest-work-item .normal-area').show();
        // $('.latest-work-item.active .normal-area').hide();


        // // ## Preloader
        // function handlePreloader() {
        //     if ($('.preloader').length) {
        //         $('.preloader').delay(200).fadeOut(500);
        //     }
        // }
        // handlePreloader();

    });

    // ## FAQ Nav Fixed
    if ($('.faq-tab-wrap').length) {
        var faqOffset = $('.faq-tab-wrap').offset().top;
        var footerOffset = $('.for-sticky').offset().top;
    }


    $(window).on('scroll', function () {

        // ## FAQ Nav Fixed
        var sticky = $('.faq-tab-wrap'),
            scroll = $(window).scrollTop();

        if (scroll >= faqOffset) sticky.addClass('fixed');
        else sticky.removeClass('fixed');
        if (scroll >= footerOffset) sticky.removeClass('fixed');

    });


    $('.mc-form').on('submit', function (e) {
        e.preventDefault();

        let email = $('.mc-form__input').val();

        $.ajax({
            url: RoavioObject.ajax_url,
            type: 'POST',
            data: {
                action: 'subscribe_user', // WP AJAX action
                email: email
            },
            success: function (response) {
                $('.mc-form__feedback').html(response);
                $('.mc-form__input').val('');
            },
            error: function (error) {
                $('.mc-form__feedback').html(response.error_text);
            }
        });
    });

})(jQuery);