
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


<h1 class="centered">Lacné vozenie</h1>

<p class="centered"><a href="http://www.lacnevozenie.sk/sk/" class="button rippleHover" target="_blank">Visit website</a></p>

<div class="section">

	<div class="growImg" style="background-image: url(data/projects/lacnevozenie01.jpg);">
		<div class="growSide growSide-left"></div>
		<div class="growSide growSide-right"></div>
	</div>

</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="section">

	<div class="growImg" style="background-image: url(data/projects/lacnevozenie02.jpg);" data-jq-clipthru="clip-light">
		<div class="growSide growSide-left"></div>
		<div class="growSide growSide-right"></div>
	</div>

</div>

<br><br><br><br><br>

<div class="next-project">

</div>
