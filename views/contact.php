<script type="text/javascript">
	$(function(){
		document.title = 'About & Contact' + ' ' + defaultTitle;
	});
</script>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

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
