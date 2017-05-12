
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

			<p>Hi, I'm Andrej Cibík. 23 year old designer and front-end developer based in <a href="https://goo.gl/jt2J3i" target="_blank" title="My current location.">Púchov, Slovakia</a>.</p>

			<div class="separator small"></div>

			<a href="contact" class="button rippleHover">About & Contact</a>
		</div>
	</div>

	<div class="scroll-down-arrow-cont rippleHover">
		<div class="scroll-down-arrow"></div>
	</div>

</section>

<div class="separator"></div>

<h2 class="h1 centered">Works
	<span class="ghost-title">My passion</span>
</h2>

<div class="works-cont">

	<div class="section boxed centered">
		<div class="work-preview">
			<div class="work-preview-image">
				<div class="image-crop">
					<a href="bazos" class="preview-image">
						<img src="data/previews/bazos.jpg" alt="Bazos redesign" class="image desktop-view" />
						<img src="data/previews/bazos-mobile.jpg" alt="Bazos redesign mobile" class="image mobile-view" />
					</a>
				</div>
			</div>
			<a href="bazos" class="ajaxLink button button-preview rippleHover">View project</a>
		</div>
	</div>

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
					<a href="logos-2016" class="preview-image">
						<img src="data/previews/logos-2016.jpg" alt="" class="image desktop-view" />
						<img src="data/previews/logos-2016-mobile.jpg" alt="" class="image mobile-view" />
					</a>
				</div>
			</div>
			<a href="logos-2016" class="ajaxLink button button-preview rippleHover">View project</a>
		</div>
	</div>

	<?php /*
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
	*/ ?>

	<div class="separator"></div>
	<div class="separator small"></div>

	<div class="dribbble-shots">

		<h2 class="h1 centered">Dribbble
			<span class="ghost-title">latest shots</span>
		</h2>

		<div class="separator small"></div>

		<ul class="shots"></ul>

		<div class="separator small"></div>

		<p class="centered"><a href="https://dribbble.com/AndrejCibik" class="button rippleHover" target="_blank" title="My Dribbble profile">Follow me</a></p>

		<div class="separator small"></div>

	</div>

</div>

<br><br><br>
