
<script type="text/javascript">
	$(function(){

		// Get JS for content manipulation
			var url = "assets/js/views.js";
			$.getScript(url);

		// Title change
			document.title = 'Personal branding' + ' ' + defaultTitle;

		// Link back Href
			$('.link-back-cont')
				.removeClass('hidden')
				.addClass('showing');

		// MAIN CTA +
			function mainCtaInit() {
				var mainCta = $('.main-cta');

				title = 'Do you like what you see?';
				text = 'About me & Contact';
				link = "#contact";

				mainCta.find('.title').html(title);
				mainCta.find('.text').html(text);
				mainCta.attr('href', link);
			}
			mainCtaInit();
		// MAIN CTA -

	});
</script>


<h1 class="centered">Personal branding</h1>

<div class="boxed centered subtle-text ease-item ease-left" data-ease-delay="1s">
	<span class="project-detail"><strong>ROLE:</strong> Designer</span>
	<span class="project-detail"><strong>DATE:</strong> December 2016</span>
	<span class="project-detail"><strong>CONTEXT:</strong> Logo desing</span>
</div>

<div class="separator small"></div>

<p class="project-pitch subtitle boxed ease-item ease-left" data-ease-delay="1.6s">Acronyms as logos are everywhere. Thats why I decided to use my full name instead. </p>

<div class="separator small"></div>

<p class="centered ease-item ease-left" data-ease-delay="2.2s"><a href="https://www.behance.net/gallery/46276979/Personal-Branding-Andrej-Cibik" class="button rippleHover" target="_blank">Case study</a></p>

<div class="separator"></div>

<div class="section">
	<div class="growImg" style="background-image: url(data/projects/personalbranding/personalbranding01.jpg);">
		<div class="growSide growSide-left"></div>
		<div class="growSide growSide-right"></div>
	</div>
</div>

<div class="separator"></div>

<div class="row ease-item ease-left">
	<div class="small-6 medium-4 large-3 large-offset-1">
		<h2>Discovery</h2>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
	</div>
</div>

<div class="separator small"></div>

<div class="boxed ease-item ease-bottom">
	<img src="data/projects/personalbranding/personalbranding02.jpg" class="respImg" alt="Logo Andrej Cibik">
</div>

<div class="separator"></div>

<div class="row ease-item ease-left">
	<div class="small-6 medium-4 large-3 large-offset-1">
		<h2>Color scheme</h2>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
	</div>
</div>

<div class="separator small"></div>

<div class="boxed ease-item ease-bottom">
	<img src="data/projects/personalbranding/personalbranding05.jpg" class="respImg" alt="Colors Andrej Cibik">
</div>

<div class="boxed ease-item ease-bottom">
	<img src="data/projects/personalbranding/personalbranding03.jpg" class="respImg" alt="Logo Andrej Cibik">
</div>

<div class="separator small"></div>

<div class="boxed ease-item ease-bottom">
	<img src="data/projects/personalbranding/personalbranding04.jpg" class="respImg" alt="Logo Andrej Cibik">
</div>

<div class="separator"></div>
<div class="separator small"></div>

<div class="row ease-item ease-left">
	<div class="small-6 medium-4 large-3 large-offset-1">
		<h2>Aplications</h2>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
	</div>
</div>

<div class="separator"></div>

<div class="boxed centered ease-item ease-bottom">
	<h3>Bussiness card</h3>
</div>

<div class="separator small"></div>

<div class="boxed ease-item ease-bottom">
	<img src="data/projects/personalbranding/personalbranding07.jpg" class="respImg" alt="Bussiness card">
</div>

<div class="separator"></div>

<div class="boxed centered ease-item ease-bottom">
	<h3>Email signature</h3>
</div>

<div class="separator small"></div>

<div class="boxed ease-item ease-bottom">
	<img src="data/projects/personalbranding/personalbranding06.jpg" class="respImg" alt="Email signature">
</div>

<div class="separator"></div>
