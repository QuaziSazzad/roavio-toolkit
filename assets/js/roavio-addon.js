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

         //>> Video Popup Start <<//
      $(".img-popup").magnificPopup({
        type: "image",
        gallery: {
          enabled: true,
        },
      });

      $(".img-popup2").magnificPopup({
        type: "image",
        gallery: {
          enabled: true,
        },
      });
  
      $(".video-popup").magnificPopup({
        type: "iframe",
        callbacks: {},
      });

       //>> Heros Slider Start <<//
     if($('.heros-slider').length > 0) {
      const HerosSlider = new Swiper(".heros-slider", {
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
                  slidesPerView: 3,
              },
              991: {
                  slidesPerView: 2,
              },
              767: {
                  slidesPerView: 1,
              },
              575: {
                  slidesPerView: 1,
              },
              0: {
                  slidesPerView: 1,
              },
          },
      });
      }

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

                    
              //>> Testimonial Slider Start <<//
              if($('.testimonial-slider').length > 0) {
                const testimonialSlider = new Swiper(".testimonial-slider", {
                spaceBetween: 30,
                speed: 1300,
                loop: true,
                autoplay: {
                    delay: 2000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".dot2",
                    clickable: true,
                },
                breakpoints: {
                    1199: {
                        slidesPerView: 1,
                    },
                    991: {
                        slidesPerView: 1,
                    },
                    767: {
                        slidesPerView: 1,
                    },
                    575: {
                        slidesPerView: 1,
                    },
                    0: {
                        slidesPerView: 1,
                    },
                },
            });
          }

           //>> Testimonial Slider Start <<//
           if($('.testimonial-slider-2').length > 0) {
            const TestimonialSlider2 = new Swiper(".testimonial-slider-2", {
            spaceBetween: 30,
            speed: 1300,
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".dot2",
                clickable: true,
            },
            breakpoints: {
                1199: {
                    slidesPerView: 3,
                },
                991: {
                    slidesPerView: 2,
                },
                767: {
                    slidesPerView: 2,
                },
                575: {
                    slidesPerView: 1,
                },
                0: {
                    slidesPerView: 1,
                },
            },
        });
    }
   
      //>> Hero-1 Slider Start <<//
        if($('.adventure-slider').length > 0) {
          const AdventurelSlider = new Swiper(".adventure-slider", {
          spaceBetween: 30,
          speed: 1300,
          loop: true,
          autoplay: {
              delay: 2000,
              disableOnInteraction: false,
          },
          pagination: {
              el: ".dot3",
              clickable: true,
          },
          breakpoints: {
              1199: {
                  slidesPerView: 4,
              },
              991: {
                  slidesPerView:3,
              },
              767: {
                  slidesPerView: 2,
              },
              575: {
                  slidesPerView: 1,
              },
              0: {
                  slidesPerView: 1,
              },
          },
      });
      }

          //>> gallery Slider Start <<//
          if($('.gallery-slider').length > 0) {
            const GallerySlider = new Swiper(".gallery-slider", {
               spaceBetween: 10,
               speed: 1300,
               loop: true,
               autoplay: {
                   delay: 2000,
                   disableOnInteraction: false,
               },
   
               breakpoints: {
                   1399: {
                       slidesPerView: 5,
                   },
                   1199: {
                       slidesPerView: 4,
                   },
                   991: {
                       slidesPerView: 3.5,
                   },
                   767: {
                       slidesPerView: 2.8,
                   },
                   575: {
                       slidesPerView: 1.5,
                   },
                   0: {
                       slidesPerView: 1.1,
                   },
               },
           });
       }
   
        //>> gallery Slider2 Start <<//
           if ($('.gallery-slider-2').length > 0) {
            const GallerySlider2 = new Swiper(".gallery-slider-2", {
               spaceBetween: 10,
               speed: 1300,
               loop: true,
               autoplay: {
                   delay: 2000,
                   disableOnInteraction: false,
                    reverseDirection: true,
               },
   
               breakpoints: {
                   1399: {
                       slidesPerView: 5,
                   },
                   1199: {
                       slidesPerView: 4,
                   },
                   991: {
                       slidesPerView: 3.5,
                   },
                   767: {
                       slidesPerView: 2.8,
                   },
                   575: {
                       slidesPerView: 1.5,
                   },
                   0: {
                       slidesPerView: 1.1,
                   },
               },
           });
       }

         //>> Testimonial box Slider Start <<//
      if($('.testimonial-box-slider').length > 0) {
        const TestimonialBoxSlider = new Swiper(".testimonial-box-slider", {
            spaceBetween: 20,
            freemode: true,
            centeredSlides: true,
            loop: true,
            speed: 6000,
            allowTouchMove: false,
            autoplay: {
                delay: 1,
                disableOnInteraction: true,
            },
            breakpoints: {
                991: {
                    slidesPerView: 2,
                },
                0: {
                    slidesPerView: 1,
                },
            },
        });
    }

    //>>Testimonial box Slider2 Start <<//
    if($('.testimonial-box-slider-2').length > 0) {
        const TestimonialBoxSlider2 = new Swiper(".testimonial-box-slider-2", {
            spaceBetween: 20,
            freemode: true,
            centeredSlides: true,
            loop: true,
            speed: 6000,
            allowTouchMove: false,
            autoplay: {
                delay: 1,
                disableOnInteraction: true,
            },
            breakpoints: {
                991: {
                    slidesPerView: 2,
                },
                0: {
                    slidesPerView: 1,
                },
            },
        });
    }

    
    $(document).on('mouseenter', '.box-2', function() {
      $('.box-2').removeClass('active');
      $(this).addClass('active');
      });     


      $(document).on('click', '.nav-link[data-bs-toggle="tab"]', function (e) {
        e.preventDefault();
        var target = $(this).attr('href');
        
        // remove ctive  class
        $('.nav-link').removeClass('active');
        $('.tab-pane').removeClass('active show');
        
        // active class
        $(this).addClass('active');
        $(target).addClass('active show');
        });
        

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

    /*-- Price Range --*/
    function priceFilter() {
        if ($(".price-ranger").length) {
          // Cache DOM elements for better performance
          const $slider = $(".price-ranger #slider-range");
          const $minInput = $(".price-ranger .ranger-min-max-block .min");
          const $maxInput = $(".price-ranger .ranger-min-max-block .max");
          const $hiddenMinInput = $(".price-ranger .ranger-min-max-block input[name='min-price']");
          const $hiddenMaxInput = $(".price-ranger .ranger-min-max-block input[name='max-price']");
          const $filterForm = $(".filter-form");
          
          // Get min/max values from data attributes
          const minPrice = $(".min-price-value").data("min-price-value");
          const maxPrice = $(".max-price-value").data("max-price-value");
          const currentMinPrice = $(".current-search-min-value").data("current-search-min-value");
          const currentMaxPrice = $(".current-search-max-value").data("current-search-max-value");
          
          // Initialize slider
          $slider.slider({
            range: true,
            min: minPrice,
            max: maxPrice,
            values: [currentMinPrice, currentMaxPrice],
            slide: function(event, ui) {
              // Update visible inputs with currency symbol
              $minInput.val("$" + ui.values[0]);
              $maxInput.val("$" + ui.values[1]);
              
              // Update hidden inputs with raw values
              $hiddenMinInput.val(ui.values[0]);
              $hiddenMaxInput.val(ui.values[1]);
              
              // Submit the form
              $filterForm.submit();
            }
          });
          
          // Set initial values
          const initialMinValue = $slider.slider("values", 0);
          const initialMaxValue = $slider.slider("values", 1);
          
          // Update visible inputs with currency symbol
          $minInput.val("$" + initialMinValue);
          $maxInput.val("$" + initialMaxValue);
          
          // Update hidden inputs with raw values
          $hiddenMinInput.val(initialMinValue);
          $hiddenMaxInput.val(initialMaxValue);
        }
      }
    
      priceFilter();

    /**
     * Handle form filter changes and auto-submit
     * Automatically submits the filter form when any input changes
     */
    function handleFilterFormChanges() {
      if ($('.filter-form').length) {
        // Listen for changes on radio buttons and select elements
        $('.filter-form input[type="radio"], .filter-form select').on('change', function() {
          $(this).closest('form').submit();
        });
        
        // Listen for changes on checkboxes
        $('.filter-form input[type="checkbox"]').on('change', function() {
          $(this).closest('form').submit();
        });
        
        // Handle date range picker if it exists
        if ($('.filter-form input[name="date"]').length) {
          $('.filter-form input[name="date"]').on('change', function() {
            $(this).closest('form').submit();
          });
        }
        
        // Handle guest input changes
        $('.filter-form input[name="guest"]').on('change keyup', function() {
          // Use a small delay to prevent multiple submissions while typing
          clearTimeout($(this).data('timeout'));
          $(this).data('timeout', setTimeout(function() {
            $('.filter-form').submit();
          }, 800));
        });
      }
    }
    
    // Initialize the filter form change handler
    handleFilterFormChanges();

    /**
     * Handle sort dropdown changes
     * Automatically submits the filter form when sort option changes
     * and assigns the sort value to a hidden field in the filter form
     */
    function handleSortChanges() {
      if ($('.sort').length) {
        $('.sort').on('change', function() {
          // Get the selected sort value
          var sortValue = $(this).val();
          
          // Find the filter form
          var $filterForm = $('.filter-form');
          
          // Check if hidden sort field exists, if not create it
          if ($filterForm.find('input[name="sort"]').length === 0) {
            $filterForm.append('<input type="hidden" name="sort" value="' + sortValue + '">');
          } else {
            // Update existing hidden field
            $filterForm.find('input[name="sort"]').val(sortValue);
          }
          
          // Submit the form
          $filterForm.submit();
        });
      }
    }
    
    // Initialize the sort change handler
    handleSortChanges();


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