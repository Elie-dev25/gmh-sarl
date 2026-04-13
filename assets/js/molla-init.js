/**
 * Molla Theme - Carousel & Slider Initialization
 */
(function($) {
    'use strict';

    // Initialize Owl Carousels
    function initOwlCarousels() {
        // Intro slider
        var $introSlider = $('.intro-slider');
        if ($introSlider.length && !$introSlider.hasClass('owl-loaded')) {
            $introSlider.owlCarousel({
                items: 1,
                loop: true,
                autoplay: true,
                autoplayTimeout: 7000,
                autoplayHoverPause: false,
                dots: true,
                nav: false,
                responsive: {
                    1200: {
                        nav: true,
                        dots: false
                    }
                },
                onInitialized: function() {
                    $('.slider-loader').hide();
                }
            });
        }

        // Generic owl carousels with data-toggle="owl"
        $('[data-toggle="owl"]').each(function() {
            var $this = $(this);
            if (!$this.hasClass('owl-loaded')) {
                var options = $this.data('owl-options') || {};
                var defaults = {
                    nav: true,
                    dots: false,
                    margin: 20,
                    loop: false,
                    responsive: {
                        0: { items: 2 },
                        480: { items: 2 },
                        768: { items: 3 },
                        992: { items: 4 },
                        1200: { items: 5 }
                    }
                };
                $this.owlCarousel($.extend({}, defaults, options));
            }
        });

        // Hide all slider loaders
        $('.slider-loader').hide();
    }

    // Initialize tabs with carousels
    function initTabCarousels() {
        $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
            var target = $(e.target).attr('href');
            $(target).find('.owl-carousel').each(function() {
                var $carousel = $(this);
                if (!$carousel.hasClass('owl-loaded')) {
                    var options = $carousel.data('owl-options') || {};
                    var defaults = {
                        nav: true,
                        dots: false,
                        margin: 20,
                        loop: false,
                        responsive: {
                            0: { items: 2 },
                            480: { items: 2 },
                            768: { items: 3 },
                            992: { items: 4 }
                        }
                    };
                    $carousel.owlCarousel($.extend({}, defaults, options));
                } else {
                    $carousel.trigger('refresh.owl.carousel');
                }
            });
        });
    }

    // Document ready
    $(document).ready(function() {
        initOwlCarousels();
        initTabCarousels();

        // Fallback: initialize any remaining carousels after a delay
        setTimeout(function() {
            $('[data-toggle="owl"]').each(function() {
                var $this = $(this);
                if (!$this.hasClass('owl-loaded')) {
                    var options = $this.data('owl-options') || {};
                    $this.owlCarousel(options);
                }
            });
            $('.slider-loader').hide();
        }, 1000);
    });

    // Window load
    $(window).on('load', function() {
        $('.slider-loader').hide();
    });

})(jQuery);
