<?php
/**
 * The metabox-specific functionality of the plugin.
 *
 * @link 		http://example.com
 * @since 		1.0.0
 *
 * @package 	Ldnclc_Plugin
 * @subpackage 	Ldnclc_Plugin/admin
 */

class Ldnclc_Plugin_Admin_Metaboxes 
{

	/**
	 * The post meta data
	 *
	 * @since 		1.0.0
	 * @access 		private
	 * @var 		string 			$meta    			The post meta data.
	 */
	private $meta;
	/**
	 * The ID of this plugin.
	 *
	 * @since 		1.0.0
	 * @access 		private
	 * @var 		string 			$plugin_name 		The ID of this plugin.
	 */
	private $plugin_name;
	/**
	 * The version of this plugin.
	 *
	 * @since 		1.0.0
	 * @access 		private
	 * @var 		string 			$version 			The current version of this plugin.
	 */
	private $version;
	/**
	 * Initialize the class and set its properties.
	 *
	 * @since 		1.0.0
	 * @param 		string 			$Now_Hiring 		The name of this plugin.
	 * @param 		string 			$version 			The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {
		$this->plugin_name = $plugin_name;
		$this->version = $version;
	}
	/**
	 * Registers metaboxes with WordPress
	 *
	 * @since 	1.0.0
	 * @access 	public
	 */
	public function ldnclc_plugin_add_metaboxes() {
		// add_meta_box( $id, $title, $callback, $screen, $context, $priority, $callback_args );
		
		add_meta_box(
	        'pupil-workshop-key-info', //id
	        __( 'Pupil Workshop Key Info', 'ldnclc-plugin' ), //title
	        array( $this, 'ldnclc_plugin_metabox_pupil_workshop_key_info' ), //callback
	        'pupil_workshop', //post_type
	        'side', //context
	        'low', // priority
	        array() // callback args
	    );

	    add_meta_box(
	        'pupil-workshop-what-next', //id
	        __( 'Pupil Workshop What Next', 'ldnclc-plugin' ), //title
	        array( $this, 'ldnclc_plugin_metabox_pupil_workshop_what_next' ), //callback
	        'pupil_workshop', //post_type
	        'normal', //context
	        'low', // priority
	        array() // callback args
	    );

	    add_meta_box(
	        'pupil-workshop-materials', //id
	        __( 'Pupil Workshop Materials', 'ldnclc-plugin' ), //title
	        array( $this, 'ldnclc_plugin_metabox_pupil_workshop_materials' ), //callback
	        'pupil_workshop', //post_type
	        'normal', //context
	        'low', // priority
	        array() // callback args
	    );
	} // add_metaboxes()

	/**
	 * Generates metabox content for pupil workshop key info
	 *
	 * @since 	1.0.0
	 * @access 	public
	 * @return 	void
	 */
	public function ldnclc_plugin_metabox_pupil_workshop_key_info( $post ) {
	    $workshopCode = get_post_meta( $post->ID , 'pupil-workshop-key-info-code', true);
	    $workshopLocation = get_post_meta( $post->ID , 'pupil-workshop-key-info-location', true);
	    $workshopDuration = get_post_meta( $post->ID , 'pupil-workshop-key-info-duration', true);
	    $workshopKeyStage = get_post_meta( $post->ID , 'pupil-workshop-key-info-key-stage', true);

	    include_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/partials/ldnclc-plugin-metabox-workshop-key-info.php';
	}

	/**
	 * Generates metabox content for pupil workshop what next
	 *
	 * @since 	1.0.0
	 * @access 	public
	 * @return 	void
	 */
	public function ldnclc_plugin_metabox_pupil_workshop_what_next( $post ) {
	    $workshopWhatNext = get_post_meta( $post->ID , 'pupil-workshop-what-next', true);
	    		
		echo "<h4>What next point 1: </h4>";

		wp_editor( $content = $workshopWhatNext[0], $editor_id = "pupil-workshop-what-next-0", $settings = array(
			'textarea_name' => 'pupil-workshop-what-next[0]',
			'textarea_rows' => 2,
			'teeny' => TRUE,
			'media_buttons' => FALSE,
		) );

		echo "<h4>What next point 2: </h4>";

		wp_editor( $content = $workshopWhatNext[1], $editor_id = "pupil-workshop-what-next-1", $settings = array(
			'textarea_name' => 'pupil-workshop-what-next[1]',
			'textarea_rows' => 2,
			'teeny' => TRUE,
			'media_buttons' => FALSE,
		) );

		echo "<h4>What next point 3: </h4>";

		wp_editor( $content = $workshopWhatNext[2], $editor_id = "pupil-workshop-what-next-2", $settings = array(
			'textarea_name' => 'pupil-workshop-what-next[2]',
			'textarea_rows' => 2,
			'teeny' => TRUE,
			'media_buttons' => FALSE,
		) );

	}

	/**
	 * Generates metabox content for pupil workshop key info
	 *
	 * @since 	1.0.0
	 * @access 	public
	 * @return 	void
	 */
	public function ldnclc_plugin_metabox_pupil_workshop_materials( $post ) {
	    $materials = get_post_meta( $post->ID , 'ldnclc-materials');
		
		include_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/partials/ldnclc-plugin-metabox-materials.php';
		
	}

	

}