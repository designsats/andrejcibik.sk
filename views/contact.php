
<script type="text/javascript">
	$(function(){

		// Get JS for content manipulation
		  var url = "assets/js/views.js";
		  $.getScript(url);

		// Title change
			document.title = 'About & Contact' + ' ' + defaultTitle;

		// Link back Href
			$('.link-back-cont')
				.removeClass('hidden')
				.addClass('showing');

		// MAIN CTA +
			function mainCtaInit() {
				var mainCta = $('.main-cta');

				title = 'Let\'s create something awesome';
				text = 'andrejcibik@gmail.com';
				link = "mailto:andrejcibik@gmail.com";

				mainCta.find('.title').html(title);
				mainCta.find('.text').html(text);
				mainCta.attr('href', link);
			}
			mainCtaInit();
		// MAIN CTA -

	});
</script>


<h1 class="centered">About me</h1>


<div class="boxed">
	<p class="about-text">
		Hey, Thanks for stopping by. My name’s Andrej Cibík and I’m a Designer and Front-end Developer at <a href="http://www.lemonlion.sk/" class="subtle-link" target="_blank">LemonLion</a>, Digital Agency from Púchov, Slovakia. I’ve worked on more than 150 websites. I’m in a war against default grey and in love for clean, striking design. Do you have a killer project?
	</p>
</div>

<div class="separator"></div>

<div class="boxed centered social-links-contact">
	<a href="mailto:andrejcibik@gmail.com" class="button rippleHover icon-mail" title="Email"></a>
	<a href="https://www.facebook.com/CibikAndrej" class="button rippleHover icon-facebook" title="Facebook" target="_blank"></a>
	<a href="https://www.behance.net/AndrejCibik" class="button rippleHover icon-behance" title="Behnace" target="_blank"></a>
</div>

<div class="separator"></div>

<div class="author subtle-text">
	Designed & coded with passion by me. Open source on <strong><a href="https://github.com/andrejcibik/andrejcibik.sk" class="subtle-link" target="_blank">Github</a> </strong>
</div>
