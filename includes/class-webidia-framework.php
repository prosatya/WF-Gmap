<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       http://webidia.com
 * @since      1.0.0
 *
 * @package    Webidia_Framework
 * @subpackage Webidia_Framework/includes
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    Webidia_Framework
 * @subpackage Webidia_Framework/includes
 * @author     Tom Bunn <tom@webidia.com>
 */
class Webidia_Framework {

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      Webidia_Framework_Loader    $loader    Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $plugin_name    The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {

		$this->plugin_name = 'webidia-framework';
		$this->version = '1.0.0';

		$this->load_dependencies();
		$this->set_locale();
		$this->define_admin_hooks();
		$this->define_public_hooks();
		$this->get_wf_vc();
		$this->get_wf_cpt();
		$this->get_wf_shortcode();

	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - Webidia_Framework_Loader. Orchestrates the hooks of the plugin.
	 * - Webidia_Framework_i18n. Defines internationalization functionality.
	 * - Webidia_Framework_Admin. Defines all hooks for the admin area.
	 * - Webidia_Framework_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function load_dependencies() {

		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-webidia-framework-loader.php';

		/**
		 * The class responsible for defining internationalization functionality
		 * of the plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-webidia-framework-i18n.php';

		/**
		 * The Redux Framework
		 */
		require plugin_dir_path( dirname( __FILE__ ) ) . 'includes/redux/ReduxCore/framework.php';

		/**
		 * The class responsible for defining all actions that occur in the admin area.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-webidia-framework-admin.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-webidia-framework-admin-megamenu.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-webidia-framework-admin-custom-options.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-webidia-framework-admin-opts.php';

		/**
		 * The class responsible for defining all actions that occur in the public-facing
		 * side of the site.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-webidia-framework-public.php';

		$this->loader = new Webidia_Framework_Loader();

	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the Webidia_Framework_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function set_locale() {

		$plugin_i18n = new Webidia_Framework_i18n();
		$plugin_i18n->set_domain( $this->get_plugin_name() );

		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );

	}

	/**
	 * Register all of the hooks related to the admin area functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_admin_hooks() {

		$plugin_admin = new Webidia_Framework_Admin( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );

	}

	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_public_hooks() {

		$plugin_public = new Webidia_Framework_Public( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );

	}

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    1.0.0
	 */
	public function run() {
		$this->loader->run();
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since     1.0.0
	 * @return    string    The name of the plugin.
	 */
	public function get_plugin_name() {
		return $this->plugin_name;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since     1.0.0
	 * @return    Webidia_Framework_Loader    Orchestrates the hooks of the plugin.
	 */
	public function get_loader() {
		return $this->loader;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since     1.0.0
	 * @return    string    The version number of the plugin.
	 */
	public function get_version() {
		return $this->version;
	}

	/**
	 * Add VC Custom Extensions
	 *
	 * @since     1.0.0
	 * @return   
	 */
	public function get_wf_vc() {
    	include_once( plugin_dir_path( dirname( __FILE__ ) ) . 'includes/vc/vc-config.php' );
    }

    /**
	 * Add Custom Post Types
	 *
	 * @since     1.0.0
	 * @return   
	 */
	public function get_wf_cpt() {
    	include_once( plugin_dir_path( dirname( __FILE__ ) ) . 'includes/custom-post-types/faq.php' );
    	include_once( plugin_dir_path( dirname( __FILE__ ) ) . 'includes/custom-post-types/gallery.php' );
    	include_once( plugin_dir_path( dirname( __FILE__ ) ) . 'includes/custom-post-types/portfolio.php' );
    	include_once( plugin_dir_path( dirname( __FILE__ ) ) . 'includes/custom-post-types/team.php' );
//    	include_once( plugin_dir_path( dirname( __FILE__ ) ) . 'includes/custom-post-types/testimonial.php' );
    }

      /**
	 * Add Framework Shortcode
	 *
	 * @since     1.0.0
	 * @return   
	 */
	public function get_wf_shortcode() {
		include_once( plugin_dir_path( dirname( __FILE__ ) ) . 'includes/shortcode/modals.php' );
		include_once( plugin_dir_path( dirname( __FILE__ ) ) . 'includes/shortcode/tooltips.php' );
    }

}
