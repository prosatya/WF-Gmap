<?php
function wf_googlemap_func( $atts, $content = null ) {
	$args = shortcode_atts( 
    array(  "lat"   => '-12.043333',
	        "lng"   => '-77.028333',
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
		<script>
			jQuery(document).ready(function($) {

				var map = new GMaps({
			    div: "#map",
			    lat: <?php echo $args['lat']; ?>,
			    lng: <?php echo $args['lng']; ?>,
			    hideInfoWindows: <?php echo $args['hideinfowindows']; ?>,
				navigationControl: <?php echo $args['navigationcontrol']; ?>,
				mapTypeControl: <?php echo $args['maptypecontrol']; ?>,
				zoom: <?php echo $args['zoom']; ?>,
				//title:<?php echo $args['title']; ?>,
				zoomControl: <?php echo $args['zoomcontrol']; ?>,
				streetViewControl: <?php echo $args['streetviewcontrol']; ?>,
				disableDoubleClickZoom: <?php echo $args['disabledoubleclickzoom']; ?>,
				scaleControl: <?php echo $args['scalecontrol']; ?>,
				draggable: <?php echo $args['draggable']; ?>,
				scrollwheel: <?php echo $args['scrollwheel']; ?>,
				});
				
			});
		</script>
<?php
	$wp_googlemap = '<div id="map"></div>';
    
	return $wp_googlemap;
}

add_shortcode( 'wf_google_maps', 'wf_googlemap_func' );
?>


