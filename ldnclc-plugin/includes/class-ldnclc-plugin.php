<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Ldnclc_Plugin
 * @subpackage Ldnclc_Plugin/includes
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
 * @package    Ldnclc_Plugin
 * @subpackage Ldnclc_Plugin/includes
 * @author     Your Name <email@example.com>
 */
class Ldnclc_Plugin {

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      Ldnclc_Plugin_Loader    $loader    Maintains and registers all hooks for the plugin.
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

		$this->plugin_name = 'ldnclc-plugin';
		$this->version = '1.0.0';

		$this->load_dependencies();
		// Removed as unnecessary - JH 1st Dec 2016
		// $this->set_locale();
		$this->define_admin_hooks();
		$this->define_metabox_hooks();
		$this->define_metabox_save_hooks();
		// Removed as unnecessary - JH 1st Dec 2016
		// $this->define_public_hooks();


	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - Ldnclc_Plugin_Loader. Orchestrates the hooks of the plugin.
	 * - Ldnclc_Plugin_i18n. Defines internationalization functionality.
	 * - Ldnclc_Plugin_Admin. Defines all hooks for the admin area.
	 * - Ldnclc_Plugin_Public. Defines all hooks for the public side of the site.
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
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-ldnclc-plugin-loader.php';

		/**
		 * The class responsible for defining internationalization functionality
		 * of the plugin.
		 *
		 * Removed as unnecessary - JH 1st Dec 2016
		 */
		//require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-ldnclc-plugin-i18n.php';

		/**
		 * The class responsible for defining all actions that occur in the admin area.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-ldnclc-plugin-admin.php';

		/**
		 * The class responsible for defining all actions relating to creating metaboxes.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-ldnclc-plugin-admin-metabox.php';


		/**
		 * The class responsible for defining all actions relating to saving metaboxes.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-ldnclc-plugin-admin-save-metabox.php';

		/**
		 * The class responsible for defining all actions that occur in the public-facing
		 * side of the site.
		 *
		 * Removed as unnecessary - JH 1st Dec 2016 
		 */
		// require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-ldnclc-plugin-public.php';

		$this->loader = new Ldnclc_Plugin_Loader();

	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the Ldnclc_Plugin_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function set_locale() {

		$plugin_i18n = new Ldnclc_Plugin_i18n();

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

		$plugin_admin = new Ldnclc_Plugin_Admin( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );

		// Create custom post type and taxonomies
		$this->loader->add_action( 'init', $plugin_admin, 'new_cpt_workshop' );
		$this->loader->add_action( 'init', $plugin_admin, 'new_cpt_resources' );
		$this->loader->add_action( 'init', $plugin_admin, 'new_cpt_clc_based_teacher_cpd' );
		$this->loader->add_action( 'init', $plugin_admin, 'new_cpt_in_school_cpd' );

	}


	/**
	 * Register all of the hooks related to metaboxes
	 *
	 * @since 		1.0.0
	 * @access 		private
	 */
	private function define_metabox_hooks() {
		$plugin_metaboxes = new Ldnclc_Plugin_Admin_Metaboxes( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'add_meta_boxes', $plugin_metaboxes, 'ldnclc_plugin_add_metaboxes' );

	}

	/**
	 * Register all of the hooks related to saving metaboxes
	 *
	 * @since 		1.0.0
	 * @access 		private
	 */
	private function define_metabox_save_hooks() {
		$plugin_save_metaboxes = new Ldnclc_Plugin_Admin_Save_Metaboxes( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'save_post', $plugin_save_metaboxes, 'ldnclc_plugin_meta_save' );
 	}

	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_public_hooks() {

		$plugin_public = new Ldnclc_Plugin_Public( $this->get_plugin_name(), $this->get_version() );

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
	 * @return    Ldnclc_Plugin_Loader    Orchestrates the hooks of the plugin.
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

}
