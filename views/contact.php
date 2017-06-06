
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
		Hey, Thanks for stopping by. My name’s Andrej Cibík and I’m a designer and front-end developer at <a href="http://www.lemonlion.sk/" class="subtle-link" target="_blank">LemonLion</a> - a digital agency from <a href="https://goo.gl/jt2J3i" target="_blank" title="My current location.">Púchov, Slovakia</a>.
		I’m at war against default grey and I love clean, striking design.
		My goal is to be as good designer as I can, while not neglecting my front-end skills.
		Do you have a killer project which needs a kick-start?
	</p>
</div>

<div class="separator"></div>

<div class="section">
	<div class="growImg awards-section" style="background-image: url(data/me03.jpg);">

		<div class="separator"></div>

		<div class="row ease-item ease-left">
			<div class="small-6 medium-4 large-3 large-offset-1">
				<h2>Awards and <br>mentions</h2>
				<br>
				<a href="https://www.awwwards.com/sites/andrejcibik-sk" class="item" target="_blank"><strong>Awwwards.com </strong> - nominee</a>
				<br>

				<a href="http://cssdesignawards.com/sites/andrej-cibik-personal-portfolio/29846/" class="item" target="_blank"><strong>CSS Design Awards </strong> - nominee</a>
				<br>
				<a href="http://www.csswinner.com/details/personal-portfolio-andrejcibiksk/11160" class="item" target="_blank"><strong>CSS winner</strong> - star</a>
				<br>
				<a href="http://www.designnominees.com/sites/andrejcibiksk-personal-portfolio" class="item" target="_blank"><strong>Design nominees</strong> - site of the day</a>
				<br>


				<br>
			</div>
		</div>

		<div id="awwwards" class="nominee black left">
			<a href="https://www.awwwards.com/sites/andrejcibik-sk" title="Awwwards" target="_blank">Awwwards</a>
		</div>

		<a href="http://cssdesignawards.com/sites/andrej-cibik-personal-portfolio/29846/" class="cssda" target="_blank"><img src="data/cssda.png" alt=""></a>


		<div class="growSide growSide-left"></div>
		<div class="growSide growSide-right"></div>
	</div>
</div>

<div class="separator"></div>
<div class="separator"></div>

<h2 class="centered">What am I bad at.</h2>

<div class="separator small"></div>

<div class="boxed">
	<p class="about-text">
		In the future, I would like to improve my vector illustration and flat animation skills. Branding and logo design are fields I want to improve.
		I would like to make some more complex logo designs. I don't know pretty much anything about photography or filmography.
		Oh, and I suck at copywriting, both Slovak and English, but I'm already working on it.
	</p>
</div>

<div class="separator"></div>
<div class="separator"></div>

<h2 class="h1 centered">Contact
	<span class="ghost-title">Keep in touch</span>
</h2>

<div class="separator small"></div>

<div class="centered social-links-contact">
	<a href="https://www.behance.net/AndrejCibik" class="button rippleHover icon-behance" title="Behnace" target="_blank"></a>
	<a href="https://dribbble.com/AndrejCibik" class="button rippleHover icon-dribbble" title="Dribbble" target="_blank"></a>
	<a href="https://www.facebook.com/AndrejCibikDesign/" class="button rippleHover icon-facebook" title="FB page"></a>
	<a href="https://www.instagram.com/andrejcibik/" class="button rippleHover icon-instagram" title="Instagram" target="_blank"></a>
	<a href="https://www.youtube.com/channel/UCwVEiFeuccoAzgwpAsSl7Tw" class="button rippleHover icon-youtube" title="Youtube" target="_blank"></a>
	<a href="mailto:hello@andrejcibik.sk" class="button rippleHover icon-mail" title="Email" ></a>

</div>

<div class="separator"></div>

<div class="author subtle-text">
	Designed & coded with passion by me. Open source on <strong><a href="https://github.com/andrejcibik/andrejcibik.sk" class="subtle-link" target="_blank">Github.</a></strong>
</div>

<div class="separator"></div>
