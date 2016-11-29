<script type="text/javascript">
	$(function(){
		document.title = 'About & Contact' + ' ' + defaultTitle;
	});
</script>


<br><br><br>

<h1 class="centered">About me</h1>

<br><br><br>

<div class="boxed">
	<p class="about-text">
		Hey, Thanks for stopping by. My name’s Andrej Cibík and I’m a Designer and Front-end Developer at <a href="http://www.lemonlion.sk/" target="_blank">LemonLion</a>, Digital Agency from Púchov, Slovakia. I’ve worked on over 100 projects. I’m in a war against default grey and I love clean, striking design. Do you have a killer project?
	</p>
</div>

<br><br><br>



<a href="mailto:andrejcibik@gmail.com" class="contact-mail mouse-reaction" data-jq-clipthru="clip-light">
	<span class="text">
		<span class="title">Let's create something awesome</span>
		andrejcibik@gmail.com
	</span>
	<span class="mouse-move-el"></span>
</a>

<script>
  var url = "assets/js/views.js";
  $.getScript(url);

	$(document).ready(function(){
		// MAP IS VISIBLE
			$('body').addClass('map-is-visible');

		// CLIP THRU +
		/*
			if ($(window).width() >= 980) {
				$('.navigation').add('.logo').clipthru({
					autoUpdate: true,
					autoUpdateInterval: 30,
					debug: false
				});
			} */
		// CLIP THRU -

		// MOUSE REACTION +
			function mouseReaction(target) {

				$('body').mousemove(function(e) {
					var el = $('.mouse-move-el');
					var targetElTop = target.offset();

						elWidth = el.width(),
						x = e.pageX - elWidth / 2,
						y = e.pageY - elWidth / 2 - targetElTop.top;

					el.css('transform', 'translate3d(' + x + 'px,' + y + 'px,0)');
				});
			}
			mouseReaction($('.mouse-reaction'));
		// MOUSE REACTION -

	});
</script>
