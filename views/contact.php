<script type="text/javascript">
	$(function(){
		document.title = 'About & Contact' + ' ' + defaultTitle;
	});
</script>


<br><br><br><br><br><br><br><br><br><br>

<div id="map" class="gMap"></div>

<script>
      function initMap() {
        var pos = {lat: 49.118634, lng: 18.322827};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: pos,
					mapTypeControl: false,
					zoomControlOptions: {
              position: google.maps.ControlPosition.LEFT_CENTER
          },
					streetViewControlOptions: {
              position: google.maps.ControlPosition.LEFT_BOTTOM
          },
					styles: [{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative.country","elementType":"geometry.stroke","stylers":[{"weight":"1.0"},{"color":"#a1a1a1"}]},{"featureType":"administrative.country","elementType":"labels.text.fill","stylers":[{"color":"#858585"}]},{"featureType":"administrative.province","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"administrative.locality","elementType":"all","stylers":[{"hue":"#2c2e33"},{"saturation":7},{"lightness":19},{"visibility":"on"}]},{"featureType":"administrative.locality","elementType":"labels.text.fill","stylers":[{"color":"#898989"}]},{"featureType":"administrative.neighborhood","elementType":"labels.text.fill","stylers":[{"color":"#e6e6e6"}]},{"featureType":"landscape","elementType":"all","stylers":[{"hue":"#ff0000"},{"saturation":-100},{"lightness":100},{"visibility":"simplified"}]},{"featureType":"poi","elementType":"all","stylers":[{"hue":"#ff0000"},{"saturation":-100},{"lightness":100},{"visibility":"off"}]},{"featureType":"road","elementType":"geometry","stylers":[{"saturation":"-100"},{"lightness":31},{"visibility":"simplified"},{"color":"#efefef"}]},{"featureType":"road","elementType":"labels","stylers":[{"hue":"#bbc0c4"},{"saturation":-93},{"lightness":31},{"visibility":"on"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#efefef"}]},{"featureType":"road.arterial","elementType":"labels","stylers":[{"hue":"#bbc0c4"},{"saturation":-93},{"lightness":-2},{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"saturation":-90},{"lightness":-8},{"visibility":"simplified"},{"color":"#efefef"}]},{"featureType":"road.local","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"road.local","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"hue":"#e9ebed"},{"saturation":10},{"lightness":69},{"visibility":"on"}]},{"featureType":"water","elementType":"all","stylers":[{"saturation":-78},{"lightness":67},{"visibility":"simplified"},{"color":"#f4f4f4"}]}]
        });

				var bigMarker = {
					url: "assets/images/marker.png",
					size: new google.maps.Size(305, 305),
					origin: new google.maps.Point(0, 0),
					anchor: new google.maps.Point(152, 152),
					scaledSize: new google.maps.Size(305, 305)
				};

        var marker = new google.maps.Marker({
          position: pos,
          map: map,
					icon: bigMarker
        });

				var infowindow = new google.maps.InfoWindow({
					pixelOffset: new google.maps.Size(0,152),
					content:
					'My current location <br/> Púchov <br/> Slovakia',
				});

				marker.addListener('click', function() {
					infowindow.open(map, marker);
				});

				// Mobile tweaks
				$(document).ready(function(){

					if ( $(window).width() <= 980 ) {
							map.setOptions({draggable: false, scrollwheel: false});
					} else {
							map.setOptions({draggable: true, scrollwheel: false});
					}
				});

      } // INIT MAP -

</script>

<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBlO5Zz7iqrDllqfpb-E7QeOHZz3sPoolw&callback=initMap">
</script>



<script>
  var url = "assets/js/views.js";
  $.getScript(url);
</script>
