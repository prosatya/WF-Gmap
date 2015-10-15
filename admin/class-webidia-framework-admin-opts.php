<?php

class WF_Opts {

	function __construct() {
		self::add_options();
	}

	static function add_options() {
		$opt_name = "webidia_framework_opts";
		$args = array(
			'opt_name' => $opt_name,
			'use_cdn' => TRUE,
			'display_name' => 'Webidia Framework Options',
			'display_version' => FALSE,
			'page_title' => 'Webidia Framework Options',
			'update_notice' => TRUE,
			'intro_text' => '',
			'footer_text' => '',
			'menu_type' => 'submenu',
			'allow_sub_menu' => TRUE,
			'menu_title' => 'Options',
			'page_parent' => 'webidia-framework',
			'customizer' => TRUE,
			'admin_bar'  => FALSE,
			'dev_mode'  => FALSE,
			'default_mark' => '*',
			'hints' => array(
				'icon_position' => 'right',
				'icon_color' => 'lightgray',
				'icon_size' => 'normal',
				'tip_style' => array(
					'color' => 'light',
				),
				'tip_position' => array(
					'my' => 'top left',
					'at' => 'bottom right',
				),
				'tip_effect' => array(
					'show' => array(
						'duration' => '500',
						'event' => 'mouseover',
					),
					'hide' => array(
						'duration' => '500',
						'event' => 'mouseleave unfocus',
					),
				),
			),
			'output' => TRUE,
			'output_tag' => TRUE,
			'settings_api' => TRUE,
			'cdn_check_time' => '1440',
			'compiler' => TRUE,
			'page_permissions' => 'manage_options',
			'save_defaults' => TRUE,
			'show_import_export' => TRUE,
			'database' => 'options',
			'transient_time' => '3600',
			'network_sites' => TRUE,
		);

		Redux::setArgs( $opt_name, $args );

		$tabs = array(
			array(
				'id'      => 'redux-help-tab-1',
				'title'   => __( 'Theme Information 1', 'admin_folder' ),
				'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'admin_folder' )
			),
			array(
				'id'      => 'redux-help-tab-2',
				'title'   => __( 'Theme Information 2', 'admin_folder' ),
				'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'admin_folder' )
			)
		);
		Redux::setHelpTab( $opt_name, $tabs );

		$content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'admin_folder' );
		Redux::setHelpSidebar( $opt_name, $content );

		Redux::setSection( $opt_name, array(
			'title' => __('Plugins', 'webidia-builder'),
			'desc' => '',
			'subsection' => false,
			'icon' => 'el el-icon-adjust-alt',
			'fields' => array(
				array(
					'id'       => 'wf_options_general_basic_smoothscroll',
					'type'     => 'switch',
					'title'    => __( 'Smooth Scroll', 'webidia_framework' ),
					'subtitle' => __( '', 'webidia_framework' ),
					'default'  => true,
					'on'       => 'Enabled',
					'off'      => 'Disabled',
				),
				array(
					'id'       => 'wf_options_general_basic_animations',
					'type'     => 'switch',
					'title'    => __( 'Animations', 'webidia_framework' ),
					'subtitle' => __( '', 'webidia_framework' ),
					'default'  => true,
					'on'       => 'Enabled',
					'off'      => 'Disabled',
				),
			)
		) );

		Redux::setSection( $opt_name, array(
			'title' => __('Page Builder', 'webidia-builder'),
			'desc' => '',
			'subsection' => false,
			'icon' => 'el el-icon-adjust-alt',
			'fields' => array(
				array(
					'id' => 'disable_spb',
					'type' => 'button_set',
					'title' => __('Webidia Page Builder', 'webidiaframework'),
					'subtitle' => __('Enable/Disable the Webidia Page Builder functionality with this option.', 'webidiaframework'),
					'desc' => '',
					'options' => array('1' => 'Disabled','0' => 'Enabled'),
					'default' => '0'
				),
				array(
					'id'        => 'spb-post-types',
					'type'      => 'select',
					'data'      => 'post_types',
					'multi'     => true,
					'default'   => array('page', 'post', 'portfolio', 'team', 'spb-section'),
					'title'     => __('Page Builder Post Types', 'webidiaframework'),
					'desc'      => __('Select here which post types you would like to enable the page builder for.', 'webidiaframework'),
				),
			)
		) );

		Redux::setSection( $opt_name, array(
			'type' => 'divide',
			'id' => 'divide-1'
		) );

		Redux::setSection( $opt_name, array(
			'title' => __('Webidia Slider', 'webidia-builder'),
			'desc' => '',
			'subsection' => false,
			'icon' => 'el el-icon-website',
			'fields' => array(
				array(
					'id' => 'disable_ss',
					'type' => 'button_set',
					'title' => __('Webidia Slider', 'webidiaframework'),
					'subtitle' => __('Enable/Disable the Webidia Slider functionality with this option.', 'webidiaframework'),
					'desc' => '',
					'options' => array('1' => 'Disabled','0' => 'Enabled'),
					'default' => '0'
				),
			)
		) );

		Redux::setSection( $opt_name, array(
			'type' => 'divide',
			'id' => 'divide-2'
		) );

		Redux::setSection( $opt_name, array(
			'title' => __('Custom Post Types', 'webidia-builder'),
			'desc' => '',
			'subsection' => false,
			'icon' => 'el el-icon-view-mode',
			'fields' => array(
				array(
					'id' => 'cpt-disable',
					'type' => 'checkbox',
					'title' => __('Disable Custom Post Types', 'webidiaframework'),
					'subtitle' => __('You can disable the custom post types used within the theme here, by checking the corresponding box. NOTE: If you do not want to disable any, then make sure none of the boxes are checked.', 'webidiaframework'),
					'options' => array(
						'portfolio' => 'Portfolio',
						'galleries' => 'Galleries',
						'team' => 'Team',
						'clients' => 'Clients',
						'testimonials' => 'Testimonials',
						'directory' => 'Directory',
						'faqs' => 'FAQ',
						'spb-section' => 'SPB Section',
					),
					'default' => array(
						'portfolio' => '0',
						'galleries' => '0',
						'team' => '0',
						'clients' => '0',
						'testimonials' => '0',
						'directory' => '0',
						'webidia-slider' => '0'
					)
				),
			)
		) );

		Redux::setSection( $opt_name, array(
			'type' => 'divide',
			'id' => 'divide-3'
		) );

		Redux::setSection( $opt_name, array(
			'title' => __('Performance', 'webidia-builder'),
			'desc' => '',
			'subsection' => false,
			'icon' => 'el el-icon-fire',
			'fields' => array(
				array(
					'id' => 'enable_min_styles',
					'type' => 'button_set',
					'title' => __('Load pre-minified stylesheets', 'webidia-builder'),
					'subtitle' => __('Enable this option to load pre-minified stlysheets, for faster page speed.', 'webidia-builder'),
					'desc' => '',
					'options' => array('1' => 'On', '0' => 'Off'),
					'default' => '1'
				),
				array(
					'id' => 'enable_min_scripts',
					'type' => 'button_set',
					'title' => __('Load pre-minified scripts', 'webidia-builder'),
					'subtitle' => __('Enable this option to load pre-minified scripts, for faster page speed.', 'webidia-builder'),
					'desc' => '',
					'options' => array('1' => 'On', '0' => 'Off'),
					'default' => '1'
				),
			)
		) );
	}


}



if ( class_exists( 'Redux' ) ) {
	new WF_Opts();
}