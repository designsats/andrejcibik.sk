
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
				text = 'hello@andrejcibik.sk';
				link = "mailto:hello@andrejcibik.sk";

				mainCta.find('.title').html(title);
				mainCta.find('.text').html(text);
				mainCta.attr('href', link);
			}
			mainCtaInit();
		// MAIN CTA -

	});
</script>

<div class="separator"></div>

<h1 class="centered">About me
	<span class="ghost-title">Who am I</span>
</h1>

<div class="boxed">
	<p class="about-text">
		Hey, Thanks for stopping by. My name’s Andrej Cibík and I’m a designer and front-end developer at <a href="http://www.lemonlion.sk/" class="subtle-link" target="_blank">LemonLion</a> - a digital agency from Púchov, Slovakia. I’ve worked on over 100 projects. I’m at war against default grey and I love clean, striking design. Do you have a killer project which needs a kick-start?
	</p>
</div>

<div class="separator"></div>

<div class="section">
	<div class="growImg" style="background-image: url(data/me03.jpg);">

		<div class="separator"></div>

		<?php
		/*
		<div class="row ease-item ease-left">
			<div class="small-6 medium-4 large-3 large-offset-1">
				<h2>Awards and mentions</h2>
				5.1.2017 - <a href="http://www.csswinner.com/details/personal-portfolio-andrejcibiksk/11160">csswinner.com star</a>
				7.1.2017 - <a href="http://www.boostlizer.com/list/f2lgxrx9/personal-portfolio-andrejcibiksk">boostlizer.com site of the day</a>
			</div>
		</div>
		*/
		?>

		<div class="growSide growSide-left"></div>
		<div class="growSide growSide-right"></div>
	</div>
</div>

<div class="separator small"></div>
<div class="separator"></div>

<h2 class="h1 centered">Contact
	<span class="ghost-title">Keep in touch</span>
</h2>

<div class="separator small"></div>

<div class="centered social-links-contact">
	<a href="mailto:hello@andrejcibik.sk" class="button rippleHover icon-mail" title="Email"></a>
	<a href="https://www.facebook.com/CibikAndrej" class="button rippleHover icon-facebook" title="Facebook" target="_blank"></a>
	<a href="https://www.behance.net/AndrejCibik" class="button rippleHover icon-behance" title="Behnace" target="_blank"></a>
	<a href="https://www.linkedin.com/in/andrejcibik" class="button rippleHover icon-linkedin" title="LinkedIn" target="_blank"></a>

</div>

<div class="separator"></div>

<div class="author subtle-text">
	Designed & coded with passion by me. Open source on <strong><a href="https://github.com/andrejcibik/andrejcibik.sk" class="subtle-link" target="_blank">Github.</a></strong>
</div>

<div class="separator"></div>
