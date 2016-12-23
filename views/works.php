
<script type="text/javascript">
	$(function(){

		// Get JS for content manipulation
			var url = "assets/js/views.js";
			$.getScript(url);

		// Title change
			document.title = 'Designer & Frontend developer' + ' ' + defaultTitle;

		// Link back Href
			$('.link-back-cont')
				.removeClass('showing')
				.addClass('hidden');

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

	<div class="separator"></div>

	<div class="row ease-item ease-left">
		<div class="small-6 medium-5 large-5 large-offset-1">
			<h1>Designer <br> Front-end dev.</h1>
			Andrej Cibík. 23 year old designer and front-end developer <br> based in Púchov, Slovakia.
			<br><br><br>
			<a href="#contact" class="ajaxLink button rippleHover">Contacts</a>
		</div>
	</div>

</section>

<div class="separator"></div>

<h2 class="h1 centered">Works</h2>

<div class="works-cont">

	<div class="section boxed centered">
		<div class="work-preview">
			<div class="work-preview-image">
				<div class="image-crop">
					<a href="#works/lacnevozenie" class="preview-image ripple">
						<img src="data/previews/lacnevozenie.jpg" alt="" class="image desktop-view" />
						<img src="data/previews/lacnevozenie-mobile.jpg" alt="" class="image mobile-view" />
					</a>
				</div>
			</div>
			<a href="#works/lacnevozenie" class="ajaxLink button button-preview rippleHover">View project</a>
		</div>
	</div>

	<div class="section boxed centered">
		<div class="work-preview">
			<div class="work-preview-image">
				<div class="image-crop">
					<a href="#works/cnma" class="preview-image ripple">
						<img src="data/previews/cnma.jpg" alt="" class="image desktop-view" />
						<img src="data/previews/cnma-mobile.jpg" alt="" class="image mobile-view" />
					</a>
				</div>
			</div>
			<a href="#works/cnma" class="ajaxLink button button-preview rippleHover">View project</a>
		</div>
	</div>

	<div class="section boxed centered">
		<div class="work-preview">
			<div class="work-preview-image">
				<div class="image-crop">
					<a href="#works/personal-branding" class="preview-image ripple">
						<img src="data/previews/personalbranding.jpg" alt="" class="image desktop-view" />
						<img src="data/previews/personalbranding-mobile.jpg" alt="" class="image mobile-view" />
					</a>
				</div>
			</div>
			<a href="#works/personal-branding" class="ajaxLink button button-preview rippleHover">View project</a>
		</div>
	</div>

</div>

<br><br><br>
