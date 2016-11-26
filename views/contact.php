<script type="text/javascript">
	$(function(){
		document.title = 'About & Contact' + ' ' + defaultTitle;
	});
</script>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<a href="mailto:andrejcibik@gmail.com" class="contact-mail mouse-reaction" data-jq-clipthru="clip-light">
	<span class="text">
		<span class="title">Let's create something dreamy</span>
		andrejcibik@gmail.com
	</span>
	<span class="mouse-move-el"></span>
</a>

<script>
  var url = "assets/js/views.js";
  $.getScript(url);

	$(document).ready(function(){

		if ($(window).width() >= 980) {
			// CLIP THRU +
				$('.navigation').add('.logo').clipthru({
					autoUpdate: true,
					autoUpdateInterval: 30,
					debug: false
				});
			// CLIP THRU -
		}

		// MOUSE REACTION +
				var targetEl = $('.mouse-reaction');

				$('body').mousemove(function(e) {
					var el = $('.mouse-move-el');
					var targetElTop = targetEl.offset();

						elWidth = el.width(),
						x = e.pageX - elWidth / 2,
						y = e.pageY - elWidth / 2 - targetElTop.top;

					el.css('transform', 'translate3d(' + x + 'px,' + y + 'px,0)');
				});
		// MOUSE REACTION -

	});
</script>
