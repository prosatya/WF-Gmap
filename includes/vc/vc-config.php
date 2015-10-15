<?php
    /**
 * @package     WEBIDIA Framework
 * @subpackage  project-name
 * @version     0.0.1
 * @author      Tom Bunn
 * @copyright   Copyright (c) 2015, Tom Bunn
 * @license     http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link        http://webidia.com
 **/

/*------------------------------------*\
	WEBIDIA Framework VC Extensions
\*------------------------------------*/

function wf_vc_setup() {
   
   // Declare Theme Integration
	vc_set_as_theme();

   // Templates Directory
   $dir = plugin_dir_path( dirname( __FILE__ ) . 'includes/vc/templates' );
   vc_set_shortcodes_templates_dir( $dir );
}

add_action( 'vc_before_init', 'wf_vc_setup' );


/*------------------------------------*\
   VC Extension Config
\*------------------------------------*/

function wf_vc_custom() {
	// Modal
	vc_map( array(
		"name"        => __( "WF - Modal Box", "webidia" ),
		"description" => __( 'Modal popup box' ),
		"icon"        => get_stylesheet_directory_uri() . "/inc/vc/icons/wf_modal.jpg",
		"base"        => "modal",
		"class"       => "",
		"category"    => __( "Content", "webidia"),
		"icon" => "vc_google_map",
		"params"      => array(
			array(
				"type"        => "textfield",
				"holder"      => "div",
				"class"       => "",
				"heading"     => __( "Modal ID", "webidia" ),
				"param_name"  => "modal_id",
				"value"       => __( "modal", "webidia" ),
				"description" => __( "Add the unique ID for the modal element" )
			),
			array(
				"type"        => "textfield",
				"heading"     => __( "Modal Title", "webidia" ),
				"param_name"  => "modal_title",
				"value"       => __( "", "webidia" ),
			),
			array(
				"type"        => "textarea_html",
				"holder"      => "div",
				"class"       => "",
				"heading"     => __( "Modal Content", "webidia" ),
				"param_name"  => "content",
				"value"       => __( "<p>I am test text block for modal.</p>", "webidia" ),
				"description" => __( "Enter your content for the modal element", "webidia" )
			),

			array(
				'type'        => 'dropdown',
				'heading'     => "Modal Type",
				'param_name'  => 'modal_type',
				'value'       => array( "Text", "Button" ),
				'description' => __( "", "webidia" ),
			),
			array(
				'type'       => 'dropdown',
				'heading'    => "Style",
				'param_name' => 'button_style',
				'value'      => array( "WF" ),
				'dependency' => array(
					'element' => 'modal_type',
					'value'   => array( 'Button' ),
				),
				'description' => __( "", "webidia" ),
			),
			array(
				"type"        => "textfield",
				"holder"      => "div",
				"class"       => "",
				"heading"     => __( "Message Text", "webidia" ),
				"param_name"  => "message_text",
				"value"       => __( "Default text", "webidia" ),
				"description" => __( "", "webidia" )
			),
			array(
				"type"        => "checkbox",
				"heading"     => __( "Show ok/cancel buttons?", "webidia" ),
				"param_name"  => "show_ok_cancel_buttons",
				"value"       =>  array( 'Yes' => 1),
				"std"         =>  1,
				"description" => __( "", "webidia" )
			),
			array(
				"type"        => "checkbox",
				"heading"     => __( "Close on outside click?", "webidia" ),
				"param_name"  => "close_on_outside_click",
				"value"       =>  array( 'Yes' => 1),
				"std"         =>  1,
				"description" => __( "", "webidia" )
			),
			array(
				"type"        => "checkbox",
				"heading"     => __( "Close on escape", "webidia" ),
				"param_name"  => "close_on_escape",
				"value"       =>  array( 'Yes' => 1),
				"std"         =>  1,
				"description" => __( "", "webidia" )
			),
			array(
				"type"        => "textfield",
				"heading"     => __( "Extra class", "webidia" ),
				"param_name"  => "extra_class",
				"value"       => __( "", "webidia" ),
			),
		)
	) );

   // Hero Slider
   vc_map( array(
      "name" => __( "WF - Hero Slider", "webidia" ),
      "description" => __(''),
      "icon" => get_stylesheet_directory_uri() . "/inc/vc/icons/wf_modal.jpg",
      "base" => "wf_hero_slider",
      "class" => "",
      "category" => __( "Content", "webidia"),
   ) );

   // Parallax Background Section
   vc_map( array(
      "name" => __( "WF - Parallax Section", "webidia" ),
      "description" => __(''),
      "icon" => get_stylesheet_directory_uri() . "/inc/vc/icons/wf_modal.jpg",
      "base" => "wf_parallax_background",
      "class" => "",
      "category" => __( "Content", "webidia"),
   ) );

    // Pricing Tables
   vc_map( array(
      "name" => __( "WF - Pricing Tables", "webidia" ),
      "description" => __(''),
      "icon" => get_stylesheet_directory_uri() . "/inc/vc/icons/wf_modal.jpg",
      "base" => "wf_pricing_table",
      "class" => "",
      "category" => __( "Content", "webidia"),
   ) );

    // Tooltip
	vc_map( array(
		"name" => __( "WF - Tooltip", "webidia" ),
		"description" => __(''),
		"icon" => get_stylesheet_directory_uri() . "/inc/vc/icons/wf_modal.jpg",
		"base" => "wf_tooltip",
		"class" => "",
		"category" => __( "Content", "webidia"),
		"params"      => array(
			array(
				"type"        => "textfield",
				"holder"      => "div",
				"class"       => "",
				"heading"     => __( "Message Text", "webidia" ),
				"param_name"  => "message_text",
				"value"       => __( "This div has a tooltip when you hover over it!", "webidia" ),
				"description" => __( "", "webidia" )
			),
			array(
				"type"        => "textarea_html",
				"holder"      => "div",
				"class"       => "",
				"heading"     => __( "Tooltip Content", "webidia" ),
				"param_name"  => "content",
				"value"       => __( "<p>I am test text block for tooltip.</p>", "webidia" ),
				"description" => __( "Enter your content for the tooltip", "webidia" )
			),
			array(
				'type'        => 'dropdown',
				'heading'     => "Animation",
				'param_name'  => 'tooltip_animation',
				'value'       => array( "fade", "grow", "swing", "slide", "fall" ),
				'description' => __( "", "webidia" ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => "Theme",
				'param_name'  => 'tooltip_theme',
				'value'       => array(
					"tooltipster-black",
					"tooltipster-red",
					"tooltipster-yellow",
					"tooltipster-green",
				),
				'description' => __( "", "webidia" ),
			),
		)
	) );

   // Overlay Box
   vc_map( array(
      "name" => __( "WF - Overlay Box", "webidia" ),
      "description" => __(''),
      "icon" => get_stylesheet_directory_uri() . "/inc/vc/icons/wf_modal.jpg",
      "base" => "wf_overlay_box",
      "class" => "",
      "category" => __( "Content", "webidia"),
   ) );

   // Google maps
   vc_map( array(
      "name" => __( "WF - Google Maps", "webidia" ),
      "description" => __(''),
      "icon" => get_stylesheet_directory_uri() . "/inc/vc/icons/wf_modal.jpg",
      "base" => "wf_google_maps",
      "class" => "",
      "category" => __( "Content", "webidia"),
      "params"      => array(
			// array(
			// 	"type"        => "textfield",
			// 	"holder"      => "div",
			// 	"heading"     => __( "Latitude", "webidia" ),
			// 	"param_name"  => "lat",
			// 	"value"       => "-12.043333",
			// 	"description" => __( "Enter Latitude ", "webidia" )
			// ),
			// array(
			// 	"type"        => "textfield",
			// 	"holder"      => "div",
			// 	"heading"     => __( "Longitude", "webidia" ),
			// 	"param_name"  => "lng",
			// 	"value"       => "-77.028333",
			// 	"description" => __( "Enter Longitude", "webidia" )
			// ),
				array(
				"type"        => "textfield",
				"holder"      => "div",
				"heading"     => __( "Address", "webidia" ),
				"param_name"  => "address",
				"value"       => "",
				"description" => __( "Enter Address", "webidia" )
			),

		array(
				"type"        => "dropdown",
				"holder"      => "div",
				"heading"     => __( "HideInfoWindows", "webidia" ),
				"param_name"  => "hideinfowindows",
				"value"       => array(  __( 'Yes') => 'true', __( 'No' )=>'false' ),
				"std"		  => "true",
				"description" => __( "", "webidia" )
			),
		array(
				"type"        => "textarea",
				"holder"      => "div",
				"heading"     => __( "Infowindowstext", "webidia" ),
				"param_name"  => "infowindowstext",
				"value"       => "",
				'dependency' => array(
					'element' => 'hideinfowindows',
					'value'   => array( 'false' ),
				),
				"description" => __( "Enter Infowindows content", "webidia" )
			),
				array(
				"type"        => "dropdown",
				"holder"      => "div",
				"heading"     => __( "Add Marker1", "webidia" ),
				"param_name"  => "showmark1",
				"value"       => array(  __( 'Yes') => 'true', __( 'No' )=>'false' ),
				"std"		  => "false",
				'dependency' => array(
					'element' => 'hideinfowindows',
					'value'   => array( 'false' ),
				),
				"description" => __( "", "webidia" )
			),
			array(
				"type"        => "textfield",
				"holder"      => "div",
				"heading"     => __( "1st Marker Address", "webidia" ),
				"param_name"  => "mark1add",
				"value"       => array(),
				'dependency' => array(
					'element' => 'showmark1',
					'value'   => array( 'true' ),
				),
				"description" => __( "Enter 1st Marker  Address", "webidia" )
			),
			
			array(
				"type"        => "textarea",
				"holder"      => "div",
				"heading"     => __( "1st Marker InfoBox", "webidia" ),
				"param_name"  => "mark1info",
				"value"       => array(),
				'dependency' => array(
					'element' => 'showmark1',
					'value'   => array( 'true' ),
				),
				"description" => __( "Enter Infowindows content", "webidia" )
			),	


			array(
				"type"        => "dropdown",
				"holder"      => "div",
				"heading"     => __( "Add 2nd Marker", "webidia" ),
				"param_name"  => "showmark2",
				"value"       => array(  __( 'Yes') => 'true', __( 'No' )=>'false' ),
				"std"		  => "false",
				'dependency' => array(
					'element' => 'hideinfowindows',
					'value'   => array( 'false' ),
				),
				"description" => __( "", "webidia" )
			),

			array(
				"type"        => "textfield",
				"holder"      => "div",
				"heading"     => __( "2nd Marker Address", "webidia" ),
				"param_name"  => "mark2add",
				"value"       => array(),
				'dependency' => array(
					'element' => 'showmark2',
					'value'   => array( 'true' ),
				),
				"description" => __( "Enter 2nd  Marker  Address", "webidia" )
			),
			
			array(
				"type"        => "textarea",
				"holder"      => "div",
				"heading"     => __( "2nd Marker InfoBox", "webidia" ),
				"param_name"  => "mark2info",
				"value"       => array(),
				'dependency' => array(
					'element' => 'showmark2',
					'value'   => array( 'true' ),
				),
				"description" => __( "Enter Infowindows content", "webidia" )
			),	



			array(
				"type"        => "dropdown",
				"holder"      => "div",
				"heading"     => __( "Add 3rd Marker", "webidia" ),
				"param_name"  => "showmark3",
				"value"       => array(  __( 'Yes') => 'true', __( 'No' )=>'false' ),
				"std"		  => "false",
				'dependency' => array(
					'element' => 'showmark2',
					'value'   => array( 'true' ),
				),
				"description" => __( "", "webidia" )
			),
			array(
				"type"        => "textfield",
				"holder"      => "div",
				"heading"     => __( "3rd Marker Address", "webidia" ),
				"param_name"  => "mark3add",
				"value"       => array(),
				'dependency' => array(
					'element' => 'showmark3',
					'value'   => array( 'true' ),
				),
				"description" => __( "Enter 3rd Marker  Address", "webidia" )
			),
		
			array(
				"type"        => "textarea",
				"holder"      => "div",
				"heading"     => __( "3rd Marker InfoBox", "webidia" ),
				"param_name"  => "mark3info",
				"value"       => array(),
				'dependency' => array(
					'element' => 'showmark3',
					'value'   => array( 'true' ),
				),
				"description" => __( "Enter Infowindows content", "webidia" )
			),	

			

		array(
				"type"        => "dropdown",
				"holder"      => "div",
				"heading"     => __( "Add 4th Marker", "webidia" ),
				"param_name"  => "showmark4",
				"value"       => array(  __( 'Yes') => 'true', __( 'No' )=>'false' ),
				"std"		  => "false",
				'dependency' => array(
					'element' => 'showmark3',
					'value'   => array( 'true' ),
				),
				"description" => __( "", "webidia" )
			),
			array(
				"type"        => "textfield",
				"holder"      => "div",
				"heading"     => __( "4th Marker Address", "webidia" ),
				"param_name"  => "mark4add",
				"value"       => array(),
				'dependency' => array(
					'element' => 'showmark4',
					'value'   => array( 'true' ),
				),
				"description" => __( "Enter 4th Marker  Address", "webidia" )
			),
		
			array(
				"type"        => "textarea",
				"holder"      => "div",
				"heading"     => __( "4th Marker InfoBox", "webidia" ),
				"param_name"  => "mark4info",
				"value"       => array(),
				'dependency' => array(
					'element' => 'showmark4',
					'value'   => array( 'true' ),
				),
				"description" => __( "Enter Infowindows content", "webidia" )
			),	


		array(
				"type"        => "dropdown",
				"holder"      => "div",
				"heading"     => __( "Add 5th Marker", "webidia" ),
				"param_name"  => "showmark5",
				"value"       => array(  __( 'Yes') => 'true', __( 'No' )=>'false' ),
				"std"		  => "false",
				'dependency' => array(
					'element' => 'showmark4',
					'value'   => array( 'true' ),
				),
				"description" => __( "", "webidia" )
			),
			array(
				"type"        => "textfield",
				"holder"      => "div",
				"heading"     => __( "5th Marker Address", "webidia" ),
				"param_name"  => "mark5add",
				"value"       => array(),
				'dependency' => array(
					'element' => 'showmark5',
					'value'   => array( 'true' ),
				),
				"description" => __( "Enter 5th Marker  Address", "webidia" )
			),
		
			array(
				"type"        => "textarea",
				"holder"      => "div",
				"heading"     => __( "5th Marker InfoBox", "webidia" ),
				"param_name"  => "mark5info",
				"value"       => array(),
				'dependency' => array(
					'element' => 'showmark5',
					'value'   => array( 'true' ),
				),
				"description" => __( "Enter Infowindows content", "webidia" )
			),	



			array(
				"type"        => "dropdown",
				"holder"      => "div",
				"heading"     => __( "Add 6th Marker", "webidia" ),
				"param_name"  => "showmark6",
				"value"       => array(  __( 'Yes') => 'true', __( 'No' )=>'false' ),
				"std"		  => "false",
				'dependency' => array(
					'element' => 'showmark5',
					'value'   => array( 'true' ),
				),
				"description" => __( "", "webidia" )
			),
			array(
				"type"        => "textfield",
				"holder"      => "div",
				"heading"     => __( "6th Marker Address", "webidia" ),
				"param_name"  => "mark6add",
				"value"       => array(),
				'dependency' => array(
					'element' => 'showmark6',
					'value'   => array( 'true' ),
				),
				"description" => __( "Enter 6th Marker  Address", "webidia" )
			),
		
			array(
				"type"        => "textarea",
				"holder"      => "div",
				"heading"     => __( "6th Marker InfoBox", "webidia" ),
				"param_name"  => "mark6info",
				"value"       => array(),
				'dependency' => array(
					'element' => 'showmark6',
					'value'   => array( 'true' ),
				),
				"description" => __( "Enter Infowindows content", "webidia" )
			),	




					array(
				"type"        => "dropdown",
				"holder"      => "div",
				"heading"     => __( "Add 7th Marker", "webidia" ),
				"param_name"  => "showmark7",
				"value"       => array(  __( 'Yes') => 'true', __( 'No' )=>'false' ),
				"std"		  => "false",
				'dependency' => array(
					'element' => 'showmark6',
					'value'   => array( 'true' ),
				),
				"description" => __( "", "webidia" )
			),
			array(
				"type"        => "textfield",
				"holder"      => "div",
				"heading"     => __( "7th Marker Address", "webidia" ),
				"param_name"  => "mark7add",
				"value"       => array(),
				'dependency' => array(
					'element' => 'showmark7',
					'value'   => array( 'true' ),
				),
				"description" => __( "Enter 7th Marker  Address", "webidia" )
			),
		
			array(
				"type"        => "textarea",
				"holder"      => "div",
				"heading"     => __( "7th Marker InfoBox", "webidia" ),
				"param_name"  => "mark7info",
				"value"       => array(),
				'dependency' => array(
					'element' => 'showmark7',
					'value'   => array( 'true' ),
				),
				"description" => __( "Enter Infowindows content", "webidia" )
			),	



						array(
				"type"        => "dropdown",
				"holder"      => "div",
				"heading"     => __( "Add 8th Marker", "webidia" ),
				"param_name"  => "showmark8",
				"value"       => array(  __( 'Yes') => 'true', __( 'No' )=>'false' ),
				"std"		  => "false",
				'dependency' => array(
					'element' => 'showmark7',
					'value'   => array( 'true' ),
				),
				"description" => __( "", "webidia" )
			),
			array(
				"type"        => "textfield",
				"holder"      => "div",
				"heading"     => __( "8th Marker Address", "webidia" ),
				"param_name"  => "mark8add",
				"value"       => array(),
				'dependency' => array(
					'element' => 'showmark8',
					'value'   => array( 'true' ),
				),
				"description" => __( "Enter 8th Marker  Address", "webidia" )
			),
		
			array(
				"type"        => "textarea",
				"holder"      => "div",
				"heading"     => __( "8th Marker InfoBox", "webidia" ),
				"param_name"  => "mark8info",
				"value"       => array(),
				'dependency' => array(
					'element' => 'showmark8',
					'value'   => array( 'true' ),
				),
				"description" => __( "Enter Infowindows content", "webidia" )
			),	


				array(
				"type"        => "dropdown",
				"holder"      => "div",
				"heading"     => __( "Add 9th Marker", "webidia" ),
				"param_name"  => "showmark9",
				"value"       => array(  __( 'Yes') => 'true', __( 'No' )=>'false' ),
				"std"		  => "false",
				'dependency' => array(
					'element' => 'showmark8',
					'value'   => array( 'true' ),
				),
				"description" => __( "", "webidia" )
			),
			array(
				"type"        => "textfield",
				"holder"      => "div",
				"heading"     => __( "9th Marker Address", "webidia" ),
				"param_name"  => "mark9add",
				"value"       => array(),
				'dependency' => array(
					'element' => 'showmark9',
					'value'   => array( 'true' ),
				),
				"description" => __( "Enter 9th Marker  Address", "webidia" )
			),
		
			array(
				"type"        => "textarea",
				"holder"      => "div",
				"heading"     => __( "9th Marker InfoBox", "webidia" ),
				"param_name"  => "mark9info",
				"value"       => array(),
				'dependency' => array(
					'element' => 'showmark9',
					'value'   => array( 'true' ),
				),
				"description" => __( "Enter Infowindows content", "webidia" )
			),	


					array(
				"type"        => "dropdown",
				"holder"      => "div",
				"heading"     => __( "Add 10th Marker", "webidia" ),
				"param_name"  => "showmark10",
				"value"       => array(  __( 'Yes') => 'true', __( 'No' )=>'false' ),
				"std"		  => "false",
				'dependency' => array(
					'element' => 'showmark9',
					'value'   => array( 'true' ),
				),
				"description" => __( "", "webidia" )
			),
			array(
				"type"        => "textfield",
				"holder"      => "div",
				"heading"     => __( "10th Marker Address", "webidia" ),
				"param_name"  => "mark10add",
				"value"       => array(),
				'dependency' => array(
					'element' => 'showmark10',
					'value'   => array( 'true' ),
				),
				"description" => __( "Enter 10th Marker  Address", "webidia" )
			),
		
			array(
				"type"        => "textarea",
				"holder"      => "div",
				"heading"     => __( "10th Marker InfoBox", "webidia" ),
				"param_name"  => "mark10info",
				"value"       => array(),
				'dependency' => array(
					'element' => 'showmark10',
					'value'   => array( 'true' ),
				),
				"description" => __( "Enter Infowindows content", "webidia" )
			),	


				array(
				"type"        => "dropdown",
				"holder"      => "div",
				"heading"     => __( "Add 11th Marker", "webidia" ),
				"param_name"  => "showmark11",
				"value"       => array(  __( 'Yes') => 'true', __( 'No' )=>'false' ),
				"std"		  => "false",
				'dependency' => array(
					'element' => 'showmark10',
					'value'   => array( 'true' ),
				),
				"description" => __( "", "webidia" )
			),
			array(
				"type"        => "textfield",
				"holder"      => "div",
				"heading"     => __( "11th Marker Address", "webidia" ),
				"param_name"  => "mark11add",
				"value"       => array(),
				'dependency' => array(
					'element' => 'showmark11',
					'value'   => array( 'true' ),
				),
				"description" => __( "Enter 11th Marker  Address", "webidia" )
			),

		
			array(
				"type"        => "textarea",
				"holder"      => "div",
				"heading"     => __( "11th Marker InfoBox", "webidia" ),
				"param_name"  => "mark11info",
				"value"       => array(),
				'dependency' => array(
					'element' => 'showmark11',
					'value'   => array( 'true' ),
				),
				"description" => __( "Enter Infowindows content", "webidia" )
			),	


			array(
				"type"        => "dropdown",
				"holder"      => "div",
				"heading"     => __( "Add 12th Marker", "webidia" ),
				"param_name"  => "showmark12",
				"value"       => array(  __( 'Yes') => 'true', __( 'No' )=>'false' ),
				"std"		  => "false",
				'dependency' => array(
					'element' => 'showmark11',
					'value'   => array( 'true' ),
				),
				"description" => __( "", "webidia" )
			),
			array(
				"type"        => "textfield",
				"holder"      => "div",
				"heading"     => __( "12th Marker Address", "webidia" ),
				"param_name"  => "mark12add",
				"value"       => array(),
				'dependency' => array(
					'element' => 'showmark12',
					'value'   => array( 'true' ),
				),
				"description" => __( "Enter 12th Marker  Address", "webidia" )
			),
		
			array(
				"type"        => "textarea",
				"holder"      => "div",
				"heading"     => __( "12th Marker InfoBox", "webidia" ),
				"param_name"  => "mark12info",
				"value"       => array(),
				'dependency' => array(
					'element' => 'showmark12',
					'value'   => array( 'true' ),
				),
				"description" => __( "Enter Infowindows content", "webidia" )
			),	


					array(
				"type"        => "dropdown",
				"holder"      => "div",
				"heading"     => __( "Add 13th Marker", "webidia" ),
				"param_name"  => "showmark13",
				"value"       => array(  __( 'Yes') => 'true', __( 'No' )=>'false' ),
				"std"		  => "false",
				'dependency' => array(
					'element' => 'showmark12',
					'value'   => array( 'true' ),
				),
				"description" => __( "", "webidia" )
			),
			array(
				"type"        => "textfield",
				"holder"      => "div",
				"heading"     => __( "13th Marker Address", "webidia" ),
				"param_name"  => "mark13add",
				"value"       => array(),
				'dependency' => array(
					'element' => 'showmark13',
					'value'   => array( 'true' ),
				),
				"description" => __( "Enter 13th Marker  Address", "webidia" )
			),
		
			array(
				"type"        => "textarea",
				"holder"      => "div",
				"heading"     => __( "13th Marker InfoBox", "webidia" ),
				"param_name"  => "mark13info",
				"value"       => array(),
				'dependency' => array(
					'element' => 'showmark13',
					'value'   => array( 'true' ),
				),
				"description" => __( "Enter Infowindows content", "webidia" )
			),	


			array(
				"type"        => "dropdown",
				"holder"      => "div",
				"heading"     => __( "Add 14th Marker", "webidia" ),
				"param_name"  => "showmark14",
				"value"       => array(  __( 'Yes') => 'true', __( 'No' )=>'false' ),
				"std"		  => "false",
				'dependency' => array(
					'element' => 'showmark13',
					'value'   => array( 'true' ),
				),
				"description" => __( "", "webidia" )
			),
			array(
				"type"        => "textfield",
				"holder"      => "div",
				"heading"     => __( "14th Marker Address", "webidia" ),
				"param_name"  => "mark14add",
				"value"       => array(),
				'dependency' => array(
					'element' => 'showmark14',
					'value'   => array( 'true' ),
				),
				"description" => __( "Enter 14th Marker  Address", "webidia" )
			),
		
			array(
				"type"        => "textarea",
				"holder"      => "div",
				"heading"     => __( "14th Marker InfoBox", "webidia" ),
				"param_name"  => "mark14info",
				"value"       => array(),
				'dependency' => array(
					'element' => 'showmark14',
					'value'   => array( 'true' ),
				),
				"description" => __( "Enter Infowindows content", "webidia" )
			),


			array(
				"type"        => "dropdown",
				"holder"      => "div",
				"heading"     => __( "Add 15th Marker", "webidia" ),
				"param_name"  => "showmark15",
				"value"       => array(  __( 'Yes') => 'true', __( 'No' )=>'false' ),
				"std"		  => "false",
				'dependency' => array(
					'element' => 'showmark14',
					'value'   => array( 'true' ),
				),
				"description" => __( "", "webidia" )
			),
			array(
				"type"        => "textfield",
				"holder"      => "div",
				"heading"     => __( "15th Marker Address", "webidia" ),
				"param_name"  => "mark15add",
				"value"       => array(),
				'dependency' => array(
					'element' => 'showmark15',
					'value'   => array( 'true' ),
				),
				"description" => __( "Enter 15th Marker  Address", "webidia" )
			),
		
			array(
				"type"        => "textarea",
				"holder"      => "div",
				"heading"     => __( "15th Marker InfoBox", "webidia" ),
				"param_name"  => "mark15info",
				"value"       => array(),
				'dependency' => array(
					'element' => 'showmark15',
					'value'   => array( 'true' ),
				),
				"description" => __( "Enter Infowindows content", "webidia" )
			),


			array(
				"type"        => "dropdown",
				"holder"      => "div",
				"heading"     => __( "navigationControl", "webidia" ),
				"param_name"  => "navigationcontrol",
				"value"       => array(  __( 'Yes') => 'true', __( 'No' )=>'false' ),
				"std"		  => "false",
				"description" => __( "", "webidia" )
			),
			array(
				"type"        => "dropdown",
				"holder"      => "div",
				"heading"     => __( "mapTypeControl", "webidia" ),
				"param_name"  => "maptypecontrol",
				"value"       => array(  __( 'Yes') => 'true', __( 'No' )=>'false' ),
				"std"		  => "false",
				"description" => __( "", "webidia" )
			),
			array(
				"type"        => "textfield",
				"holder"      => "div",
				"heading"     => __( "zoom", "webidia" ),
				"param_name"  => "zoom",
				"value"       => __(""),
				"std"		  => "7",
				"description" => __( "", "webidia" )
			),
			array(
				"type"        => "textfield",
				"holder"      => "div",
				"heading"     => __( "Title", "webidia" ),
				"param_name"  => "title",
				"value"       => __(""),
				"std"		  => "Test",
				"description" => __( "", "webidia" )
			),
			array(
				"type"        => "dropdown",
				"holder"      => "div",
				"heading"     => __( "ZoomControl", "webidia" ),
				"param_name"  => "zoomcontrol",
				"value"       => array(  __( 'Yes') => 'true', __( 'No' )=>'false' ),
				"std"		  => "false",
				"description" => __( "", "webidia" )
			),
			array(
				"type"        => "dropdown",
				"holder"      => "div",
				"heading"     => __( "StreetViewControl", "webidia" ),
				"param_name"  => "streetviewcontrol",
				"value"       => array(  __( 'Yes') => 'true', __( 'No' )=>'false' ),
				"std"		  => "fasle",
				"description" => __( "", "webidia" )
			),
			array(
				"type"        => "dropdown",
				"holder"      => "div",
				"heading"     => __( "DisableDoubleClickZoom", "webidia" ),
				"param_name"  => "disabledoubledcickzoom",
				"value"       => array(  __( 'Yes') => 'true', __( 'No' )=>'false' ),
				"std"		  => "true",
				"description" => __( "", "webidia" )
			),
			array(
				"type"        => "dropdown",
				"holder"      => "div",
				"heading"     => __( "ScaleControl", "webidia" ),
				"param_name"  => "scalecontrol",
				"value"       => array(  __( 'Yes') => 'true', __( 'No' )=>'false' ),
				"std"		  => "false",
				"description" => __( "", "webidia" )
			),
			array(
				"type"        => "dropdown",
				"holder"      => "div",
				"heading"     => __( "Draggable", "webidia" ),
				"param_name"  => "draggable",
				"value"       => array(  __( 'Yes') => 'true', __( 'No' )=>'false' ),
				"std"		  => "false",
				"description" => __( "", "webidia" )
			),
			array(
				"type"        => "dropdown",
				"holder"      => "div",
				"heading"     => __( "Scrollwheel", "webidia" ),
				"param_name"  => "scrollwheel",
				"value"       => array(  __( 'Yes') => 'true', __( 'No' )=>'false' ),
				"std"		  => "false",
				"description" => __( "", "webidia" )
			),
			array(
				"type"        => "textfield",
				"holder"      => "div",
				"heading"     => __( "Height", "webidia" ),
				"param_name"  => "height",
				"value"       => "600px",
				"description" => __( "Height for Google map in pixel", "webidia" )
			),
			array(
				"type"        => "textfield",
				"holder"      => "div",
				"heading"     => __( "Width", "webidia" ),
				"param_name"  => "width",
				"value"       => "100%",
				"description" => __( "Width for Google map in pixel", "webidia" )
			),
		)
   ) );

   // Animated Stats
   vc_map( array(
      "name" => __( "WF - Animated Stats", "webidia" ),
      "description" => __(''),
      "icon" => get_stylesheet_directory_uri() . "/inc/vc/icons/wf_modal.jpg",
      "base" => "wf_animated_stats",
      "class" => "",
      "category" => __( "Content", "webidia"),
   ) );

   // Countdown Timer
   vc_map( array(
      "name" => __( "WF - Animated Stats", "webidia" ),
      "description" => __(''),
      "icon" => get_stylesheet_directory_uri() . "/inc/vc/icons/wf_modal.jpg",
      "base" => "wf_countodwn_timer",
      "class" => "",
      "category" => __( "Content", "webidia"),
   ) );

   // Carousel
   vc_map( array(
      "name" => __( "WF - Animated Stats", "webidia" ),
      "description" => __(''),
      "icon" => get_stylesheet_directory_uri() . "/inc/vc/icons/wf_modal.jpg",
      "base" => "wf_carousel",
      "class" => "",
      "category" => __( "Content", "webidia"),
   ) );

}

add_action( 'vc_before_init', 'wf_vc_custom' );




// SAMPLE - Add custom colour element to CTA
function add_cta_button_super_color() {
  //Get current values stored in the color param in "Call to Action" element
  $param = WPBMap::getParam( 'vc_cta', 'color' );
  //Append new value to the 'value' array
  $param['value'][__( 'WF', 'webidia' )] = 'btn-wf-color';
  $param['std'] = 'btn-wf-color';
  //Finally "mutate" param with new values
  vc_update_shortcode_param( 'vc_cta', $param );
 // add_shortcode_param( 'add_more', 'add_more_settings_field' );
 // add_shortcode_param('add_more', 'add_more_settings_field', plugins_url( '/WF-Gmap-master/public/js/addmore.js' ) );
}
/*function add_more_settings_field( $settings, $value ) {
   return '<div class="add_more_block">'
             .'<input name="' . esc_attr( $settings['param_name'] ) . '" class="wpb_vc_param_value wpb-textinput ' .
             esc_attr( $settings['param_name'] ) . ' ' .
             esc_attr( $settings['type'] ) . '_field" type="text" value="' . esc_attr( $value ) . '" />'
         .'</div>'
         .'<button class="add_field_button">Add Marker Address</button>'; // New button element
}*/
add_action( 'vc_after_init', 'add_cta_button_super_color' ); /* Note: here we are using vc_after_init because WPBMap::GetParam and mutateParame are available only when default content elements are "mapped" into the system */