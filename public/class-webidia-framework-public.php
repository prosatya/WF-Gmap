<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://webidia.com
 * @since      1.0.0
 *
 * @package    Webidia_Framework
 * @subpackage Webidia_Framework/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Webidia_Framework
 * @subpackage Webidia_Framework/public
 * @author     Tom Bunn <tom@webidia.com>
 */
class Webidia_Framework_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		//add_action('wp_enqueue_scripts', array($this, 'wfs_google_map_script'),1);


	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Webidia_Framework_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Webidia_Framework_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/webidia-framework-public.css', array(), $this->version, 'all' );
		wp_enqueue_style( 'megamenu-' . $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/megamenu.css', array(), $this->version, 'all' );
		wp_enqueue_style( 'wf-owl.carousel-' . $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/owl.carousel.css', array(), $this->version, 'all' );
		wp_enqueue_style( 'wf-owl.theme-' . $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/owl.theme.css', array(), $this->version, 'all' );
		wp_enqueue_style( 'wf_owl.transitions-' . $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/owl.transitions.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Webidia_Framework_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Webidia_Framework_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
	wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/webidia-framework-public.js', array( 'jquery' ), $this->version, false );
	wp_enqueue_script( $this->plugin_name."02" ,'http://maps.google.com/maps/api/js?sensor=true', array( 'jquery' ) );
	wp_enqueue_script( $this->plugin_name."04" , plugin_dir_url( __FILE__ ) . 'js/jquery.gmap.js', array( 'jquery' ), $this->version, false );
	}


			




}
