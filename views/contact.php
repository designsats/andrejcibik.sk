
<script type="text/javascript">
	$(function(){

		// Get JS for content manipulation
		  var url = "assets/js/views.js";
		  $.getScript(url);

		// Title change
			document.title = 'About & Contact' + ' ' + defaultTitle;

		// Link back Href
			$('.link-back').show().attr('href', '#works');

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

<br><br><br>

<div class="boxed">
	<p class="about-text">
		Hey, Thanks for stopping by. My name’s Andrej Cibík and I’m a Designer and Front-end Developer at <a href="http://www.lemonlion.sk/" target="_blank">LemonLion</a>, Digital Agency from Púchov, Slovakia. I’ve worked on more than 150 websites. I’m in a war against default grey and in love for clean, striking design. Do you have a killer project?
	</p>
</div>

<br><br><br>


<div class="author">
	Designed & coded with passion by me. Open source on <strong><a href="https://github.com/andrejcibik/andrejcibik.sk" target="_blank">Github</a> </strong>
</div>
