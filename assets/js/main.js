
$(function(){

	// Hi sneaky code-sniffer :)
	console.image("http://andrejcibik.sk/assets/images/console-logo.png");


	// RESPONSIVE +
		if (typeof $.responsive == "function") {
			$.responsive({
						width: [340, 400, 640, 980, 1280],
						prefix: "width",
						viewport: "width=device-width",
					afterResize: function(opt) {
					}
				});
			};
	// RESPONSIVE -


	// LAYER UP +
		$(window).load(function(){
			$('.load-cont .layer').addClass('layerUp');
		});
	// LAYER UP -


	// global scroll var +
		var wScroll = $(this).scrollTop();

		$(window).scroll(function(){
			wScroll = $(this).scrollTop();
		});
	// global scroll var -

});


$(document).ready(function() {


	// MAIN MENU INDICATOR +

		var menuItem = $(".menu .item");

		var hash = window.location.pathname;
				hash = hash.substring(1, hash.length -1);

		if (hash == "works") {
			$("html, body").animate({ scrollTop: $(window).height() + 30 }, 800);
		}

		menuItem.each(function(){

			menuItem.removeClass("active");

			var thisHref = $(this).attr("href");

			if (thisHref == hash) {
				$(this).addClass("active");
				return false;

			} else if (hash == "") {
				$(".menu .item:first-child").addClass("active");
				return false;
			}
		});

	// MAIN MENU INDICATOR -


	// INACTIVE TAB TITLE +
			var message = "I miss you :(";
			var original;

			$(window).focus(function() {
				if (original) {
					document.title = original;
				}
			}).blur(function() {
				var title = $("title").text();
				if (title != message) {
					original = title;
				}
				document.title = message;
			});
	// INACTIVE TAB TITLE -


	// MOBILE MENU +
		var header = $(".header"),
				mobileMenuToggle = header.find(".mobile-menu-toggle");


		$(".mobile-menu-toggle").on("click",function(e){

			if ($(this).hasClass("open-menu")) {
				$(this).removeClass("open-menu");
				$("body").removeClass("open-menu");
			} else {
				$(this).addClass("open-menu");
				$("body").addClass("open-menu");
			}
		});

		$(window).resize(function(){
			if ($(this).width() >= 980)
				$("body").removeClass("open-menu");
		});

	// MOBILE MENU -


	// PASSIVE EVENTS +
/*
	(function() {
		var supportsPassive = eventListenerOptionsSupported();

		if (supportsPassive) {
			var addEvent = EventTarget.prototype.addEventListener;
			overwriteAddEvent(addEvent);
		}

		function overwriteAddEvent(superMethod) {
			var defaultOptions = {
				passive: true,
				capture: false
			};

			EventTarget.prototype.addEventListener = function(type, listener, options) {
				var usesListenerOptions = typeof options === "object";
				var useCapture = usesListenerOptions ? options.capture : options;

				options = usesListenerOptions ? options : {};
				options.passive = options.passive !== undefined ? options.passive : defaultOptions.passive;
				options.capture = useCapture !== undefined ? useCapture : defaultOptions.capture;

				superMethod.call(this, type, listener, options);
			};
		}

		function eventListenerOptionsSupported() {
			var sopported = false;
			try {
				var opts = Object.defineProperty({}, "passive", {
					get: function() {
						sopported = true;
					}
				});
				window.addEventListener("test", null, opts);
			} catch (e) {}

			return sopported;
		}
	})();
	*/
	// PASSIVE EVENTS -


	// SMOOTH SCROLL +
		// docs https://greensock.com/docs/#/HTML5/GSAP/Plugins/ScrollToPlugin/
		// Init here: smoothScroll Init

		function smoothScroll() {

			var $window = $(window);

			var scrollTime = .4;
			var scrollDistance = 300;

			$(window).on("mousewheel DOMMouseScroll touchstart", function(event){

				var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
				var scrollTop = $window.scrollTop();
				var finalScroll = scrollTop - parseInt(delta*scrollDistance);

				TweenMax.to($window, scrollTime, {
					scrollTo : { y: finalScroll, autoKill:false },
						ease: Power1.easeOut,
						autoKill: false,
						overwrite: 5
					});
			});
		}
	// SMOOTH SCROLL -


	// FOOTER REAVEAL START +

	var footer = $(".footer"),
			footerHeight = footer.height(),
			contentWrapper = $(".content-wrapper");

		function fHeight() {
			footerHeight = footer.height();
			contentWrapper.css("margin-bottom", footerHeight);
		}
		fHeight();

		$(window).resize(function(){
			fHeight();
		});

	// FOOTER REAVEAL START -


	// IE and EDGE DETECTION +
		var version = detectIE();

		function ieDetectionSmoothScroll () {
			if (version === false && $(window).width() >= 980) {

				// SAFARI DETECTION +
					var ua = navigator.userAgent.toLowerCase();
					if (ua.indexOf("safari") != -1) {
					  if (ua.indexOf("chrome") > -1) {

							$("body").addClass("chrome");

							// smoothScroll Init
								smoothScroll();

					  } else {
					    $("body").addClass("safari");
					  }
					}
				// SAFARI DETECTION -

			} else if (version === false && $(window).width() <= 980) {
			} else if (version >= 12) {
				$("body").addClass("edge");
			} else {
				$("body").addClass("ie");
			}
		}
		ieDetectionSmoothScroll();

		$(window).resize(function(){
			ieDetectionSmoothScroll();
		});

		/**
		* detect IE
		* returns version of IE or false, if browser is not Internet Explorer
		*/
		function detectIE() {
			var ua = window.navigator.userAgent;

			var msie = ua.indexOf("MSIE ");
			if (msie > 0) {
				// IE 10 or older => return version number
				return parseInt(ua.substring(msie + 5, ua.indexOf(".", msie)), 10);
			}

			var trident = ua.indexOf("Trident/");
			if (trident > 0) {
				// IE 11 => return version number
				var rv = ua.indexOf("rv:");
				return parseInt(ua.substring(rv + 3, ua.indexOf(".", rv)), 10);
			}

			var edge = ua.indexOf("Edge/");
			if (edge > 0) {
				// Edge (IE 12+) => return version number
				return parseInt(ua.substring(edge + 5, ua.indexOf(".", edge)), 10);
			}

			// other browser
			return false;
		}
	// IE and EDGE DETECTION +


	// GLOBAL VARS +
		// global scroll var +
		var wScroll = $(this).scrollTop();
		// global scroll var -
	// GLOBAL VARS +


	// SECTIONS BACKGROUND +
		function sectionsBg() {
			var worksCont = $(".works-cont"),
					section = worksCont.find(".section"),
					pageBg = $(".page-bg");

			$(window).scroll(function(){

				wScroll = $(this).scrollTop();

				section.each(function(e){
					// Aply bgColor only if sections are in view
					if (worksCont.offset().top <= wScroll + $(window).height()  &&  worksCont.offset().top + worksCont.height() >= wScroll + $(window).height() ) {

						var sectionOffset = $(this).offset().top + ($(this).height() / 5);

						if (wScroll + $(window).height() >= sectionOffset) {
							// Grab color from data-background-color
							var bgColor = $(this).data("background-color");
							pageBg.css("background", bgColor);
						}
					} else {
						// Clear bgColor if not in view
						pageBg.css("background", "none");
					}
				}); // each -
			}); // scroll -
		} // sectionsBg -

		//sectionsBg();

	// SECTIONS BACKGROUND -


	// RIPPLE EFFECT HOVER +

		function RippleHover() {
			var rippleHover = $(".rippleHover");

			rippleHover.each(function(){

					$(this).on("mouseover", function(e){
						var $div = $("<div/>"),
								btnOffset = $(this).offset(),
								xPos = e.pageX - btnOffset.left,
								yPos = e.pageY - btnOffset.top;

						$div.addClass("ripple-effect--hover");
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

						setTimeout(function(){
							$div.remove();
						}, 2000);
					});
			});
		}
		RippleHover();

	// RIPPLE EFFECT HOVER -



	// IMG GROW +
		var growImg = $(".growImg");
		var growSide = growImg.find(".growSide");
		var wScroll = $(this).scrollTop();



		function GrowImgMaster() {

			if ($(document).width() <= 980) {
				// Not for mobile devices
			} else {
				growImg.each(function(){

					var thisImg = $(this);

					function GrowImg() {
						wScroll = $(this).scrollTop();

						if (thisImg.offset().top <= wScroll + $(window).height()  &&  thisImg.offset().top + thisImg.height() + 60 >= wScroll + $(window).height() ) {

							thisImg.addClass("active");

							var growSideLeft = thisImg.find(".growSide-left");
							var growSideRight = thisImg.find(".growSide-right");

							var distance = (wScroll - thisImg.position().top + $(window).height()) / thisImg.height();

							var growSidePush = growSide.width() * distance;

							if (wScroll > thisImg.offset().top + thisImg.height() + 60)
								growSidePush = growSide.width();

							growSideLeft.css("transform", "translate3d(" + growSidePush * -1 + "px, 0, 0)");
							growSideRight.css("transform", "translate3d(" + growSidePush + "px, 0, 0)");

						} else {
							thisImg.removeClass("active");
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

		var workPreview = $(".work-preview-image");

		function workPreviewResize() {
			if ($(window).width() >= 633) {
				workPreview.css("height", workPreview.width() * 0.5925); // 16:9
			} else {
				workPreview.css("height", workPreview.width() * 1.6417);
			}
		}
		workPreviewResize();

		$(window).resize(function(){
			workPreviewResize();
		});

	// WORKS PREVIEW -


	// HEADINGS +

		var headings = $("h1").add(".h1");

		headings.each(function (index) {

			var chars = $(this).text().length;

			if (chars >= 15)
				$(this).addClass("long");

		});

	// HEADINGS -


	// EASE IN +

		var easeItems = $(".ease-item");

		function easeIn() {

			var wScroll = $(this).scrollTop();

			function easing(delayedEasing) {
				easeItems.each(function(){

					var delay = $(this).data("ease-delay");

					if (wScroll > (($(this).offset().top) - $(window).height() + 20)) {

						if (delayedEasing)
							$(this).addClass("is-visible").css("transition-delay", delay);
						else
							$(this).addClass("is-visible").css("transition-delay", 200);
					}
					else {
						$(this).removeClass("is-visible");
					}

				});
			}
			easing(true);

			$(document).scroll(function(){
				wScroll = $(this).scrollTop();
				easing(false);
			});
		} // easeIn -

		easeIn();

		$(window).resize(function(){
			easeIn();
		});
	// EASE IN -


	// MOUSE REACTION +
		/*
		function mouseReaction(target) {

			$("body").mousemove(function(e) {
				var el = $(".mouse-move-el");
				var targetElTop = target.offset();

					elWidth = el.width(),
					x = e.pageX - elWidth / 2,
					y = e.pageY - elWidth / 2 - targetElTop.top;

				el.css("transform", "translate3d(" + x + "px," + y + "px,0)");
			});
		}
		mouseReaction($(".mouse-reaction"));
		*/
	// MOUSE REACTION -


	// FOOTER VISIBILITY +

		var footer = $(".footer");

		function footerVisibility() {
			$(window).scroll(function(){
				wScroll = $(this).scrollTop();
				if ( wScroll + $(window).height() >= $(document).height() - $(window).height()) {
					footer.css("opacity", "1");
				}
				else
					footer.css("opacity", "0");
			});
		}
		footerVisibility();

		$(window).resize(function(){
			footerVisibility();
		});

	// FOOTER VISIBILITY -


	// RESPONSIVE IMAGES +

		var respImg = $(".respImg");

		function respImages() {
			if ($(window).width() <= 640) {

				respImg.each(function(){

					var src = $(this).attr("src");
					var splitUrl = src.split(".");
					src = splitUrl[0] + "-small." + splitUrl[1];

					if (!$(this).hasClass("smallVersion"))
						$(this).attr("src", src).addClass("smallVersion");
				});

			} else {

				respImg.each(function(){

					var src = $(this).attr("src");
					var splitUrl = src.split("-small.");
					src = splitUrl[0] + "." + splitUrl[1];

					if ($(this).hasClass("smallVersion"))
						$(this).attr("src", src).removeClass("smallVersion");
				});
			}
		}
		respImages();

		$(window).resize(function(){
			respImages();
		});

	// RESPONSIVE IMAGES -


	// SCROLL DOWN ARROW +

		var scrollDownArrow = $(".scroll-down-arrow-cont");

		scrollDownArrow.click(function(){
			var scrollLength = $(this).offset().top + 100;
			$("html, body").animate({ scrollTop: scrollLength }, 800);
		});

	// SCROLL DOWN ARROW -


	// SCROLL UP +
		var linkUpCont = $('.link-up-cont');

		$(document).scroll(function(){
			if (wScroll >= $(window).height() ) {
				linkUpCont.addClass('show');
			} else {
				linkUpCont.removeClass('show');
			}
		});

		linkUpCont.click(function(){
			$("html, body").animate({ scrollTop: 0 }, 800);
		});

	// SCROLL UP-

	// DRIBBBLE +

		$.jribbble.setToken('ddd8428533389ad55d4cce459953682a4d79fc228cd5b2668ca6e41dd77b612e');

		$.jribbble.users('andrejcibik').shots({
			'per_page': 12,
		}).then(function(res) {
			var html = [];

			res.forEach(function(shot) {

				html.push('<li class="shots--shot ">');

				html.push('<div class="overlay">');
				html.push('<span class="title">' + shot.title + '</span>');
				html.push('</div>');

				html.push('<a href="' + shot.html_url + '" target="_blank">');
				html.push('<img src="' + shot.images.normal + '">');
				html.push('</a></li>');
			});

			$('.shots').html(html.join(''));
		});

	// DRIBBBLE -

	// COPY +
		$('.copy').click(function(){

			var text = $(this).attr('data');
			console.log(text);

			var $temp = $("<input>");
			$("body").append($temp);
			$temp.val(text).select();
			document.execCommand("copy");
			$temp.remove();

			$(this).html('Copied!');
		});
	// COPY -
});
