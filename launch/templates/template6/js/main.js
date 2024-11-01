(function($) {
	"use strict";

	/* ------------------------------------------------------------------------ */
	/*	BOOTSTRAP FIX FOR WINPHONE 8 AND IE10
	/* ------------------------------------------------------------------------ */
	if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
		var msViewportStyle = document.createElement("style")
		msViewportStyle.appendChild(
			document.createTextNode(
				"@-ms-viewport{width:auto!important}"
			)
		)
		document.getElementsByTagName("head")[0].appendChild(msViewportStyle)
	}

	function detectIE() {
		if ($.browser.msie && $.browser.version == 9) {
			return true;
		}
		if ($.browser.msie && $.browser.version == 8) {
			return true;
		}
		return false;
	}

	function getWindowWidth() {
		return Math.max( $(window).width(), window.innerWidth);
	}

	function getWindowHeight() {
		return Math.max( $(window).height(), window.innerHeight);
	}
	
	function getNavHeight() {
		return Math.max( $('.navigation ul').outerHeight(true) );
	}
	
	function getNavSpaceHeight() {
		return Math.max( (getWindowHeight() - getNavHeight()) / 2 );
	}


	// BEGIN WINDOW.LOAD FUNCTION
	$(window).load(function() {

		/* ------------------------------------------------------------------------ */
		/*	PRELOADER
		/* ------------------------------------------------------------------------ */
		var preloaderDelay = 350,
			preloaderFadeOutTime = 800;

		function hidePreloader() {
			var loadingAnimation = $('#loading-animation'),
				preloader = $('#preloader');

			loadingAnimation.fadeOut();
			preloader.delay(preloaderDelay).fadeOut(preloaderFadeOutTime);
		}

		hidePreloader();

	});

	//BEGIN DOCUMENT.READY FUNCTION
	jQuery(document).ready(function($) {

		$.browser.chrome = $.browser.webkit && !!window.chrome;
		$.browser.safari = $.browser.webkit && !window.chrome;

		if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
			$('body').addClass('mobile');
		}
		
		if ($.browser.chrome) {
			$('body').addClass('chrome');
		}
		
		if ($.browser.safari) {
			$('body').addClass('safari');
		}
		
		
		/* ------------------------------------------------------------------------ */
		/*	REFRESH WAYPOINTS
		/* ------------------------------------------------------------------------ */
		function refreshWaypoints() {
			setTimeout(function() {
				$.waypoints('refresh');
			}, 1000);   
		}
	
		
		/* ------------------------------------------------------------------------ */
		/*	ANIMATED ELEMENTS
		/* ------------------------------------------------------------------------ */	
		if( !$('body').hasClass('mobile') ) {

			$('.animated').appear();

			if( detectIE() ) {
				$('.animated').css({
					'display':'block',
					'visibility': 'visible'
				});
			} else {
				$('.animated').on('appear', function() {
					var elem = $(this);
					var animation = elem.data('animation');
					if ( !elem.hasClass('visible') ) {
						var animationDelay = elem.data('animation-delay');
						if ( animationDelay ) {
							setTimeout(function(){
								elem.addClass( animation + " visible" );
							}, animationDelay);
						} else {
							elem.addClass( animation + " visible" );
						}
					}
				});
				
				/* Starting Animation on Load */
				$(window).load(function() {
					$('.onstart').each( function() {
						var elem = $(this);
						if ( !elem.hasClass('visible') ) {
							var animationDelay = elem.data('animation-delay');
							var animation = elem.data('animation');
							if ( animationDelay ) {
								setTimeout(function(){
									elem.addClass( animation + " visible" );
								}, animationDelay);
							} else {
								elem.addClass( animation + " visible" );
							}
						}
					});
				});	
				
			}

		}
		
		
		/* ------------------------------------------------------------------------ */
		/*	PAGE
		/* ------------------------------------------------------------------------ */	
		function setSectionHeight() {
			var section = $('section');
				
			if( section.hasClass('fullscreen') ) {
				section.css( 'min-height', getWindowHeight() );
			}
		}
		
		setSectionHeight();

		$(window).on('resize', function () { 
			setSectionHeight();       
		});

		
			
		
		/* ------------------------------------------------------------------------ */
		/*	IOS
		/* ------------------------------------------------------------------------ */
		function iosdetect() {
			var deviceAgent = navigator.userAgent.toLowerCase();
			var $iOS = deviceAgent.match(/(iphone|ipod|ipad)/);
		
			
		}
		
		iosdetect();

		
		
		
		
		/* ------------------------------------------------------------------------ */
		/*	NAV
		/* ------------------------------------------------------------------------ */
		$('.nav-toggle').click(function(){
			$('.main-sidebar').toggleClass('toggle-on');
			$('.section-wrapper').toggleClass('toggle-on');
		});
		
		function initNav() {
			var navSpaceHeight = getNavSpaceHeight();
			$('.top-line').css('height', navSpaceHeight);
			$('.bottom-line').css('height', navSpaceHeight);
		}
		initNav();
		
		$(window).on('resize', function () { 
			initNav();       
		});
		
		$('.navigation a').click(function(){
			var target = $(this).data('target');
			$.scrollTo( target, 1300, {easing:'swing'} );
			$('.navigation a').removeClass('current');
			$('.navigation li').removeClass('current');
			$(this).addClass('current');
			$(this).parent('li').addClass('current');
		});
		
		// Window scroll
		$(window).scroll(function() {
			var windscroll = $(window).scrollTop();
			if (windscroll >= 100) {
				$('body section').each(function(i) {
					if ($(this).position().top <= windscroll - 0) {
						$('.navigation a.current').parent('li').removeClass('current');
						$('.navigation a.current').removeClass('current');
						$('.navigation a').eq(i).addClass('current');
						$('.navigation a.current').parent('li').addClass('current');
					}
				});
			} else {
				$('.navigation a.current').removeClass('current');
				$('.navigation a.current').parent('li').removeClass('current');
				$('.navigation a:first').parent('li').addClass('current');
				$('.navigation a:first').addClass('current');
			}
		}).scroll();
		
		$(document).keydown(function(e) {
			var code = e.keyCode || e.which;
			if(code == 38) { // Up
			
				var $next = $( '.navigation' ).find( '.current' ).prev( 'li' ).find('a');

				// If there isn't one, go to the beginning
				if ( ! $next.length ) {
					$next = $( '.navigation' ).find( 'li' ).last().find('a')
				}
				
				// Trigger the click
				$next.trigger( 'click' );
				
			} else if(code == 40) { // Down
			
				var $next = $( '.navigation' ).find( '.current' ).next( 'li' ).find('a');

				// If there isn't one, go to the beginning
				if ( ! $next.length ) {
					$next = $( '.navigation' ).find( 'li' ).first().find('a')
				}
			
				// Trigger the click
				$next.trigger( 'click' );
				
			}
		});
		
		
		/* ------------------------------------------------------------------------ */
		/*	SMOOTH SCROLL
		/* ------------------------------------------------------------------------ */
		var scrollAnimationTime = 1300,
			scrollAnimation = 'swing';

		$('a.scrollto').bind('click.smoothscroll',function (event) {
			event.preventDefault();

			var target = this.hash;

			$('html, body').stop().animate({
				'scrollTop': $(target).offset().top
			}, scrollAnimationTime, scrollAnimation, function () {
				window.location.hash = target;
			});

		});
	
		
		/* ------------------------------------------------------------------------ */
		/*	NICE SCROLL
		/* ------------------------------------------------------------------------ */
		$("html").niceScroll({
			cursorcolor: '#fff',
			cursoropacitymax: '0',
			cursorwidth: '1px',
			horizrailenabled: false,
			enablekeyboard: false,
		});
		
		$(".sidebar-container").niceScroll({
			cursorcolor: '#fff',
			cursoropacitymax: '1',
			cursorwidth: '1px',
			horizrailenabled: false,
			enablekeyboard: false,
		});


		/* ------------------------------------------------------------------------ */
		/*	TEXTSLIDER
		/* ------------------------------------------------------------------------ */
		if($.find('.textslider')[0]) {
			$('.textslider').flexslider({
				animation: "fade",
				controlNav: false,
				directionNav: false,
			});
		};
		
		
		
		
		
			
	});
	//END DOCUMENT.READY FUNCTION

})(jQuery);