<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Ldnclc_Plugin
 * @subpackage Ldnclc_Plugin/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Ldnclc_Plugin
 * @subpackage Ldnclc_Plugin/admin
 * @author     Your Name <email@example.com>
 */
class Ldnclc_Plugin_Admin {

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/ldnclc-plugin-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/ldnclc-plugin-admin.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Creates a new custom post type
	 *
	 * @since 	1.0.0
	 * @access 	public
	 * @uses 	register_post_type()
	 */
	public static function new_cpt_workshop() {
		$cap_type 	= 'post';
		$plural 	= 'Pupil Workshops';
		$single 	= 'Pupil Workshop';
		$cpt_name 	= 'pupil_workshop';
		$opts['can_export']								= TRUE;
		$opts['capability_type']						= $cap_type;
		$opts['description']							= esc_html__( "Pupil workshop listings for London CLC", 'ldnclc-plugin' );
		$opts['exclude_from_search']					= FALSE;
		$opts['has_archive']							= TRUE;
		$opts['hierarchical']							= FALSE;
		//$opts['map_meta_cap']							= TRUE;
		$opts['menu_icon']								= 'dashicons-businessman';
		$opts['menu_position']							= 5;
		$opts['public']									= TRUE;
		$opts['publicly_querable']						= TRUE;
		$opts['query_var']								= TRUE;
		//$opts['register_meta_box_cb']					= '';
		//$opts['rewrite']								= FALSE;
		$opts['show_in_admin_bar']						= TRUE;
		$opts['show_in_menu']							= TRUE;
		$opts['show_in_nav_menu']						= TRUE;
		$opts['show_ui']								= TRUE;
		$opts['supports']								= array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'page-attributes', 'menu_order' );
		//TODO $opts['taxonomies']								= array();
		// $opts['capabilities']['delete_others_posts']	= "delete_others_{$cap_type}s";
		// $opts['capabilities']['delete_post']			= "delete_{$cap_type}";
		// $opts['capabilities']['delete_posts']			= "delete_{$cap_type}s";
		// $opts['capabilities']['delete_private_posts']	= "delete_private_{$cap_type}s";
		// $opts['capabilities']['delete_published_posts']	= "delete_published_{$cap_type}s";
		// $opts['capabilities']['edit_others_posts']		= "edit_others_{$cap_type}s";
		// $opts['capabilities']['edit_post']				= "edit_{$cap_type}";
		// $opts['capabilities']['edit_posts']				= "edit_{$cap_type}s";
		// $opts['capabilities']['edit_private_posts']		= "edit_private_{$cap_type}s";
		// $opts['capabilities']['edit_published_posts']	= "edit_published_{$cap_type}s";
		// $opts['capabilities']['publish_posts']			= "publish_{$cap_type}s";
		// $opts['capabilities']['read_post']				= "read_{$cap_type}";
		// $opts['capabilities']['read_private_posts']		= "read_private_{$cap_type}s";
		$opts['labels']['add_new']						= esc_html__( "Add New {$single}", 'ldnclc-plugin' );
		$opts['labels']['add_new_item']					= esc_html__( "Add New {$single}", 'ldnclc-plugin' );
		$opts['labels']['all_items']					= esc_html__( $plural, 'ldnclc-plugin' );
		$opts['labels']['edit_item']					= esc_html__( "Edit {$single}" , 'ldnclc-plugin' );
		$opts['labels']['menu_name']					= esc_html__( $plural, 'ldnclc-plugin' );
		$opts['labels']['name']							= esc_html__( $plural, 'ldnclc-plugin' );
		$opts['labels']['name_admin_bar']				= esc_html__( $single, 'ldnclc-plugin' );
		$opts['labels']['new_item']						= esc_html__( "New {$single}", 'ldnclc-plugin' );
		$opts['labels']['not_found']					= esc_html__( "No {$plural} Found", 'ldnclc-plugin' );
		$opts['labels']['not_found_in_trash']			= esc_html__( "No {$plural} Found in Trash", 'ldnclc-plugin' );
		$opts['labels']['parent_item_colon']			= esc_html__( "Parent {$plural} :", 'ldnclc-plugin' );
		$opts['labels']['search_items']					= esc_html__( "Search {$plural}", 'ldnclc-plugin' );
		$opts['labels']['singular_name']				= esc_html__( $single, 'ldnclc-plugin' );
		$opts['labels']['view_item']					= esc_html__( "View {$single}", 'ldnclc-plugin' );
		$opts['rewrite']['ep_mask']						= EP_PERMALINK;
		$opts['rewrite']['feeds']						= FALSE;
		$opts['rewrite']['pages']						= TRUE;
		$opts['rewrite']['slug']						= esc_html__( 'pupil-workshops', 'ldnclc-plugin' );
		$opts['rewrite']['with_front']					= FALSE;
		//$opts = apply_filters( 'reflected-cpt-options', $opts );
		register_post_type( strtolower( $cpt_name ), $opts );
	}

	/**
	 * Creates a new taxonomy for a custom post type
	 *
	 * @since 	1.0.0
	 * @access 	public
	 * @uses 	register_taxonomy()
	 */
	public static function new_taxonomy_workshop() {
		$plural 	= 'Pupil Workshops type';
		$single 	= 'Pupil Workshop type';
		$tax_name 	= 'pupil_workshop_type';
		$opts['hierarchical']							= TRUE;
		//$opts['meta_box_cb'] 							= '';
		$opts['public']									= TRUE;
		$opts['query_var']								= $tax_name;
		$opts['show_admin_column'] 						= FALSE;
		$opts['show_in_nav_menus']						= TRUE;
		$opts['show_tag_cloud'] 						= TRUE;
		$opts['show_ui']								= TRUE;
		$opts['sort'] 									= '';
		//$opts['update_count_callback'] 					= '';
		//$opts['capabilities']['assign_terms'] 			= 'edit_posts';
		//$opts['capabilities']['delete_terms'] 			= 'manage_categories';
		//$opts['capabilities']['edit_terms'] 			= 'manage_categories';
		//$opts['capabilities']['manage_terms'] 			= 'manage_categories';
		$opts['labels']['add_new_item'] 				= esc_html__( "Add New {$single}", 'ldnclc-plugin' );
		$opts['labels']['add_or_remove_items'] 			= esc_html__( "Add or remove {$plural}", 'ldnclc-plugin' );
		$opts['labels']['all_items'] 					= esc_html__( $plural, 'ldnclc-plugin' );
		$opts['labels']['choose_from_most_used'] 		= esc_html__( "Choose from most used {$plural}", 'ldnclc-plugin' );
		$opts['labels']['edit_item'] 					= esc_html__( "Edit {$single}" , 'ldnclc-plugin');
		$opts['labels']['menu_name'] 					= esc_html__( $plural, 'ldnclc-plugin' );
		$opts['labels']['name'] 						= esc_html__( $plural, 'ldnclc-plugin' );
		$opts['labels']['new_item_name'] 				= esc_html__( "New {$single} Name", 'ldnclc-plugin' );
		$opts['labels']['not_found'] 					= esc_html__( "No {$plural} Found", 'ldnclc-plugin' );
		$opts['labels']['parent_item'] 					= esc_html__( "Parent {$single}", 'ldnclc-plugin' );
		$opts['labels']['parent_item_colon'] 			= esc_html__( "Parent {$single}:", 'ldnclc-plugin' );
		$opts['labels']['popular_items'] 				= esc_html__( "Popular {$plural}", 'ldnclc-plugin' );
		$opts['labels']['search_items'] 				= esc_html__( "Search {$plural}", 'ldnclc-plugin' );
		$opts['labels']['separate_items_with_commas'] 	= esc_html__( "Separate {$plural} with commas", 'ldnclc-plugin' );
		$opts['labels']['singular_name'] 				= esc_html__( $single, 'ldnclc-plugin' );
		$opts['labels']['update_item'] 					= esc_html__( "Update {$single}", 'ldnclc-plugin' );
		$opts['labels']['view_item'] 					= esc_html__( "View {$single}", 'ldnclc-plugin' );
		$opts['rewrite']['ep_mask']						= EP_NONE;
		$opts['rewrite']['hierarchical']				= FALSE;
		$opts['rewrite']['slug']						= esc_html__( strtolower( $tax_name ), 'ldnclc-plugin' );
		$opts['rewrite']['with_front']					= FALSE;
		//$opts = apply_filters( 'reflected-taxonomy-options', $opts );
		register_taxonomy( $tax_name, 'pupil_workshop', $opts );
	}


}
