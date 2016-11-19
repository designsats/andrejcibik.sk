
// This is .js file for content manipulation only

$(function(){

	// GLOBAL VARS +
		// global scroll var +
		var wScroll = $(this).scrollTop();

		$(window).scroll(function(){
			wScroll = $(this).scrollTop();
		});
		// global scroll var -
	// GLOBAL VARS +


	// SECTIONS BACKGROUND +
		function sectionsBg() {
			var worksCont = $('.works-cont'),
					section = worksCont.find('.section'),
					pageBg = $('.page-bg');

			$(window).scroll(function(){

				section.each(function(e){
					// Aply bgColor only if sections are in view
					if (worksCont.offset().top <= wScroll + $(window).height()  &&  worksCont.offset().top + worksCont.height() >= wScroll + $(window).height() ) {

						var sectionOffset = $(this).offset().top + ($(this).height() / 5);

						if (wScroll + $(window).height() >= sectionOffset) {
							// Grab color from data-background-color
							var bgColor = $(this).data('background-color');
							pageBg.css('background', bgColor);
						}
					} else {
						// Clear bgColor if not in view
						pageBg.css('background', 'none');
					}
				}); // each -
			}); // scroll -
		} // sectionsBg -

		//sectionsBg();

	// SECTIONS BACKGROUND -


	// RIPPLE EFFECT +

		function RippleHover() {
			var rippleHover = $('.rippleHover');

			$(rippleHover).on('mouseover', function(e){
				var $div = $('<div/>'),
						btnOffset = $(this).offset(),
						xPos = event.pageX - btnOffset.left,
						yPos = event.pageY - btnOffset.top;

				$div.addClass('ripple-effect--hover');
				var $ripple = $(".ripple-effect--hover");

				$ripple.css("height", $(this).height());
				$ripple.css("width", $(this).height());
				$div
					.css({
						top: yPos - ($ripple.height()/2) - 20,
						left: xPos - ($ripple.width()/2) - 20,
						background: $(this).data("ripple-color")
					})
					.appendTo($(this));

				window.setTimeout(function(){
					$div.remove();
				}, 2000);
			});
		}
		RippleHover();
	// RIPPLE EFFECT -

});
