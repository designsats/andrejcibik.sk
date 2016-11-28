
// Hi sneaky code-sniffer :)
//console.image('https://s-media-cache-ak0.pinimg.com/736x/9b/fe/f0/9bfef0c0bb3a3cf817872aacf209667f.jpg');


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


// global scroll var +
	var wScroll = $(this).scrollTop();

	$(window).scroll(function(){
		wScroll = $(this).scrollTop();
	});
// global scroll var -



function mainMenuIndicator(thisItem) {
	var menuItem = $('.menu .item');
	var	menuIndicator = $('.navigation .indicator');

	setTimeout(function(){
		changeIndicator(thisItem);
	}, 10);

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
		.css('transform', 'translateY(' + offsetItem + 'px)')
		.css('opacity', 1);

		setTimeout(function(){
			menuIndicator.css('transition', 'all .4s');
		},400)

	} /* changeIndicator END */

	menuItem.click(function(){

		if ($(this).hasClass('active')) {
				$("html, body").animate({ scrollTop: 0 }, 300);
		} else {
			setTimeout(function(){
				$("html, body").animate({ scrollTop: 0 }, 0);
			}, 500);
		}
	});
}



var default_content="";

$(document).ready(function(){

	checkURL();

	var menuItem = $('.menu .item');

	menuItem.click(function (e){
		checkURL(this.hash);
	});

	default_content = $('.body-content').html();

	setInterval("checkURL()",250);

});

var lasturl="";

function checkURL(hash) {
	if (!hash) hash = window.location.hash;

	if (hash != lasturl) {

		lasturl=hash;

		if(hash=="")
		$('.body-content').html(default_content);

		else
		loadPage(hash);
	}
}


function loadPage(url) {
	url=url.replace('#','');

	$('.load-cont').addClass('show');

	$.ajax({
		type: "POST",
		url: "load_page.php",
		data: 'page='+url,
		dataType: "html",

		success: function(msg){

			if(parseInt(msg)!=0) {

				setTimeout(function(){
					$('.load-cont').removeClass('show');
					$('body').removeClass('map-is-visible');
					$('.body-content').html(msg);
				}, 1200);

				setTimeout(function(){
					$("html, body").animate({ scrollTop: 0 }, 0);
				}, 500);

				// Clear bgColor
				$('.page-bg').css('background', 'none');
			}
		} // Success msg -

	});

	// MAIN MENU INDICATOR +

		mainMenuIndicator($('.menu .item.active'));

		setTimeout(function(){

			var menuItem = $('.menu .item');

			var hash = window.location.hash;

			var indexOfSlash = hash.indexOf("/");

			if (indexOfSlash < 0)
				indexOfSlash = hash.length;

			var firstHash = hash.substring(0,indexOfSlash);

			menuItem.each(function(){

				menuItem.removeClass('active');

				var thisHref = $(this).attr('href');

				if (thisHref == firstHash) {

					$(this).addClass('active');
					mainMenuIndicator($(this));
					return false;

				} else if (firstHash == "") {

					$('.menu .item:first-child').addClass('active');
					mainMenuIndicator($(this));
					return false;

				}
			});

		},10);

	// MAIN MENU INDICATOR -
}


$(document).ready(function() {

// INACTIVE TAB TITLE +
	$(function() {
		var message = "I miss you :(";
		var original;

		$(window).focus(function() {
			if (original) {
				document.title = original;
			}
		}).blur(function() {
			var title = $('title').text();
			if (title != message) {
					original = title;
			}
			document.title = message;
		});
	});
// INACTIVE TAB TITLE -


// MOBILE MENU +
	var header = $('.header'),
			mobileMenuToggle = header.find('.mobile-menu-toggle');

	mobileMenuToggle.click(function(){
		$('body').toggleClass('open-menu');
	});

	$('.navigation .item').click(function(){
		setTimeout(function(){
			$('body').removeClass('open-menu');
		}, 500);
	});
// MOBILE MENU -


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


// RIPPLE EFFECT +
	function Ripple() {
		var ripple = $('.ripple');

		$(ripple).on('click',function(e){
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
	Ripple();

// RIPPLE EFFECT -


// FOOTER REAVEAL START +
	function fHeight() {
		var footerHeight = $('.footer').height(),
				contentWrapper = $('.content-wrapper');

		contentWrapper.css('margin-bottom', footerHeight);
	}

	fHeight();
// FOOTER REAVEAL START -

});
