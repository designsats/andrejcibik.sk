
<script type="text/javascript">
	$(function(){

		// Get JS for content manipulation
			var url = "assets/js/views.js";
			$.getScript(url);

		// Title change
			document.title = 'LacneVozenie.sk website' + ' ' + defaultTitle;

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


<h1 class="centered">Lacné vozenie</h1>

<div class="row subtle-text ease-item" data-ease-delay="1s">
	<div class="small-6 medium-2 large-2 large-offset-1 columns">
		<strong>ROLE:</strong>
		Designer, Front-end Developer
	</div>
	<div class="small-6 medium-2 large-1 columns">
		<strong>DATE:</strong>
		August 2016
	</div>
	<div class="small-6 medium-2 large-2 columns">
		<strong>CONTEXT:</strong>
		Website redesign
	</div>
</div>

<div class="separator small"></div>

<p class="subtitle centered boxed ease-item" data-ease-delay="1.6s">Website for Autoklinika Bosch Car Service, Slovak leader in the installation and servicing of LPG-technology to civil cars. </p>

<div class="separator small"></div>

<p class="centered ease-item" data-ease-delay="2.2s"><a href="http://www.lacnevozenie.sk/sk/" class="button rippleHover" target="_blank">Visit website</a></p>

<div class="separator"></div>

<div class="section">

	<div class="growImg" style="background-image: url(data/projects/lacnevozenie02.jpg);">
		<div class="growSide growSide-left"></div>
		<div class="growSide growSide-right"></div>
	</div>

</div>

<div class="separator"></div>



<div class="separator"></div>

<div class="section">

	<div class="growImg" style="background-image: url(data/projects/lacnevozenie01.jpg);">
		<div class="growSide growSide-left"></div>
		<div class="growSide growSide-right"></div>
	</div>

</div>

<div class="separator"></div>

<p class="centered"><a href="http://www.lacnevozenie.sk/sk/" class="button rippleHover" target="_blank">Visit website</a></p>

<div class="separator"></div>

<div class="next-project">

</div>
