; (function ($) {
    "use strict";

    var WidgetDefaultHandler = function ($scope, $) {

        // ## Video Popup
        if ($scope.find('.video-play').length) {
            $scope.find('.video-play').magnificPopup({
                type: 'video',
            });
        }

        // ## Hero Slider
        if ($scope.find('.hero-slider').length) {
            const sliderActive2 = $scope.find(".hero-slider")[0];
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

            // Animated Swiper
            function animated_swiper(selector, init) {
                const animated = function animated() {
                    $scope.find(selector + " [data-animation]").each(function () {
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
                    $scope.find(selector + " [data-animation]").removeClass("animated");
                });
                init.on("slideChange", animated);
            }
            animated_swiper(".hero-slider", sliderInit2);
        }

         //>> Image Popup Start <<//
        if ($scope.find('.img-popup').length) {
            $scope.find(".img-popup").magnificPopup({
                type: "image",
                gallery: {
                    enabled: true,
                },
            });
        }

        if ($scope.find('.img-popup2').length) {
            $scope.find(".img-popup2").magnificPopup({
                type: "image",
                gallery: {
                    enabled: true,
                },
            });
        }
  
        if ($scope.find('.video-popup').length) {
            $scope.find(".video-popup").magnificPopup({
                type: "iframe",
                callbacks: {},
            });
        }

       //>> Heros Slider Start <<//
        if ($scope.find('.heros-slider').length > 0) {
            const HerosSlider = new Swiper($scope.find(".heros-slider")[0], {
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

        // ## Scroll to Top
        if ($scope.find('.scroll-to-target').length) {
            $scope.find(".scroll-to-target").on('click', function () {
                var target = $(this).attr('data-target');
                // animate
                $('html, body').animate({
                    scrollTop: $(target).offset().top
                }, 1000);

            });
        }

        // ## Nice Select
        if ($scope.find('select').length) {
            $scope.find('select').niceSelect();
        }

        //>> Brand Slider Start <<//
        if ($scope.find('.brand-slider').length > 0) {
            const BrandSlider = new Swiper($scope.find(".brand-slider")[0], {
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
        if ($scope.find('.testimonial-slider').length > 0) {
            const testimonialSlider = new Swiper($scope.find(".testimonial-slider")[0], {
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

        //>> Testimonial Slider 2 Start <<//
        if ($scope.find('.testimonial-slider-2').length > 0) {
            const TestimonialSlider2 = new Swiper($scope.find(".testimonial-slider-2")[0], {
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
   
        //>> Adventure Slider Start <<//
        if ($scope.find('.adventure-slider').length > 0) {
            const AdventurelSlider = new Swiper($scope.find(".adventure-slider")[0], {
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

        //>> Gallery Slider Start <<//
        if ($scope.find('.gallery-slider').length > 0) {
            const GallerySlider = new Swiper($scope.find(".gallery-slider")[0], {
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
   
        //>> Gallery Slider 2 Start <<//
        if ($scope.find('.gallery-slider-2').length > 0) {
            const GallerySlider2 = new Swiper($scope.find(".gallery-slider-2")[0], {
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

        //>> Testimonial Box Slider Start <<//
        if ($scope.find('.testimonial-box-slider').length > 0) {
            const TestimonialBoxSlider = new Swiper($scope.find(".testimonial-box-slider")[0], {
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

        //>> Testimonial Box Slider 2 Start <<//
        if ($scope.find('.testimonial-box-slider-2').length > 0) {
            const TestimonialBoxSlider2 = new Swiper($scope.find(".testimonial-box-slider-2")[0], {
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

        //>> Top Slider Start <<//
        if ($scope.find('.top-slider').length > 0) {
            const topSlider = new Swiper($scope.find(".top-slider")[0], {
                spaceBetween: 20,
                speed: 1300,
                loop: true,
                autoplay: {
                    delay: 2000,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: ".array-prev",
                    prevEl: ".array-next",
                },
                breakpoints: {
                    1199: {
                        slidesPerView: 5,
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
                        slidesPerView: 1.3,
                    },
                },
            });
        }

         //>> Destination Slider-4 Start <<//
         if ($scope.find('.destination-slider-4').length > 0) {
        const destinationSlider4 = new Swiper(".destination-slider-4", {
            spaceBetween: 20,
            speed: 1300,
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            navigation: {
              nextEl: ".array-prev",
              prevEl: ".array-next",
          },
          pagination: {
              el: ".dot2",
              clickable: true,
          },
            breakpoints: {
                1199: {
                    slidesPerView: 4,
                },
                991: {
                    slidesPerView: 3,
                },
                767: {
                    slidesPerView: 2,
                },
                575: {
                    slidesPerView: 2,
                },
                0: {
                    slidesPerView: 1,
                },
            },
        });
        }

        // Swiper init
        if ($scope.find('.team-slider-4').length > 0) {
            new Swiper(".team-slider-4", {
                spaceBetween: 30,
                speed: 1300,
                loop: true,
                autoplay: { delay: 2000, disableOnInteraction: false },
                navigation: {
                    nextEl: ".array-prev",
                    prevEl: ".array-next",
                },
                pagination: {
                    el: ".dot3",
                    clickable: true,
                },
                breakpoints: {
                    1199: { slidesPerView: 4 },
                    991: { slidesPerView: 3 },
                    767: { slidesPerView: 2 },
                    575: { slidesPerView: 1 },
                    0: { slidesPerView: 1 },
                },
            });
        }

    // Hover effect
    const teamCards = document.querySelectorAll('.team-card-items-4');
    teamCards.forEach(card => {
        const image = card.querySelector('.team-image img');
        card.addEventListener('mouseenter', () => {
            image.style.height = '350px';
            image.style.transform = 'translateY(-50px)';
        });
        card.addEventListener('mouseleave', () => {
            image.style.height = '300px';
            image.style.transform = 'translateY(0)';
        });
    });
        //>> Hero-1 Slider Start <<//
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
  
        //>> Counterup Start <<//
        if ($scope.find('.count').length) {
            $scope.find(".count").counterUp({
                delay: 15,
                time: 4000,
            });
        }

        // Box hover effect
        $scope.find('.box-2').on('mouseenter', function() {
            $scope.find('.box-2').removeClass('active');
            $(this).addClass('active');
        });

        // Tab navigation
        $scope.find('.nav-link[data-bs-toggle="tab"]').on('click', function (e) {
            e.preventDefault();
            var target = $(this).attr('href');
            
            // Remove active class
            $scope.find('.nav-link').removeClass('active');
            $scope.find('.tab-pane').removeClass('active show');
            
            // Add active class
            $(this).addClass('active');
            $scope.find(target).addClass('active show');
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
      //>> Wow Animation Start <<//
      new WOW().init();

      if ($(".text-anim").length) {
        let staggerAmount = 0.03,
            translateXValue = 20,
            delayValue = 0.1,
            easeType = "power2.out",
            animatedTextElements = document.querySelectorAll(".text-anim");

        animatedTextElements.forEach(element => {
            let animationSplitText = new SplitText(element, { type: "chars, words" });

            ScrollTrigger.create({
                trigger: element,
                start: "top 85%",
                onEnter: () => {
                    gsap.from(animationSplitText.chars, {
                        duration: 1,
                        delay: delayValue,
                        x: translateXValue,
                        autoAlpha: 0,
                        stagger: staggerAmount,
                        ease: easeType,
                    });
                },
            });
        });
    }


 /* ================================
       Smooth Scroller And Title Animation Js Start
    ================================ */
    if ($('#smooth-wrapper').length && $('#smooth-content').length) {
        gsap.registerPlugin(ScrollTrigger, ScrollSmoother, SplitText);

        gsap.config({
            nullTargetWarn: false,
        });

        let smoother = ScrollSmoother.create({
            wrapper: "#smooth-wrapper",
            content: "#smooth-content",
            smooth: 2,
            effects: true,
            smoothTouch: 0.1,
            normalizeScroll: false,
            ignoreMobileResize: true,
        });
    }

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
            $addedWishlist.css("display", "none");
            $removedWishlist.css("display", "block");
            
            // Show the popup with login message
            $roavioPopup.fadeIn();

            // Hide the popup after 3 seconds
            setTimeout(function () {
              $roavioPopup.fadeOut();
            }, 3000);
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

  // Remove Wishlist
  $(document).on("click", ".fa-times.roavio", function (e) {
    // Prevent the default link behavior and stop propagation
    e.preventDefault();
    e.stopPropagation();
    
    // Cache frequently used elements
    var $this = $(this);
    var $row = $this.closest("tr");

    // Get post ID from data attribute
    var post_id = $this.data("post_id");
    
    // Validate post ID
    if (!post_id || post_id <= 0) {
      console.error("Invalid post ID");
      return false;
    }

    // Add loading state
    $this.addClass("loading");
    $row.css("opacity", "0.5");

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
        if (response.success) {
          // Fade out the row before removing
          $row.fadeOut(300, function() {
            $(this).remove();
            
            // Check if there are any rows left in the table
            var $tbody = $("table.common-table tbody");
            if ($tbody.find("tr").length === 0) {
              // Reload page to show empty wishlist message
              location.reload();
            }
          });
        } else {
          // Show error message
          console.error("Error:", response.data.message || "Failed to remove item");
          $this.removeClass("loading");
          $row.css("opacity", "1");
          
          // Optionally show error message to user
          if (response.data && response.data.message) {
            alert(response.data.message);
          }
        }
      },
      error: function (xhr, textStatus, errorThrown) {
        // Handle errors gracefully and log details
        console.error("AJAX Error:", errorThrown);
        $this.removeClass("loading");
        $row.css("opacity", "1");
        alert("Failed to remove item. Please try again.");
      }
    });

    return false;
  });


})(jQuery);