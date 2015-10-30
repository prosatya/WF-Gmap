<?php
function wf_testimonial_func( $atts, $content = null ) {
$args = shortcode_atts( 
    array( 
			"tesloop"=>'true',
			"tesnavpos"=>'center',
			"tessize"=>'thumbnail',
			"tessingleitem1" => 'true',
			"tesautoplay1" => 'true',
			"tesstoponhover1" => 'false',
			"tesnavigation" => 'true',
			"tesautoheight1" => 'false',
			"tesmousedrag1" => 'true',
			"testouchDrag" =>'true',
			"tesaddclassactive1" => 'true',
			"tespagination" => 'false',
	    	'img_id'=>'img_id',
	    	'auth_name'=>'auth_name',
	    	'testi_content' =>'testi_content',
	    	'img_id2'=>'img_id2',
	    	'auth_name2'=>'auth_name2',
	    	'testi_content2' =>'testi_content2',
	    	'showtesti2' => 'showtesti2',
	    	'img_id3'=>'img_id3',
	    	'auth_name3'=>'auth_name3',
	    	'testi_content3' =>'testi_content3',
	    	'showtesti3' => 'showtesti3',
	    	'img_id4'=>'img_id4',
	    	'auth_name4'=>'auth_name4',
	    	'testi_content4' =>'testi_content4',
	    	'showtesti4' => 'showtesti4',
	    	'img_id5'=>'img_id5',
	    	'auth_name5'=>'auth_name5',
	    	'testi_content5' =>'testi_content5',
	    	'showtesti5' => 'showtesti5',
	    	'img_id6'=>'img_id6',
	    	'auth_name6'=>'auth_name6',
	    	'testi_content6' =>'testi_content6',
	    	'showtesti6' => 'showtesti6',
	    	'img_id7'=>'img_id7',
	    	'auth_name7'=>'auth_name7',
	    	'testi_content7' =>'testi_content7',
	    	'showtesti7' => 'showtesti7',
	    	'img_id8'=>'img_id8',
	    	'auth_name8'=>'auth_name8',
	    	'testi_content8' =>'testi_content8',
	    	'showtesti8' => 'showtesti8',
	    	'img_id9'=>'img_id9',
	    	'auth_name9'=>'auth_name9',
	    	'testi_content9' =>'testi_content9',
	    	'showtesti9' => 'showtesti9',
	    	'img_id10'=>'img_id10',
	    	'auth_name10'=>'auth_name10',
	    	'testi_content10' =>'testi_content10',
	    	'showtesti10' => 'showtesti10',
 	      ), 
	    $atts
	);

$content = wpb_js_remove_wpautop( $content, true ); // fix unclosed/unwanted paragraph tags in $content

$id1 = "wf_testimonial_".uniqid();
/* Testimonial Slider Setting   */
$size1 = $args['tessize'];
$navpos1 = $args['tesnavpos'];
$singleitem1 = $args['tessingleitem1'];
$autoplay1 = $args['tesautoplay1'];
$stoponhover1 = $args['tesstoponhover1'];
$navigation1 = $args['tesnavigation'];
$autoHeight1 = $args['tesautoheight1'];
$mouseDrag1 = $args['tesmousedrag1'];
$touchDrag1 = $args['testouchDrag'];
$pagination1 = $args['tespagination'];
$loop1 = $args['tesloop'];
$addClassActive1 = $args['tesaddclassactive1'];


/* Testimonial items  */
$auth_name =$args["auth_name"];
$testi_content =$args["testi_content"];

$auth_name2 =$args["auth_name2"];
$testi_content2 =$args["testi_content2"];

$auth_name3 =$args["auth_name3"];
$testi_content3 =$args["testi_content3"];

$auth_name4 =$args["auth_name4"];
$testi_content4 =$args["testi_content4"];


$auth_name5 =$args["auth_name5"];
$testi_content5 =$args["testi_content5"];

$auth_name6 =$args["auth_name6"];
$testi_content6 =$args["testi_content6"];

$auth_name7 =$args["auth_name7"];
$testi_content7 =$args["testi_content7"];


$auth_name8 =$args["auth_name8"];
$testi_content8 =$args["testi_content8"];

$auth_name9 =$args["auth_name9"];
$testi_content9 =$args["testi_content9"];

$auth_name10 =$args["auth_name10"];
$testi_content10 =$args["testi_content10"];

$img = wp_get_attachment_image_src($args["img_id"], "thumbnail");
$imgsrc = $img[0];

$img2 = wp_get_attachment_image_src($args["img_id2"], "thumbnail");
$imgsrc2 = $img2[0];

$img3 = wp_get_attachment_image_src($args["img_id3"], "thumbnail");
$imgsrc3 = $img3[0];

$img4 = wp_get_attachment_image_src($args["img_id4"], "thumbnail");
$imgsrc4 = $img4[0];

$img5 = wp_get_attachment_image_src($args["img_id5"], "thumbnail");
$imgsrc5 = $img5[0];

$img6 = wp_get_attachment_image_src($args["img_id6"], "thumbnail");
$imgsrc6 = $img6[0];

$img7 = wp_get_attachment_image_src($args["img_id7"], "thumbnail");
$imgsrc7 = $img7[0];

$img8 = wp_get_attachment_image_src($args["img_id8"], "thumbnail");
$imgsrc8 = $img8[0];

$img9 = wp_get_attachment_image_src($args["img_id9"], "thumbnail");
$imgsrc9 = $img9[0];

$img10 = wp_get_attachment_image_src($args["img_id10"], "thumbnail");
$imgsrc10 = $img10[0];




$showtesti2 = $args["showtesti2"];
$showtesti3 = $args["showtesti3"];
$showtesti4 = $args["showtesti4"];
$showtesti5 = $args["showtesti5"];
$showtesti6 = $args["showtesti6"];
$showtesti7 = $args["showtesti7"];
$showtesti8 = $args["showtesti8"];
$showtesti9 = $args["showtesti9"];
$showtesti10 = $args["showtesti10"];

/* Testimonial scripts and stylesheet */
wp_register_style( 'wf-testimonial-style', plugin_dir_url( __FILE__ ) . 'css/testimonial.css' );
wp_enqueue_style( 'wf-testimonial-style' );

$handle = 'js.owl.carousel';
   $list = 'enqueued';
     if (wp_script_is( $handle, $list )) {
       return;
     } else {
    wp_register_script( "js.owl.carousel" , plugin_dir_url( __FILE__ ) . 'js/owl.carousel.js', array( 'jquery' ), false );
    wp_enqueue_script('js.owl.carousel',array( 'jquery' ),false);
    
     }
$output ='';
$output.='<div class="wf_testimonial owl-carousel owl-theme" id="'.$id1 .'">';
$output.='<div class="item"><p class="testimage"><img class="authimage" src="'.$imgsrc.'"/></p><p class="testibox"><span class="testicontent">'.$testi_content.'</span><br><span class="authname">'.$auth_name.'</span></p></div>';
if ($showtesti2 === 'true'){
$output.='<div class="item"><p class="testimage"><img class="authimage" src="'.$imgsrc2.'"/></p><p class="testibox"><span class="testicontent">'.$testi_content2.'</span><br><span class="authname">'.$auth_name2.'</span></p></div>';
}
if ($showtesti3 === 'true'){
$output.='<div class="item"><p class="testimage"><img class="authimage" src="'.$imgsrc3.'"/></p><p class="testibox"><span class="testicontent">'.$testi_content3.'</span><br><span class="authname">'.$auth_name3.'</span></p></div>';
}
if ($showtesti4 === 'true'){
$output.='<div class="item"><p class="testimage"><img class="authimage" src="'.$imgsrc4.'"/></p><p class="testibox"><span class="testicontent">'.$testi_content4.'</span><br><span class="authname">'.$auth_name4.'</span></p></div>';
}
if ($showtesti5 === 'true'){
$output.='<div class="item"><p class="testimage"><img class="authimage" src="'.$imgsrc5.'"/></p><p class="testibox"><span class="testicontent">'.$testi_content5.'</span><br><span class="authname">'.$auth_name5.'</span></p></div>';
}
if ($showtesti6 === 'true'){
$output.='<div class="item"><p class="testimage"><img class="authimage" src="'.$imgsrc6.'"/></p><p class="testibox"><span class="testicontent">'.$testi_content6.'</span><br><span class="authname">'.$auth_name4.'</span></p></div>';
}
if ($showtesti7 === 'true'){
$output.='<div class="item"><p class="testimage"><img class="authimage" src="'.$imgsrc7.'"/></p><p class="testibox"><span class="testicontent">'.$testi_content7.'</span><br><span class="authname">'.$auth_name7.'</span></p></div>';
}
if ($showtesti8 === 'true'){
$output.='<div class="item"><p class="testimage"><img class="authimage" src="'.$imgsrc8.'"/></p><p class="testibox"><span class="testicontent">'.$testi_content8.'</span><br><span class="authname">'.$auth_name8.'</span></p></div>';
}
if ($showtesti9 === 'true'){
$output.='<div class="item"><p class="testimage"><img class="authimage" src="'.$imgsrc9.'"/></p><p class="testibox"><span class="testicontent">'.$testi_content9.'</span><br><span class="authname">'.$auth_name9.'</span></p></div>';
}
if ($showtesti10 === 'true'){
$output.='<div class="item"><p class="testimage"><img class="authimage" src="'.$imgsrc10.'"/></p><p class="testibox"><span class="testicontent">'.$testi_content10.'</span><br><span class="authname" '.$auth_name10.'</span></p></div>';
}

$output.= '</div>' ;

$output .= '<script type="text/javascript">jQuery(document).ready(function($) {';
	$output.=" jQuery('#".$id1."').owlCarousel({";
		if ($singleitem1 === 'false') {  
  // $output.="items : ".$items.",";
}
    if ($autoplay1 === 'true') {

   $output.="autoPlay : 2500,";
       } 
  
    $output.='
	loop:'.$loop1.',
	autoPlay : '.$autoplay1.',
	singleItem : '.$singleitem1.',
	stoponhover : '.$stoponhover1.',
	autoHeight: '.$autoHeight1.',
	mouseDrag: '.$mouseDrag1.',
	touchDrag: '.$touchDrag1.',
	addClassActive: '.$addClassActive1.',
	navigation: '.$navigation1.',
	navigationText :[ "<" , ">"],
	pagination: '.$pagination1.',';

	
$output.=" });";

$output .= "});</script>";
if ($singleitem1 === 'true') {
	$output.="<style>
    #".$id1." .item img{
        width: 150px !important;
        height: 150px !important;
        border-radius:50%;
    }
#".$id1." .item{margin: 0px !important;}

#".$id1." .item {
    background: #5bb69a none repeat scroll 0 0;
    height: auto !important;
    max-height: 300px !important;
    min-height: 250px;
    padding: 40px 20px 60px;
   }
#".$id1." .item p {
    display: table-cell !important;
    padding: 15px;
    text-align: left;
    vertical-align: middle;
}

#".$id1." .item .testimage {
    float: left;
    height: auto;
    max-width: 200px;
    width: auto;
}
#".$id1." .testibox {
    display: inline-block;
    height: auto !important;
    max-width: 100% !important;
    width: 100% !important;
    color: white;
   font-family: tahoma;
}
.authname {
#".$id1."    padding-top: 44px !important;
    text-transform: capitalize;
}
    </style>";

}
if ($navpos1 === 'center' ){  
   $output.="<style>#".$id1." .owl-buttons {left: 0;
    position: absolute;
    top: 35% !important;
    width: 100% !important;
    opacity: 0.6;
}#".$id1." .item{margin: 3px;}
#".$id1." .owl-wrapper {
    margin-top: 0px !important;
}
#".$id1." .owl-prev {
    left: 0 !important;
    position: absolute;
}
#".$id1." .owl-next {
    position: absolute;
    right: 0!important;
}
#".$id1." .owl-prev, .owl-next {
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
$output.='<style>#'.$id1.' .item{margin: 3px;}#'.$id1.' .owl-prev, #'.$id1.' .owl-next {
    border: medium none !important;
    border-radius: 0 !important;
    color: white;
    font-size: 1.2em !important;
    margin: 0 auto !important;
    text-align: center;
    background: blue none repeat scroll 0 0 !important;
}#'.$id1.' .owl-buttons {
    position: absolute;
    right: 0;
    top: 0;
}#'.$id1.' .owl-wrapper {
    margin-top: 40px;
}

</style>';
}
return $output;
}
add_shortcode( 'wf_testimonial', 'wf_testimonial_func' );
?>