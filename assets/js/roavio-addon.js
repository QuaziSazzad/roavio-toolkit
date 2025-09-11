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


    });


    $('.mc-form').on('submit', function (e) {
        e.preventDefault();

        let email = $('.mc-form__input').val();

        $.ajax({
            url: RoavioObject.ajax_url,
            type: 'POST',
            dataType: 'json',
            data: {
                action: 'subscribe_user', // WP AJAX action
                email: email
            },
            success: function (response) {
                if (response.success) {
                    $('.mc-form__feedback').html('<div class="success-message">' + response.data.message + '</div>');
                    $('.mc-form__input').val('');
                } else {
                    $('.mc-form__feedback').html('<div class="error-message">' + response.data.message + '</div>');
                }
            },
            error: function (xhr, textStatus, errorThrown) {
                console.error("Newsletter subscription error:", {
                    status: xhr.status,
                    statusText: xhr.statusText,
                    responseText: xhr.responseText,
                    error: errorThrown
                });
                $('.mc-form__feedback').html(RoavioObject.error_text || 'An error occurred. Please try again.');
            }
        });
    });

    // Add Wishlist
  $(document).on("click", ".roavio-ajax-wishlist.add-wishlist", function (e) {
    // Cache frequently used elements
    var $this = $(this);
    var $addedWishlist = $(".roavio-added-wishlist");
    var $removedWishlist = $(".roavio-removed-wishlist");
    var $roavioPopup = $("#roavio-popup");

    // Get post ID from data attribute
    var post_id = $this.data("post_id");

    // Perform an AJAX request
    $.ajax({
      type: "POST",
      dataType: "json",
      url: RoavioObject.ajax_url,
      data: {
        action: "roavio_wishlist",
        post_id: post_id,
        status: "add",
        security: RoavioObject.security_nonce
      },
      success: function (response) {
        // Validate that we received valid JSON data
        if (typeof response === 'object' && response !== null) {
          if (response.success && response.data.logged_in) {
            // Update the button and wishlist messages
            $this.removeClass("add-wishlist").addClass("remove-wishlist");
            $addedWishlist.css("display", "block");
            $removedWishlist.css("display", "none");
            
            // Show the popup
            $roavioPopup.fadeIn();

            // Hide the popup after 3 seconds
            setTimeout(function () {
              $roavioPopup.fadeOut();
            }, 3000);
          } else if (response.success && !response.data.logged_in) {
            // User not logged in - show login message
            alert(response.data.message || "Please log in to add items to your wishlist.");
          } else {
            // Error response
            console.error("Wishlist error:", response.data);
            alert(response.data.message || RoavioObject.error_text || "An error occurred. Please try again.");
          }
        } else {
          console.error("Invalid response format:", response);
          alert(RoavioObject.error_text || "An error occurred. Please try again.");
        }
      },
      error: function (xhr, textStatus, errorThrown) {
        // Handle errors gracefully and log details
        console.error("AJAX Error:", {
          status: xhr.status,
          statusText: xhr.statusText,
          responseText: xhr.responseText,
          error: errorThrown
        });
        
        // Show user-friendly error message
        alert(RoavioObject.error_text || "An error occurred. Please try again.");
      },
      complete: function () {
        // Remove loading class after AJAX request is complete
      }
    });

    // Prevent the default link behavior
    e.preventDefault();
  });

  // Remove Wishlist
  $(document).on(
    "click",
    ".roavio-ajax-wishlist.remove-wishlist",
    function (e) {
      // Cache frequently used elements
      var $this = $(this);
      var $addedWishlist = $(".roavio-added-wishlist");
      var $removedWishlist = $(".roavio-removed-wishlist");
      var $roavioPopup = $("#roavio-popup");

      // Get post ID from data attribute
      var post_id = $this.data("post_id");

      // Perform an AJAX request
      $.ajax({
        type: "POST",
        dataType: "json",
        url: RoavioObject.ajax_url,
        data: {
          action: "roavio_wishlist",
          post_id: post_id,
          status: "remove",
          security: RoavioObject.security_nonce
        },
        success: function (response) {
          // Validate that we received valid JSON data
          if (typeof response === 'object' && response !== null) {
            if (response.success && response.data.logged_in) {
              // Remove the loading class and update the button class
              $this
                .removeClass("ajax-preload remove-wishlist")
                .addClass("add-wishlist");

              $addedWishlist.css("display", "none");
              $removedWishlist.css("display", "block");
              // Show the popup
              $roavioPopup.fadeIn();

              // Hide the popup after 3 seconds
              setTimeout(function () {
                $roavioPopup.fadeOut();
              }, 3000);
            } else {
              // Error response
              console.error("Wishlist remove error:", response.data);
              alert(response.data.message || RoavioObject.error_text || "An error occurred. Please try again.");
            }
          } else {
            console.error("Invalid response format:", response);
            alert(RoavioObject.error_text || "An error occurred. Please try again.");
          }
        },
        error: function (xhr, textStatus, errorThrown) {
          // Handle errors gracefully and log details
          console.error("AJAX Error:", {
            status: xhr.status,
            statusText: xhr.statusText,
            responseText: xhr.responseText,
            error: errorThrown
          });
          
          // Show user-friendly error message
          alert(RoavioObject.error_text || "An error occurred. Please try again.");
        }
      });

      // Prevent the default link behavior
      e.preventDefault();
    }
  );


})(jQuery);