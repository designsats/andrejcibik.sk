
// This is .js file for content manipulation only

$(function(){

	// GLOBAL VARS +
		// global scroll var +
		var wScroll = $(this).scrollTop();
		// global scroll var -
	// GLOBAL VARS +


	// SECTIONS BACKGROUND +
		function sectionsBg() {
			var worksCont = $('.works-cont'),
					section = worksCont.find('.section'),
					pageBg = $('.page-bg');

			$(window).scroll(function(){

				wScroll = $(this).scrollTop();

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


	// RIPPLE EFFECT HOVER +

		function RippleHover() {
			var rippleHover = $('.rippleHover');

			rippleHover.each(function(){

				if (!$(this).hasClass('used')) {

					$(this).on('mouseover', function(e){
						var $div = $('<div/>'),
								btnOffset = $(this).offset(),
								xPos = e.pageX - btnOffset.left,
								yPos = e.pageY - btnOffset.top;

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

			});

			rippleHover.addClass('used');
		}
		RippleHover();

	// RIPPLE EFFECT HOVER -


	// RIPPLE EFFECT CLICK +
		function Ripple() {
			var ripple = $('.ripple');

			ripple.each(function(){

				if (!$(this).hasClass('used')) {

					$(this).on('click',function(e){
						var $div = $('<div/>'),
								btnOffset = $(this).offset(),
								xPos = e.pageX - btnOffset.left,
								yPos = e.pageY - btnOffset.top;

						$div.addClass('ripple-effect');
						var $ripple = $(".ripple-effect");

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
						}, 800);
					});
				}
			});
			ripple.addClass('used');
		}
		Ripple();
	// RIPPLE EFFECT CLICK -
});
/*

*/

$(document).ready(function(){

// IMG GROW +
	var growImg = $('.growImg');
	var growSide = growImg.find('.growSide');
	var wScroll = $(this).scrollTop();



	function GrowImgMaster() {

		if ($(document).width() <= 980) {
			// Not for mobile devices
		} else {
			growImg.each(function(){

				var thisImg = $(this);

				function GrowImg() {
					wScroll = $(this).scrollTop();

					if (thisImg.offset().top<= wScroll + $(window).height()  &&  thisImg.offset().top + thisImg.height() >= wScroll + $(window).height() ) {

						thisImg.addClass('active');

						var growSideLeft = thisImg.find('.growSide-left');
						var growSideRight = thisImg.find('.growSide-right');

						var distance = (wScroll - thisImg.position().top + $(window).height()) / thisImg.height();

						var growSidePush = growSide.width() * distance;

						if (distance > 0.98)
							growSidePush = growSide.width();

						growSideLeft.css('transform', 'translate3d(' + growSidePush * -1 + 'px, 0, 0)');
						growSideRight.css('transform', 'translate3d(' + growSidePush + 'px, 0, 0)');

					} else {
						thisImg.removeClass('active');
					}
				} // GROW IMG -
				GrowImg();

				$(window).scroll(function(){
					GrowImg();
				});

			}); // EACH -
		}

	} // GROW IMG MASTER -

	GrowImgMaster();

	$(window).resize(function(){
		GrowImgMaster();
	});

// IMG GROW -


// WORKS PREVIEW +

	var workPreview = $('.work-preview-image');

	function workPreviewResize() {
		if ($(window).width() >= 640) {
			workPreview.css('height', workPreview.width() * 0.5925); // 16:9
		} else {
			workPreview.css('height', workPreview.width() * 1.6417);
		}
	}
	workPreviewResize();

	$(window).resize(function(){
		workPreviewResize();
	});

// WORKS PREVIEW -


// MOUSE REACTION +

	function mouseReaction(target) {

		$('body').mousemove(function(e) {
			var el = $('.mouse-move-el');
			var targetElTop = target.offset();

				elWidth = el.width(),
				x = e.pageX - elWidth / 2,
				y = e.pageY - elWidth / 2 - targetElTop.top;

			el.css('transform', 'translate3d(' + x + 'px,' + y + 'px,0)');
		});
	}
	mouseReaction($('.mouse-reaction'));

// MOUSE REACTION -


// HEADINGS +
	var headings = $('h1').add('.h1').add('h2').add('.h2');

	headings.each(function (index) {
    var characters = $(this).text().split("");

    $this = $(this);
    $this.empty();
		$(this).wrap('<div class="heading-wrap"></div>');

		var charPos = characters.length;

    $.each(characters, function (i, el) {
			var charHtml = "<span style='z-index: " + charPos + ";'>" + el + "</span>";
			charPos = charPos - 1;
	    $this.append(charHtml);
    });

		function headingVisibile() {
			if ($this.offset().top < wScroll + $(window).height()) {
				$this.addClass('visible');
			}
		}
		headingVisibile();

		$(document).scroll(function(){
			wScroll = $(this).scrollTop();
			headingVisibile();
		});

	});
// HEADINGS -


// EASE IN +
	var easeItems = $('.ease-item');

	function easeIn() {

		var wScroll = $(this).scrollTop();

		function easing(delayedEasing) {
			easeItems.each(function(){

				var delay = $(this).data('ease-delay');

				if (wScroll > (($(this).offset().top) - $(window).height() + 60)) {

					if (delayedEasing)
						$(this).addClass('is-visible').css('transition-delay', delay);
					else
						$(this).addClass('is-visible').css('transition-delay', 200);
				}
				else {
					$(this).removeClass('is-visible');
				}

			});
		}
		easing(true);

		$(document).scroll(function(){
			wScroll = $(this).scrollTop();
			easing(false);
		});
	}

	easeIn();

	$(window).resize(function(){
		easeIn();
	});
// EASE IN -


});
