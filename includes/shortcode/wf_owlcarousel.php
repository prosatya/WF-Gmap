<?php
function getSliderWidth( $size ) {
		global $_wp_additional_image_sizes;
		$width = '100%';
		if ( in_array( $size, get_intermediate_image_sizes() ) ) {
			if ( in_array( $size, array( 'thumbnail', 'medium', 'large' ) ) ) {
				$width = get_option( $size . '_size_w' ) . 'px';
			} else {
				if ( isset( $_wp_additional_image_sizes ) && isset( $_wp_additional_image_sizes[ $size ] ) ) {
					$width = $_wp_additional_image_sizes[ $size ]['width'] . 'px';
				}
			}
		} else {
			preg_match_all( '/\d+/', $size, $matches );
			if ( count( $matches[0] ) > 1 ) {
				$width = $matches[0][0] . 'px';
			}
		}

		return $width;
	}
function wf_owlcarousel_func( $atts, $content = null ) {

$args = shortcode_atts( 
    array( 
			"items"=> 3,
			"loop"=>'true',
			"navpos"=>'top',
			"images"=>'images',
			"size"=>'full',
			"singleitem1" => 'true',
			"autoplay1" => 'true',
			"stoponhover1" => 'false',
			"navigation" => 'true',
			"autoheight1" => 'false',
			"mousedrag1" => 'true',
			"touchDrag" =>'true',
			"addclassactive1" => 'true',
			"pagination" => 'false',
	    ), 
	    $atts
	);
$content = wpb_js_remove_wpautop( $content, true ); // fix unclosed/unwanted paragraph tags in $content

$id = "wf_owl_carousel_".uniqid();

$items = $args['items'];
$images = $args['images'];
$images = explode( ',', $images );
$size = $args['size'];
$items = $args['items'];
$navpos = $args['navpos'];
$singleitem = $args['singleitem1'];
$autoplay = $args['autoplay1'];
$stoponhover = $args['stoponhover1'];
$navigation = $args['navigation'];
$autoHeight = $args['autoheight1'];
$mouseDrag = $args['mousedrag1'];
$touchDrag = $args['touchDrag'];
$pagination = $args['pagination'];
$loop = $args['loop'];
$addClassActive = $args['addclassactive1'];
wp_enqueue_script( "js.owl.carousel" , plugin_dir_url( __FILE__ ) . 'js/owl.carousel.js', array( 'jquery' ), false );
wp_enqueue_script('js.owl.carousel',array( 'jquery' ),false);

$output ='';
$output.='<div class="wf_owl_carousel owl-carousel owl-theme" id="'.$id .'">';

foreach ( $images as $attach_id ){

if ( $attach_id > 0 ) {
	$post_thumbnail = wpb_getImageBySize( array(
	'attach_id' => $attach_id,
	'thumb_size' => $size
) );
} else {
	$post_thumbnail = array();
	$post_thumbnail['thumbnail'] = '<img src="' .plugin_dir_path( dirname( __FILE__ ) ) . '/images/wf_modal.jpg" />';
	$post_thumbnail['p_img_large'][0] = plugin_dir_path( dirname( __FILE__ ) )." /images/wf_modal.jpg";

}
 	$thumbnail = $post_thumbnail['thumbnail'];
  $output.='<div class="item">'.$thumbnail.'</div>';
 }
$output.= '</div>' ;

$output .= '<script type="text/javascript">jQuery(document).ready(function($) {';
	$output.=" jQuery('#".$id."').owlCarousel({";
		if ($singleitem === 'false') {  
   $output.="items : ".$items.",";
}
    if ($autoplay === 'true') {

   $output.="autoPlay : 2500,";
       } 
  
    $output.='
	loop:'.$loop.',
	autoPlay : '.$autoplay.',
	singleItem : '.$singleitem.',
	//margin: 6,
	stoponhover : '.$stoponhover.',
	autoHeight: '.$autoHeight.',
	mouseDrag: '.$mouseDrag.',
	touchDrag: '.$touchDrag.',
	addClassActive: '.$addClassActive.',
	navigation: '.$navigation.',
	navigationText :[ "<" , ">"],
	pagination: '.$pagination.',';

	
$output.=" });";
 
$output .= "});</script>";
if ($singleitem === 'true') {
	$output.="<style>
    #".$id." .item img{
        display: block !important;
        width: 100% !important;
        height: auto !important;
    }
    .attachment-full {
    height: auto !important;
    display: block !important;
    width: 100% !important;
}
#".$id." .item{margin: 0px !important;}
</style>";

}
if ($navpos === 'center' ){  
   $output.="<style> #".$id." .owl-buttons {left: 0;
    position: absolute;
    top: 35% !important;
    width: 100% !important;
    opacity: 0.6;
}#".$id." .item{margin: 3px;}
 #".$id." .owl-wrapper {
    margin-top: 0px !important;
}
 #".$id." .owl-prev {
    left: 0 !important;
    position: absolute;
}
 #".$id." .owl-next {
    position: absolute;
    right: 0!important;
}
 #".$id." .owl-prev, #".$id." .owl-next {
    border: medium none !important;
    border-radius: 0 !important;
    color: white;
    font-size: 1.2em !important;
    margin: 0 auto !important;
    text-align: center;
    background: blue none repeat scroll 0 0 !important;
}
</style>";
}else{
$output.='<style>#'.$id.' .item{margin: 3px;} #'.$id.' .owl-prev,#'.$id.' .owl-next {
    border: medium none !important;
    border-radius: 0 !important;
    color: white;
    font-size: 1.2em !important;
    margin: 0 auto !important;
    text-align: center;
    background: blue none repeat scroll 0 0 !important;
}#'.$id.' .owl-buttons {
    position: absolute;
    right: 0;
    top: 0;
}#'.$id.' .owl-wrapper {
    margin-top: 40px;
}

</style>';
}
return $output;
}
add_shortcode( 'wf_owl_carousel', 'wf_owlcarousel_func' );
?>