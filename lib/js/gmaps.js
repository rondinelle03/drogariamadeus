function initialize()
{
	var markers = [
	    { lat: -5.647718, lng:-35.458117, name: "oi", icon: "imgs/ico-pin.png", content: "<h3>Arena oooo</h3>  Localizado na cidade de Ceará-Mirim, no Rio Grande do Norte, a 28 Km de Natal" },
		{ lat:-5.774661, lng:-35.256427, name: "Pruoooodente / Candooooelária", icon: "ico-pin.png", content: "<h3>Prooooudente / Candelária</h3> Rua Barão de Serra Branca, 1867<br>Candelária - Natal/RN - 59.065-550<br> 0xx(84) 3231-2858" }
	];

	var mapOptions = {
			zoom: 9,
			center: new google.maps.LatLng(-5.40258, -36.954107),
			mapTypeId: google.maps.MapTypeId.ROADMAP
	}

	var map = new google.maps.Map(
			document.getElementById('map-canvas'),
			mapOptions
	);

	for (index in markers) addMarker(markers[index]);
	function addMarker(data) {
		var marker = new google.maps.Marker({
			position:	new google.maps.LatLng(data.lat, data.lng),
			map:		map,
			title:		data.name,
			icon:		data.icon
		});

		// Create the infowindow with two DIV placeholders
		var content = document.createElement("DIV");
		var infowindow = new google.maps.InfoWindow({
			content: data.content
		});

		// Open the infowindow on marker click
		google.maps.event.addListener(marker, "click", function() {
			infowindow.open(map, marker);
		});
	}

  	var bounds = new google.maps.LatLngBounds();
    for (index in markers) {
      var data = markers[index];
      bounds.extend(new google.maps.LatLng(data.lat, data.lng));
    }
    map.fitBounds(bounds);

	google.maps.event.addListener(map, 'center_changed', function() {
    	window.setTimeout(function() {
        	map.panTo(map.getCenter());
        }, 3000);
    });

//  var image = 'carro.png';
//  var myLatLng = new google.maps.LatLng(-5.807634, -35.234699);
//  var beachMarker = new google.maps.Marker({
//      position: myLatLng,
//      map: map,
//      icon: image
//  });
//  
//  var image = 'carro2.png';
//  var myLatLng = new google.maps.LatLng(-5.825544, -35.211096);  
//  var beachMarker = new google.maps.Marker({
//      position: myLatLng,
//      map: map,
//      icon: image
//  });
  
  
  
}

google.maps.event.addDomListener(window, 'load', initialize);

