<?php
function wf_googlemap_func( $atts, $content = null ) {

$args = shortcode_atts( 
    array( 
	        "address" => '',
	        "hideinfowindows"=>'true',
	       "maptypecontrol"=>'false',
			"zoom"=> 7,
			"title"=>'Test',
			"showmark1"=>'',
			"mark1add"=>'',
			"mark1info"=>'',
			
			"showmark2"=>'',
			"mark2add"=>'',
			"mark2info"=>'',

			"showmark3"=>'',
			"mark3add"=>'',
			"mark3info"=>'',

			"showmark4"=>'',
			"mark4add"=>'',
			"mark4info"=>'',
			
			"showmark5"=>'',
			"mark5add"=>'',
			"mark5info"=>'',

			"showmark6"=>'',
			"mark6add"=>'',
			"mark6info"=>'',

			"showmark7"=>'',
			"mark7add"=>'',
			"mark7info"=>'',

			"showmark8"=>'',
			"mark8add"=>'',
			"mark8info"=>'',

			"showmark9"=>'',
			"mark9add"=>'',
			"mark9info"=>'',

			"showmark10"=>'',
			"mark10add"=>'',
			"mark10info"=>'',


			"showmark11"=>'',
			"mark11add"=>'',
			"mark11info"=>'',

			"showmark12"=>'',
			"mark12add"=>'',
			"mark12info"=>'',

			"showmark13"=>'',
			"mark13add"=>'',
			"mark13info"=>'',

			"showmark14"=>'',
			"mark14add"=>'',
			"mark14info"=>'',

			"showmark15"=>'',
			"mark15add"=>'',
			"mark15info"=>'',


			"zoomcontrol"=>"false",
			"infowindowstext"=>'',
			"markeraddress"=>'',
			"streetviewcontrol"=>"false",
			"disabledoubleclickzoom"=>"true",
			"scalecontrol"=>"false",
			"draggable"=>"false",
			"scrollwheel"=>"false",
			"height"=>"600px",
			"width"=>"100%",
	    ), 
	    $atts
	);
$content = wpb_js_remove_wpautop( $content, true ); // fix unclosed/unwanted paragraph tags in $content

$id = "map_".uniqid();

$address = $args['address'];
$hideinfo = $args['hideinfowindows'];
$mark1add = $args['mark1add'];

$showmark1 = $args['showmark1'];
$mark1info = $args['mark1info'];

$showmark2 = $args['showmark2'];
$mark2info = $args['mark2info'];
$mark2add = $args['mark2add'];



$showmark3 = $args['showmark3'];
$mark3info = $args['mark3info'];
$mark3add = $args['mark3add'];

$showmark4 = $args['showmark4'];
$mark4info = $args['mark4info'];
$mark4add = $args['mark4add'];


$showmark5 = $args['showmark5'];
$mark5info = $args['mark5info'];
$mark5add = $args['mark5add'];



$showmark6 = $args['showmark6'];
$mark6info = $args['mark6info'];
$mark6add = $args['mark6add'];

$showmark7 = $args['showmark7'];
$mark7info = $args['mark7info'];
$mark7add = $args['mark7add'];


$showmark8 = $args['showmark8'];
$mark8info = $args['mark8info'];
$mark8add = $args['mark8add'];


$showmark9 = $args['showmark9'];
$mark9info = $args['mark9info'];
$mark9add = $args['mark9add'];

$showmark10 = $args['showmark10'];
$mark10info = $args['mark10info'];
$mark10add = $args['mark10add'];


$showmark11 = $args['showmark11'];
$mark11info = $args['mark11info'];
$mark11add = $args['mark11add'];

$showmark12 = $args['showmark12'];
$mark12info = $args['mark12info'];
$mark12add = $args['mark12add'];


$showmark13 = $args['showmark13'];
$mark13info = $args['mark13info'];
$mark13add = $args['mark13add'];

$showmark14 = $args['showmark14'];
$mark14info = $args['mark14info'];
$mark14add = $args['mark14add'];


$showmark15 = $args['showmark15'];
$mark15info = $args['mark15info'];
$mark15add = $args['mark15add'];


$output ='';
$output .= "<div id='".$id."' style='background: #58B;display: block;width: ".$args['width']."; height: ".$args['height']."'></div>";

$output .= "<script type='text/javascript'>
		jQuery(document).ready(function($) {
			var map_id = '".$id."';
	$('#".$id."').gMap({
	address: \"".$address."\",
	zoom: ".$args['zoom'].",
	controls: {
	mapTypeControl: ".$args['maptypecontrol'].",
	zoomControl:  ".$args['zoomcontrol'].",
	streetViewControl:  ".$args['streetviewcontrol'].",
	disableDoubleClickZoom: ".$args['disabledoubleclickzoom'].",
	scaleControl: ".$args['scalecontrol'].",
	},
	
	scrollwheel: ".$args['scrollwheel'].",
	draggable: ".$args['draggable'].",
	markers:[
		{
			address: \"".$address."\",
			html: '".$args['infowindowstext']."'
		},";
		if ($showmark1 === 'true') {
			
		
		$output.="{
			address: \"".$mark1add."\",
			html: '".$mark1info."',
		},";
		}
if ($showmark2 === 'true') {
	$output.="{
			address: \"".$mark2add."\",
			html: '".$mark2info."'
		},";
	}

if ($showmark3 === 'true') {
	$output.="{
			address: \" ".$mark3add." \",
			html: '".$mark3info."'
		},";
	}


if ($showmark4 === 'true') {
	$output.="{
			address: \" ".$mark4add." \",
			html: '".$mark4info."'
		},";
	}

if ($showmark5 === 'true') {
	$output.="{
			address: \" ".$mark5add." \",
			html: '".$mark5info."'
		},";
	}


if ($showmark6 === 'true') {
	$output.="{
			address: \" ".$mark6add." \",
			html: '".$mark6info."'
		},";
	}


if ($showmark7 === 'true') {
	$output.="{
			address: \" ".$mark7add." \",
			html: '".$mark7info."'
		},";
	}


if ($showmark8 === 'true') {
	$output.="{
			address: \" ".$mark8add." \",
			html: '".$mark8info."'
		},";
	}

if ($showmark9 === 'true') {
	$output.="{
			address: \" ".$mark9add." \",
			html: '".$mark9info."'
		},";
	}

if ($showmark10 === 'true') {
	$output.="{
			address: \" ".$mark10add." \",
			html: '".$mark10info."'
		},";
	}

if ($showmark11 === 'true') {
	$output.="{
			address: \" ".$mark11add." \",
			html: '".$mark11info."'
		},";
	}


if ($showmark12 === 'true') {
	$output.="{
			address: \" ".$mark12add." \",
			html: '".$mark12info."'
		},";
	}

if ($showmark13 === 'true') {
	$output.="{
			address: \" ".$mark13add." \",
			html: '".$mark13info."'
		},";
	}

if ($showmark14 === 'true') {
	$output.="{
			address: \" ".$mark14add." \",
			html: '".$mark14info."'
		},";
	}


if ($showmark15 === 'true') {
	$output.="{
			address: \" ".$mark15add." \",
			html: '".$mark15info."'
		}";
	}

	$output.="]
});";
		
$output .= "});</script>";

return $output;
}
add_shortcode( 'wf_google_maps', 'wf_googlemap_func' );
?>