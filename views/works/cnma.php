
<script type="text/javascript">
	$(function(){

		// Get JS for content manipulation
			var url = "assets/js/views.js";
			$.getScript(url);

		// Title change
			document.title = 'cnma concept' + ' ' + defaultTitle;

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

<div class="separator"></div>

<h1 class="centered">CNMA concept</h1>

<div class="centered">
	<span class="project-detail"><strong>ROLE:</strong> Designer, Front-end</span>
	<span class="project-detail"><strong>DATE:</strong> February 2016</span>
	<span class="project-detail"><strong>CONTEXT:</strong> Personal project</span>
</div>

<div class="separator small"></div>

<p class="project-pitch subtitle boxed">I am a big movie enthusiast. Thats why I decided to design this concept for movie portal. It's insired by Google's Material Design manifesto.</p>

<div class="separator small"></div>

<p class="centered"><a href="http://cnma.6f.sk/" class="button rippleHover" target="_blank">Visit website</a></p>

<div class="separator"></div>

<div class="section">
	<div class="growImg" style="background-image: url(data/projects/cnma/cnma01.jpg);">
		<div class="growSide growSide-left"></div>
		<div class="growSide growSide-right"></div>
	</div>
</div>

<div class="separator small"></div>

<div class="section">
	<div class="growImg" style="background-image: url(data/projects/cnma/cnma02.jpg);">
		<div class="growSide growSide-left"></div>
		<div class="growSide growSide-right"></div>
	</div>
</div>

<div class="separator"></div>

<div class="row ease-item ease-left">
	<div class="small-6 medium-4 large-3 large-offset-1">
		<h2>Info</h2>
		Right now, there is no website in Slovakia, which combines possibility of rating and reviewing of movies and modern, responsive design. My job as a designer is always about solving problems. And since I felt there’s a room for improvement, I decided to create a concept of such site.
	</div>
</div>

<div class="separator"></div>

<div class="boxed ease-item ease-bottom">
	<img src="data/projects/cnma/cnma03.jpg" alt="Logo CNMA">
</div>

<div class="separator small"></div>

<div class="row ease-item ease-left">
	<div class="small-6 medium-4 large-3 large-offset-1">
		<h2>Solution</h2>
		My main objective was to improve user experiance on mobile devices and main functions of website: rating and reviewing of movies. All content is structured by using cards, which can be moved, removed and customized by the user.
	</div>
</div>

<div class="separator"></div>

<div class="boxed ease-item ease-bottom drop-shadow">
	<img src="data/projects/cnma/cnma04.jpg" class="respImg" alt="Website CNMA">
</div>

<div class="separator"></div>

<div class="section">
	<div class="growImg" style="background-image: url(data/projects/cnma/cnma05.jpg);">
		<div class="growSide growSide-left"></div>
		<div class="growSide growSide-right"></div>
	</div>
</div>

<div class="separator"></div>

<div class="row ease-item ease-left">
	<div class="small-6 medium-4 large-3 large-offset-1">
		<h2>Rating</h2>
		I payed extra attention to rating process. It’s a key feature of the website, so I wanted it to be really user friendly and easy to understand. Inspired by Google’s Material design principles I used a big main action button, which triggers both rating and additional functions.
	</div>
</div>

<div class="separator"></div>

<div class="boxed ease-item ease-bottom">
	<div class="video-cont drop-shadow">
		<video src="data/video/cnma02.mp4" class="video" autoplay loop poster="data/video/cnma02.gif"></video>
	</div>
</div>

<div class="separator"></div>

<div class="boxed ease-item ease-bottom next-project-cont multiple">
	<a href="#works/lacnevozenie" class="button rippleHover prevProject"><span class="arrow"></span> Prev project</a>
	<a href="#works/personal-branding" class="button rippleHover nextProject">Next project <span class="arrow"></span></a>
</div>


<div class="separator"></div>
