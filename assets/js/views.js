
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

});
