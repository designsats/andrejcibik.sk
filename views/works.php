
<script type="text/javascript">
	$(function(){

		// Title change
			document.title = 'Designer & Frontend developer' + ' ' + defaultTitle;

		// Link back Href
			$('.link-back-cont')
				.removeClass('showing')
				.addClass('hidden');

		// MAIN CTA +
			function mainCtaInit() {
				var mainCta = $('.main-cta');

				title = 'Want to know more about me?';
				text = 'About & Contact';
				link = "contact";

				mainCta.find('.title').html(title);
				mainCta.find('.text').html(text);
				mainCta.attr('href', link);
			}
			mainCtaInit();
		// MAIN CTA -
	});
</script>

<section class="hero-section">

	<div class="separator"></div>

	<div class="row">
		<div class="small-6 medium-5 large-5 large-offset-1">
			<h1><span class="first-word">Designer</span> <br> Front-end developer</h1>

			<p>Hi, I'm Andrej Cibík. 23 year old designer and front-end developer based in Púchov, Slovakia.</p>

			<div class="separator small"></div>

			<a href="contact" class="button rippleHover">About & Contact</a>
		</div>
	</div>

</section>

<div class="separator small"></div>

<h2 class="h1 centered">Works</h2>

<div class="works-cont">

	<div class="section boxed centered">
		<div class="work-preview">
			<div class="work-preview-image">
				<div class="image-crop">
					<a href="lacnevozenie" class="preview-image">
						<img src="data/previews/lacnevozenie.jpg" alt="Lacne Vozenie website" class="image desktop-view" />
						<img src="data/previews/lacnevozenie-mobile.jpg" alt="Lacne Vozenie website mobile" class="image mobile-view" />
					</a>
				</div>
			</div>
			<a href="lacnevozenie" class="ajaxLink button button-preview rippleHover">View project</a>
		</div>
	</div>

	<div class="section boxed centered">
		<div class="work-preview">
			<div class="work-preview-image">
				<div class="image-crop">
					<a href="cnma" class="preview-image">
						<img src="data/previews/cnma.jpg" alt="CNMA website" class="image desktop-view" />
						<img src="data/previews/cnma-mobile.jpg" alt="CNMA website mobile" class="image mobile-view" />
					</a>
				</div>
			</div>
			<a href="cnma" class="ajaxLink button button-preview rippleHover">View project</a>
		</div>
	</div>

	<div class="section boxed centered">
		<div class="work-preview">
			<div class="work-preview-image">
				<div class="image-crop">
					<a href="personal-branding" class="preview-image">
						<img src="data/previews/personalbranding.jpg" alt="Personal branding Andrej Cibík" class="image desktop-view" />
						<img src="data/previews/personalbranding-mobile.jpg" alt="Personal branding Andrej Cibík" class="image mobile-view" />
					</a>
				</div>
			</div>
			<a href="personal-branding" class="ajaxLink button button-preview rippleHover">View project</a>
		</div>
	</div>

</div>

<br><br><br>
