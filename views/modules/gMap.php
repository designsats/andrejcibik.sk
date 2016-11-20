
<div id="map" class="gMap"></div>

<script>
      function initMap() {
        var pos = {lat: 49.118634, lng: 18.322827};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: pos,
					mapTypeControl: false,
					zoomControlOptions: {
              position: google.maps.ControlPosition.LEFT_CENTER
          },
					streetViewControlOptions: {
              position: google.maps.ControlPosition.LEFT_BOTTOM
          },
					backgroundColor: 'none',
					styles: [{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative.country","elementType":"geometry.stroke","stylers":[{"weight":"1.0"},{"color":"#a1a1a1"}]},{"featureType":"administrative.country","elementType":"labels.text.fill","stylers":[{"color":"#858585"}]},{"featureType":"administrative.province","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"administrative.locality","elementType":"all","stylers":[{"hue":"#2c2e33"},{"saturation":7},{"lightness":19},{"visibility":"on"}]},{"featureType":"administrative.locality","elementType":"labels.text.fill","stylers":[{"color":"#898989"}]},{"featureType":"administrative.neighborhood","elementType":"labels.text.fill","stylers":[{"color":"#e6e6e6"}]},{"featureType":"landscape","elementType":"all","stylers":[{"hue":"#ff0000"},{"saturation":-100},{"lightness":100},{"visibility":"simplified"}]},{"featureType":"poi","elementType":"all","stylers":[{"hue":"#ff0000"},{"saturation":-100},{"lightness":100},{"visibility":"off"}]},{"featureType":"road","elementType":"geometry","stylers":[{"saturation":"-100"},{"lightness":31},{"visibility":"simplified"},{"color":"#efefef"}]},{"featureType":"road","elementType":"labels","stylers":[{"hue":"#bbc0c4"},{"saturation":-93},{"lightness":31},{"visibility":"on"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#efefef"}]},{"featureType":"road.arterial","elementType":"labels","stylers":[{"hue":"#bbc0c4"},{"saturation":-93},{"lightness":-2},{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"saturation":-90},{"lightness":-8},{"visibility":"simplified"},{"color":"#efefef"}]},{"featureType":"road.local","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"road.local","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"hue":"#e9ebed"},{"saturation":10},{"lightness":69},{"visibility":"on"}]},{"featureType":"water","elementType":"all","stylers":[{"saturation":-78},{"lightness":67},{"visibility":"simplified"},{"color":"#f4f4f4"}]}]
        });



				$(document).ready(function(){

					var gMapsLoaded = false;
					window.gMapsCallback = function(){
					    gMapsLoaded = true;
					    $(window).trigger('gMapsLoaded');
					}
					window.loadGoogleMaps = function(){
					    if(gMapsLoaded) return window.gMapsCallback();
					    var script_tag = document.createElement('script');
					    script_tag.setAttribute("type","text/javascript");
					    script_tag.setAttribute("src","http://maps.google.com/maps/api/js?sensor=false&callback=gMapsCallback");
					    (document.getElementsByTagName("head")[0] || document.documentElement).appendChild(script_tag);
					}

					var infoWindowContent =
					'<div class="gMap-iw"><a href="http://www.lemonlion.sk/" target="_blank" title="LemonLion.sk"> <span style="font-weight: 400; font-size: 15px; letter-spacing: -0.7px;">Lemon</span><br/><span style="letter-spacing: 0.5px;font-weight: 600; font-size: 22px;">Lion</span></a><br/><br/><a href="https://goo.gl/EcA78O" target="_blank" title="Find route">Púchov<br/>Slovakia</a></div>';

					if ( $(window).width() <= 980 ) {
							//map.setOptions({draggable: false, scrollwheel: false});

							var bigMarker = {
								url: "assets/images/marker-lt-980.png",
								size: new google.maps.Size(152, 152),
								origin: new google.maps.Point(0, 0),
								anchor: new google.maps.Point(76, 76),
								scaledSize: new google.maps.Size(152, 152)
							};

							var infowindow = new google.maps.InfoWindow({
								pixelOffset: new google.maps.Size(0,76),
								content: infoWindowContent
							});

					} else {
							map.setOptions({draggable: true, scrollwheel: false});

							var bigMarker = {
								url: "assets/images/marker.png",
								size: new google.maps.Size(306, 306),
								origin: new google.maps.Point(0, 0),
								anchor: new google.maps.Point(152, 152),
								scaledSize: new google.maps.Size(306, 306)
							};

							var infowindow = new google.maps.InfoWindow({
								pixelOffset: new google.maps.Size(0,152),
								content: infoWindowContent
							});
					}

					var marker = new google.maps.Marker({
						position: pos,
						map: map,
						icon: bigMarker,
						optimized: false
					});

					function iwFadeIn() {
				    infowindow.open(map, marker);
				    var iw_container = $(".gm-style-iw").parent();
				    iw_container.addClass('iw-invisible');
				    iw_container.addClass('iw-visible');
					}

					marker.addListener('click', function() {
						infowindow.open(map, marker);
						iwFadeIn();
						//map.setZoom(15);
	          map.setCenter(marker.getPosition());
					});

					marker.addListener('click',function() {
						$(this).hide();
					});

				});

      } // INIT MAP -


			// Map reveal +
				var gm = $('.gMap');

				var wScroll = $(this).scrollTop();

				function mapVisibility() {
					var gmTop = gm.offset().top;

					if (wScroll + $(window).height() >= gmTop + (gm.height() / 2)) {
						gm.addClass('is-visible');
					} else {
						gm.removeClass('is-visible');
					}
				}
				mapVisibility();

				$(window).scroll(function(){
					wScroll = $(this).scrollTop();
					mapVisibility();
				});

			// Map reveal -

</script>

<script async defer>
  var url = "https://maps.googleapis.com/maps/api/js?key=AIzaSyBlO5Zz7iqrDllqfpb-E7QeOHZz3sPoolw&callback=initMap";
	$.getScript(url);
</script>
