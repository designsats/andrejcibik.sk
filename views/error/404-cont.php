
<script type="text/javascript">
	$(function(){

		// Get JS for content manipulation
		  var url = "assets/js/views.js";
		  $.getScript(url);

		// Title change
			document.title = 'oh S**T, 404' + ' ' + defaultTitle;

		// Link back Href
			$('.link-back-cont')
				.removeClass('hidden')
				.addClass('showing');

		// MAIN CTA +
			function mainCtaInit() {
				var mainCta = $('.main-cta');

				title = 'Marty, we have to go back!!!';
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


<h1 class="centered">You broke it!</h1>
<p class="centered">I'm confused. What is this?</p>

<div class="boxed err-image">
</div>
