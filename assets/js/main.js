$(document).ready(function() {

// RESPONSIVE +
	if (typeof $.responsive == 'function') {
		$.responsive({
						width: [400, 640, 980, 1280],
						prefix: 'width',
						viewport: 'width=device-width',
			afterResize: function(opt) {
			}
			});
		};
// RESPONSIVE -


// GLOBAL VARS +

	// global scroll var +
	var wScroll = $(this).scrollTop();

	$(window).scroll(function(){
		wScroll = $(this).scrollTop();
	});
	// global scroll var -

// GLOBAL VARS +


// MAIN MENU INDICATOR +
	var menuItem = $('.menu .item');
	var	menuIndicator = $('.navigation .indicator');

	changeIndicator(menuItem);

	menuItem.on('mouseover',function(){
		changeIndicator($(this));
	});

	menuItem.on('mouseout',function(){
		changeIndicator($('.menu .item.active'));
	});

	function changeIndicator(e) {
		var offsetItem = e.offset().top - wScroll,
				heightItem = e.outerWidth();

		menuIndicator
		.css('height', heightItem)
		.css('transform', 'translateY(' + offsetItem + 'px)');

		setTimeout(function(){
			menuIndicator.css('transition', 'all .4s');
		},400)

	} /* changeIndicator END */

	menuItem.click(function(){
		$("html, body").animate({ scrollTop: 0 }, 0);
		menuItem.removeClass('active')
		$(this).addClass('active');
	});

// MAIN MENU INDICATOR -


// MOUSE REACTION +
	$('body').mousemove(function(e) {
		var el = $('.mouse-move-el');
			elWidth = el.width(),
			x = e.pageX - elWidth / 2,
	    y = e.pageY - elWidth / 2;

		el.css('transform', 'translate3d(' + x + 'px,' + y + 'px,0)');
	});
// MOUSE REACTION -


// SMOOTH SCROLL +
	// docs https://greensock.com/docs/#/HTML5/GSAP/Plugins/ScrollToPlugin/
	$(function(){

		var $window = $(window);

		var scrollTime = .5;
		var scrollDistance = 200;

		$window.on("mousewheel DOMMouseScroll", function(event){

			event.preventDefault();

			var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
			var scrollTop = $window.scrollTop();
			var finalScroll = scrollTop - parseInt(delta*scrollDistance);

			TweenMax.to($window, scrollTime, {
				scrollTo : { y: finalScroll, autoKill:true },
					ease: Power1.easeOut,
					autoKill: true,
					overwrite: 5
				});

		});

});
// SMOOTH SCROLL -

});
