
<script type="text/javascript">
	$(function(){

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

<div class="separator"></div>

<h1 class="centered"><span class="first-word">About</span> Me</h1>

<div class="boxed">
	<p class="about-text">
		Hey, Thanks for stopping by. My name’s Andrej Cibík and I’m a designer and front-end developer at <a href="http://www.lemonlion.sk/" class="subtle-link" target="_blank">LemonLion</a> - a digital agency from Púchov, Slovakia. I’ve worked on over 100 projects. I’m at war against default grey and I love clean, striking design. Do you have a killer project which needs a kick-start?
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
	Designed & coded with passion by me. Open source on <strong><a href="https://github.com/andrejcibik/andrejcibik.sk" class="subtle-link" target="_blank">Github.</a></strong>
</div>

<div class="separator"></div>
