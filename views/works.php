
<script type="text/javascript">
	$(function(){

		// GEt JS for content manipulation
		  var url = "assets/js/views.js";
		  $.getScript(url);

		// Title change
			document.title = 'Designer & Frontend developer' + ' ' + defaultTitle;

		// Link back Href
			$('.link-back').hide();

		// MAIN CTA +
			function mainCtaInit() {
				var mainCta = $('.main-cta');

				title = 'Wanna know more about me?';
				text = 'About & Contact';
				link = "#contact";

				mainCta.find('.title').html(title);
				mainCta.find('.text').html(text);
				mainCta.attr('href', link);
			}
			mainCtaInit();
		// MAIN CTA -
	});
</script>

<section class="hero-section">
</section>

<br><br><br>

<h2 class="h1 centered">Works</h2>

<div class="works-cont">

	<div class="section boxed centered" data-background-color="#d1e5c1">

		<div class="work-preview">
			<div class="work-preview-image">
				<div class="image-crop">
					<a href="#works/lacnevozenie" class="ajaxLink">
						<img src="data/projects/01.jpg" alt="" class="image desktop-view" />
						<img src="data/projects/cnma-mobile.jpg" alt="" class="image mobile-view" />
					</a>
				</div>
			</div>

			<a href="#works/lacnevozenie" class="ajaxLink button button-preview rippleHover">View project</a>
		</div>

	</div>

	<div class="section boxed centered" data-background-color="#d1e5c1">

		<div class="work-preview">
			<div class="work-preview-image">
				<div class="image-crop">
					<a href="#works/cnma" class="ajaxLink">
						<img src="data/previews/cnma.jpg" alt="" class="image desktop-view" />
						<img src="data/projects/cnma-mobile.jpg" alt="" class="image mobile-view" />
					</a>
				</div>
			</div>

			<a href="#works/cnma" class="ajaxLink button button-preview rippleHover">View project</a>
		</div>

	</div>

</div>

<br><br><br>
