
<script type="text/javascript">
	$(function(){

		// Title change
			document.title = 'oh S**T, 404' + ' ' + defaultTitle;

		// Link back Href
			$('.link-back-cont')
				.removeClass('hidden')
				.addClass('showing');

		// MAIN CTA +
			function mainCtaInit() {
				var mainCta = $('.main-cta');

				title = 'Morty, we have to go back!!!';
				text = 'Ok, doc.';
				link = "#works";

				mainCta.find('.title').html(title);
				mainCta.find('.text').html(text);
				mainCta.attr('href', link);
			}
			mainCtaInit();
		// MAIN CTA -
	});
</script>

<div class="separator"></div>

<div class="boxed err-image">

	<h1 class="centered">Where is the page?</h1>
	<p class="centered">Yep, 404.
		<br><br><br>
		<a href="#works" class="button rippleHover">Back to start</a>

	</p>

	<div class="image"></div>

</div>
