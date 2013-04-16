<script>
/* <![CDATA[ */
function setMapAddress(address)
{
	var geocoder = new google.maps.Geocoder();

	geocoder.geocode( { address : address }, function( results, status ) {
		if( status == google.maps.GeocoderStatus.OK ) {
			var latlng = results[0].geometry.location;
			var options = {
				zoom: 15,
				center: latlng,
				mapTypeId: google.maps.MapTypeId.ROADMAP, 
				streetViewControl: true
			};

			var mymap = new google.maps.Map( document.getElementById( 'map' ), options );
			
			var marker = new google.maps.Marker({
            map: mymap, 
            position: results[0].geometry.location
        });
			
		}
	} );
}

setMapAddress( "<?php echo $mapaddress ?>" );

/* ]]> */
</script>

<script type="text/javascript">
	var map;
	
  function setLatLngByAddress(mymap, address) {

    var geocoder = new google.maps.Geocoder();
    geocoder.geocode( { 'address': address}, function(results, status) {
			if (status == google.maps.GeocoderStatus.OK) {
			  mymap.latlngbyaddress = results[0].geometry.location;
		    mymap.setCenter(map.latlngbyaddress);
		    var marker = new google.maps.Marker({
		      map: mymap,
		      position: mymap.latlngbyaddress
		    });
		    if (mymap.streetView != undefined) mymap.streetView.setPosition(mymap.latlngbyaddress);
      } else {
        alert("Geocode was not successful for the following reason: " + status);
      }
    });
  }

  function initialize() {

    var myOptions = {
      zoom: 14,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      streetViewControl: true
    }
		map = new google.maps.Map(document.getElementById('streetview'), myOptions);
    setLatLngByAddress(map, "<?php echo $mapaddress; ?>");
    var panoramaOptions = {
      position: map.latlngbyaddress,
      pov: {
        heading: 0,
        pitch: 0,
        zoom: 1
      },
      visible: true
    };
    var panorama = new  google.maps.StreetViewPanorama(document.getElementById("streetview"), panoramaOptions);
    map.setStreetView(panorama);
    panorama.setVisible(true);
}
  

</script>