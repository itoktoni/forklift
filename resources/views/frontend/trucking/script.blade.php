<script>
/* <![CDATA[ */
jQuery(document).ready(function($) {
    'use strict';
    // MASTER SLIDER START
    var slider = new MasterSlider();
    slider.setup('masterslider', {
        width: 1140, // slider standard width
        height: 854, // slider standard height
        space: 0,
        speed: 50,
        layout: "fullwidth",
        centerControls: false,
        loop: true,
        autoplay: true
        // more slider options goes here...
        // check slider options section in documentation for more options.
    });
    // adds Arrows navigation control to the slider.
    slider.control('arrows');

    $('#client-carousel').owlCarousel({
        items: 6,
        loop: true,
        margin: 30,
        responsiveClass: true,
        mouseDrag: true,
        dots: false,
        responsive: {
            0: {
                items: 2,
                nav: true,
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                responsiveClass: true
            },
            600: {
                items: 3,
                nav: true,
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                responsiveClass: true
            },
            1000: {
                items: 6,
                nav: true,
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                responsiveClass: true,
                mouseDrag: true
            }
        }
    });

    $('#services-carousel').owlCarousel({
        items: 3,
        loop: true,
        margin: 30,
        responsiveClass: true,
        mouseDrag: true,
        dots: true,
        responsive: {
            0: {
                items: 1,
                nav: false,
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                responsiveClass: true,
                autoHeight: false
            },
            600: {
                items: 2,
                nav: false,
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                responsiveClass: true,
                autoHeight: false
            },
            1000: {
                items: 3,
                nav: false,
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                responsiveClass: true,
                mouseDrag: true,
                autoHeight: false
            }
        }
    });

});
/* ]]> */
</script>