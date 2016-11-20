
<script type="text/javascript">
	$(function(){
		document.title = 'Designer & Frontend developer' + ' ' + defaultTitle;
	});
</script>



<h1></h1>


<br><br><br><br><br><br><br><br><br><br><br><br><br>


<div class="section">

	<div class="growImg" style="background-image: url(data/projects/01.jpg);">
		<div class="growSide growSide-left"></div>
		<div class="growSide growSide-right"></div>
	</div>

	<br><br><br><br><br><br><br><br><br>

	<div class="growImg" style="background-image: url(data/projects/02.jpg);" data-jq-clipthru="clip-light">
		<div class="growSide growSide-left"></div>
		<div class="growSide growSide-right"></div>
	</div>


</div>


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
	});
</script>
