(function($) {

    $(document).ready(function() {

        $( "#get-involved-accordion, #wishlist-accordion" ).accordion({
            collapsible: true,
            active: false,
            heightStyle: 'content',
            activate: function( event, ui ) {
                $.fn.fullpage.reBuild();
            }
        });

        $('#nav-icon').click(function() {
            $(this).hide();
            $('#mobile-nav').animate({ height: 'show' }, 500, function() {});
        });

        $('.nav-close-icon').on('click', function($event) {
            event.stopPropagation();
            $('#mobile-nav').animate({ height: 'hide' }, 500, function() {
                $('#nav-icon').show();
            });
        });

        $('.target_pos').click(function() {
            $('.output').html(function(i, val) { return val*1 >= 0 ? val * 1 + 1 : 0 });
        });

        $('.target_neg').click(function() {
            $('.output').html(function(i, val) { return val*1 - 1 >= 0 ? val * 1 - 1 : 0 });
        });
        
        $('.carousel').flickity({
            cellAlign: 'left',
            contain: true,
            percentPosition: false,
            imagesLoaded: true,
            autoPlay: true,
            prevNextButtons: false,
            wrapAround: true,
            pageDots: true
        });

        $('#fullpage').fullpage({
            //Navigation
            navigation: true,
            navigationPosition: 'left',
            slidesNavigation: true,
            slidesNavPosition: 'bottom',

            //Scrolling
            css3: true,
            scrollingSpeed: 700,
            autoScrolling: true,
            fitToSection: true,
            fitToSectionDelay: 1000,
            scrollBar: false,
            easing: 'easeInOutCubic',
            easingcss3: 'ease',
            loopBottom: false,
            loopTop: false,
            loopHorizontal: true,
            continuousVertical: false,
            continuousHorizontal: false,
            scrollHorizontally: false,
            interlockedSlides: false,
            dragAndMove: false,
            offsetSections: false,
            resetSliders: false,
            fadingEffect: false,
            normalScrollElements: null,
            scrollOverflow: true,
            scrollOverflowOptions: null,
            touchSensitivity: 15,
            normalScrollElementTouchThreshold: 5,
            bigSectionsDestination: null,

            //Accessibility
            keyboardScrolling: true,
            animateAnchor: true,
            recordHistory: true,

            //Design
            controlArrows: true,
            verticalCentered: false,
            fixedElements: 'nav',
            responsiveWidth: 0,
            responsiveHeight: 0,
            responsiveSlides: false,
            // sectionsColor : ['#000', '#69B9C6', '#F5A623', '#393E53', '#393E53'],
            //Custom selectors
            sectionSelector: '.section',
            slideSelector: '.slide',

            lazyLoading: true,

            //events
            onLeave: function(index, nextIndex, direction) {},
            afterLoad: function(anchorLink, index) {},
            afterRender: function() {},
            afterResize: function() {},
            afterResponsive: function(isResponsive) {},
            afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex) {},
            onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex) {}
        });
    });

})(jQuery);