
<script type="text/javascript">
	$(function(){

		// Get JS for content manipulation
			var url = "assets/js/views.js";
			$.getScript(url);

		// Title change
			document.title = 'CNMA concept' + ' ' + defaultTitle;

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


<h1 class="centered">CNMA concept</h1>

<div class="section">

	<div class="growImg" style="background-image: url(data/projects/cnma.jpg);" data-jq-clipthru="clip-light">
		<div class="growSide growSide-left"></div>
		<div class="growSide growSide-right"></div>
	</div>

</div>

<div class="separator"></div>

<div class="section">

	<div class="growImg" style="background-image: url(data/projects/cnma.jpg);" data-jq-clipthru="clip-light">
		<div class="growSide growSide-left"></div>
		<div class="growSide growSide-right"></div>
	</div>

</div>


<script>
  var url = "assets/js/views.js";
  $.getScript(url);
</script>
