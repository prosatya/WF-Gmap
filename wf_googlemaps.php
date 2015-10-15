<?php
function wf_googlemap_func( $atts, $content = null ) {
	$args = shortcode_atts( 
    array(  //"lat"   => '-12.043333',
	        //"lng"   => '-77.028333',
    	     "address" => 'india',
	        "hideinfowindows"=>'true',
	        "navigationcontrol"=>'false',
	        "maptypecontrol"=>'false',
			"zoom"=>13,
			"title"=>'Test',
			"zoomcontrol"=>"false",
			"streetviewcontrol"=>"false",
			"disabledoubleclickzoom"=>"true",
			"scalecontrol"=>"false",
			"draggable"=>"false",
			"scrollwheel"=>"false",
			"height"=>"200px",
			"width"=>"200px",
	    ), 
	    $atts
	);
	
	$content = wpb_js_remove_wpautop( $content, true ); // fix unclosed/unwanted paragraph tags in $content



$address = $args['address'];
$formattedAddr = str_replace(' ','+',$address);
$geocodeFromAddr = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='.$formattedAddr.'&sensor=true_or_false'); 
        $output1 = json_decode($geocodeFromAddr);
        $latitude  = $output1->results[0]->geometry->location->lat; 
        $longitude = $output1->results[0]->geometry->location->lng;
?>
		<style type="text/css">
			#map {
			    display: block;
			    width: <?php echo $args['width']; ?>;
			    height: <?php echo $args['height']; ?>;
			}

			#map {
			    background: #58B;
			}
		</style>
 	
<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script type="text/javascript">
jQuery(document).ready(function () {
// Define the latitude and longitude positions
var latitude = parseFloat("<?php echo $latitude; ?>"); // Latitude get from above variable
var longitude = parseFloat("<?php echo $longitude; ?>"); // Longitude from same
var latlngPos = new google.maps.LatLng(latitude, longitude);
// Set up options for the Google map
var myOptions = {
zoom: 10,
center: latlngPos,
mapTypeId: google.maps.MapTypeId.ROADMAP,
zoomControlOptions: true,
zoomControlOptions: {
style: google.maps.ZoomControlStyle.LARGE
}
};
// Define the map
map = new google.maps.Map(document.getElementById("map"), myOptions);
// Add the marker
var marker = new google.maps.Marker({
position: latlngPos,
map: map,
title: "test"
});
});
</script>
<?php
	$wp_googlemap = '<div id="map"></div>';
    
	return $wp_googlemap;
}

add_shortcode( 'wf_google_maps', 'wf_googlemap_func' );
?>


