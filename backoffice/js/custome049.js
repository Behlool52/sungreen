/*
Template: Crane Construction Template
Author: ScriptsBundle
Version: 1.0
Designed and Development by: ScriptsBundle
*/

(function($) {
    "use strict";

	/* ======= Page preloader ======= */
	$(window).load(function(){
		$('.preloader').delay(500).fadeOut(1000);
	});
	
	
	 /* ======= Page Scrolling Plugin ======= */
    $('a.page-scroll').on('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 60
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
	
		/* ======= Sticky Scroll ======= */     
  $(window).on('scroll', function(){
    if( $(window).scrollTop()>100 ){
      $('.sticky-header').addClass('stick');
	  $('.header-top').hide();
	  $('#black_bar').hide();
	  $('#white_bar').show();
      } else {
      $('.sticky-header').removeClass('stick');
	  $('.header-top').show();
	  $('#black_bar').show();
	  $('#white_bar').hide();
    }
  });    

	
	/* ======= Panel Activation  ======= */
	$('.panelHeading a').on('click', function () {
        $('.panelHeading a').removeClass('active');
        $(this).addClass('active');
    });
	
	
	/* ======= Sticky Sidebar ======= */				
	$('#side-bar').theiaStickySidebar({
      additionalMarginTop: 80
    });
	
	/* ======= Fun Fact Counter  ======= */
	 $('.counter-stats').counterUp({
        delay: 10,
        time: 2000
    });


	/* ======= Our Clients Carousel ======= */
    $(".clients-list").owlCarousel({
        autoPlay: false,
        slideSpeed: 2000,
        pagination: false,
        navigation: false,
        loop: true,
        items: 6
    });
	
	/* ======= Testimonial Slider ======= */
   $("#owl-slider").owlCarousel({
		autoPlay : 6000, //Set AutoPlay to 3 seconds
		singleItem: false,
		items : 2,
		itemsDesktop : [1199, 3],
		itemsDesktopSmall : [979, 3],
		navigation : false
	});
	
	/* ======= Testimonial Slider 2 ======= */
	$("#testimonials").owlCarousel({

        navigation: false, // Show next and prev buttons
        slideSpeed: 600,
        paginationSpeed: 700,
        singleItem: true,
        autoPlay: 5000,
		 navigationText : ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
		 pagination:true,
		 responsive:true
        // "singleItem:true" is a shortcut for:
        // items : 1,
        // itemsDesktop : false,
        // itemsDesktopSmall : false,
        // itemsTablet: false,
        // itemsMobile : false
    });
	
/* ======= Related Products Carousel ======= */
    $("#related-products").owlCarousel({
      navigation: true,
	  pagination:false,
      autoPlay: 9000, //Set AutoPlay to 5 seconds
  	  navigationText : ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
	  slideSpeed: 600,
      items : 4,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,4],
	  itemsTablet: [800,2],
	  itemsMobile :	[479,1]
    });
	

   /* ======= Parallax Scrolling  ======= */
    $.stellar({
        responsive: true,
        horizontalScrolling: false,
        verticalOffset: 0,
    });
	
	/* ======= Revolution slider  Home Page ======= */
    if ($('.slider-grids').length > 0) {
        jQuery(".slider-grids").revolution({
            delay:9000,
            startwidth:1170,
            startheight:690,
            onHoverStop:"off",
            hideThumbs:10,
            hideTimerBar:"on",
            navigationType:"none",
            navigationStyle:"preview4",
            fullWidth:"on",
			dottedOverlay:"custom",
            fullScreen:"off",
            fullScreenOffsetContainer: ""
        });
    }
	/* ======= Revolution slider  Home Page ======= */
    if ($('.slider-grid-2').length > 0) {
        jQuery(".slider-grid-2").revolution({
            delay:9000,
            startwidth:1170,
            startheight:620,
            onHoverStop:"off",
            hideThumbs:1,
            hideTimerBar:"on",
            navigationType:"none",
            navigationStyle:"preview3",
            fullWidth:"on",
			dottedOverlay:"custom",
            fullScreen:"off",
            fullScreenOffsetContainer: ""
        });
    }
	/* ======= Revolution slider  Home Page Cleaning ======= */
	if ($('.slider-grid-3').length > 0) {
        jQuery(".slider-grid-3").revolution({
            delay:9000,
            startwidth:1170,
            startheight:620,
            onHoverStop:"off",
            hideThumbs:1,
            hideTimerBar:"on",
            navigationType:"none",
            navigationStyle:"preview3",
            fullWidth:"off",
			dottedOverlay:"custom",
            fullScreen:"on",
            fullScreenOffsetContainer: ""
        });
    }
	/* ======= Revolution slider  Home Page Pluumbing ======= */
    if ($('.slider-grid-4').length > 0) {
        jQuery(".slider-grid-4").revolution({
            delay:10000,
            startwidth:1170,
            startheight:500,
            onHoverStop:"off",
            hideThumbs:10,
            hideTimerBar:"on",
            navigationType:"none",
            navigationStyle:"preview1",
            fullWidth:"off",
			dottedOverlay:"custom",
            fullScreen:"on",
            fullScreenOffsetContainer: ""
        });
    }

 /* === magnificPopup === */
    $(window).load(function() {
        $('.tt-lightbox').magnificPopup({
            type: 'image',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            fixedContentPos: false
                // other options
        });
        /* ======= shuffle js ======= */
        if ($('#portfolio-grid').length > 0) {
            /* initialize shuffle plugin */
            var $grid = $('#portfolio-grid');

            $grid.shuffle({
                itemSelector: '.portfolio-item' // the selector for the items in the grid
            });

            /* reshuffle when user clicks a filter item */
            $('#filter li').on('click', function(e) {
                e.preventDefault();

                // set active class
                $('#filter li').removeClass('active');
                $(this).addClass('active');

                // get group name from clicked item
                var groupName = $(this).attr('data-group');

                // reshuffle grid
                $grid.shuffle('shuffle', groupName);
            });
        }

    });
// Comming Soon Page 	
$('.countdown').each(function() {
    var count = $(this);
    $(this).countdown({
        zeroCallback: function(options) {
            var newDate = new Date(),
                newDate = newDate.setHours(newDate.getHours() + 130);

            $(count).attr("data-countdown", newDate);
            $(count).countdown({
                unixFormat: true
            });
        }
    });
});
  /* ======= Full Screen Background ======= */

    $(".full-page").height($(window).height());
    $(window).resize(function() {
        $(".full-page").height($(window).height());
    });
	
	$(".product-thumb-single").owlCarousel({
 items : 4,
 itemsDesktop : [1199,4],
 itemsDesktopSmall : [768,4],
 itemsTablet: [767,3],
 itemsMobile : [479,3],
 slideSpeed : 1500,
 paginationSpeed : 1500,
 rewindSpeed : 1500,
 navigation : true,
 navigationText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
 pagination : false,
 addClassActive: true,
});

// Slide in/out with fade animation function
jQuery.fn.slideFadeToggle  = function(speed, easing, callback) {
    return this.animate({opacity: 'toggle', height: 'toggle'}, speed, easing, callback);
};
//
jQuery.fn.slideFadeIn  = function(speed, easing, callback) {
    return this.animate({opacity: 'show', height: 'show'}, speed, easing, callback);
};
jQuery.fn.slideFadeOut  = function(speed, easing, callback) {
    return this.animate({opacity: 'hide', height: 'hide'}, speed, easing, callback);
};

$('.shop-categories .arrow').click(
        function () {

            $(this).parent().parent().find('ul.children-pro').removeClass('active');
            $(this).parent().parent().find('.fa-angle-up').addClass('fa-angle-down').removeClass('fa-angle-up');
            if ($(this).parent().find('ul.children-pro').is(":visible")) {
                //$(this).find('.fa-angle-up').addClass('fa-angle-down').removeClass('fa-angle-up');
                //$(this).parent().find('ul.children').removeClass('active');
            }
            else {
                $(this).find('.fa-angle-down').addClass('fa-angle-up').removeClass('fa-angle-down');
                $(this).parent().find('ul.children-pro').addClass('active');
            }
            $(this).parent().parent().find('ul.children-pro').each(function () {
                if (!$(this).hasClass('active')) {
                    $(this).slideFadeOut();
                }
                else {
                    $(this).slideFadeIn();
                }
            });
        }
    );
    $('.shop-categories ul.children-pro').each(function () {
        if (!$(this).hasClass('active')) {
            $(this).hide();
        }
    });
	
	   var vid = document.getElementById("video-bg");
	var pauseButton = document.querySelector("#play-video button");

	function vidFade() {
	    vid.classList.add("stopfade");
	}
	if( vid )
	{
	vid.addEventListener('ended', function () {
	    // only functional if "loop" is removed 
	    vid.pause();
	    // to capture IE10
	    vidFade();
	});
	pauseButton.addEventListener("click", function () {
	    vid.classList.toggle("stopfade");
	    if (vid.paused) {
	        vid.play();
	        pauseButton.innerHTML = [
	"<i class='fa fa-pause'></i>"
	];
	    } else {
	        vid.pause();
	        pauseButton.innerHTML = [
	"<i class='fa fa-play'></i>"
	];
	    }
	});
	}


})(jQuery);