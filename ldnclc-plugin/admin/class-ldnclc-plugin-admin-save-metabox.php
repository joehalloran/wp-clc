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

class Ldnclc_Plugin_Admin_Save_Metaboxes
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
	 * Saves the data from the metabox. Triggered by 'save_post'.
	 *
	 * @since 	1.0.0
	 * @access 	public
	 * @return 	void
	 */
	public function ldnclc_plugin_meta_save( $post_id ) {
 
	    // Checks save status
	    $is_autosave = wp_is_post_autosave( $post_id );
	    $is_revision = wp_is_post_revision( $post_id );
	    $is_valid_nonce = ( isset( $_POST[ 'prfx_nonce' ] ) && wp_verify_nonce( $_POST[ 'prfx_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
	 
	    // Exits script depending on save status
	    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
	        return;
	    }

	    $this->ldnclc_plugin_save_pupil_workshop_key_info( $post_id ) ;

	    $this->ldnclc_plugin_save_pupil_workshop_what_next( $post_id ) ;

		$this->ldnclc_plugin_save_pupil_workshop_materials( $post_id ) ;
			
	}

	/**
	 * Saves the data from the pupil workshop key info metabox. Triggered by 'ldnclc_plugin_meta_save'.
	 *
	 * @since 	1.0.0
	 * @access 	protected
	 * @return 	void
	 */
	protected function ldnclc_plugin_save_pupil_workshop_key_info( $post_id ) {
		// Checks for input and saves if needed
		
		if( isset( $_POST[ 'pupil-workshop-key-info-code' ] ) ) {
			$value = sanitize_text_field($_POST[ 'pupil-workshop-key-info-code' ]);
		    update_post_meta( $post_id, 'pupil-workshop-key-info-code', $value );
		}

		if( isset( $_POST[ 'pupil-workshop-key-info-location' ] ) ) {
			$value = sanitize_text_field($_POST[ 'pupil-workshop-key-info-location' ]);
		    update_post_meta( $post_id, 'pupil-workshop-key-info-location', $value );
		}
		if( isset( $_POST[ 'pupil-workshop-key-info-duration' ] ) ) {
			$value = sanitize_text_field($_POST[ 'pupil-workshop-key-info-duration' ]);
		    update_post_meta( $post_id, 'pupil-workshop-key-info-duration', $value );
		}

		if( isset( $_POST[ 'pupil-workshop-key-info-key-stage' ] ) ) {
			$value = sanitize_text_field($_POST[ 'pupil-workshop-key-info-key-stage' ]);
		    update_post_meta( $post_id, 'pupil-workshop-key-info-key-stage', $value );
		}
	}

	/**
	 * Saves the data from the pupil workshop key info metabox. Triggered by 'ldnclc_plugin_meta_save'.
	 *
	 * @since 	1.0.0
	 * @access 	protected
	 * @return 	void
	 */
	protected function ldnclc_plugin_save_pupil_workshop_what_next( $post_id ) {
		// Checks for input and saves if needed
		
		if( isset( $_POST[ 'pupil-workshop-what-next' ] ) ) {
			$value = wp_kses_post(  $_POST[ 'pupil-workshop-what-next' ]  );
		    update_post_meta( $post_id, 'pupil-workshop-what-next', $value );
		}
	}

	/**
	 * Saves the data from the pupil workshop materials metabox. Triggered by 'ldnclc_plugin_meta_save'.
	 *
	 * @since 	1.0.0
	 * @access 	protected
	 * @return 	void
	 */
	protected function ldnclc_plugin_save_pupil_workshop_materials( $post_id ) {
		// Checks for input and saves if needed
		
		if( isset( $_POST[ 'ldnclc-materials' ] ) ) {
			$materials = $_POST[ 'ldnclc-materials' ];
			$allItemsNull  = TRUE; // Assume the input is empty;
			
			// Loop through the array structure
			
       		foreach ($materials['title'] as $key => $value) {
       			if ( !(FALSE == $value && FALSE == $materialItem['media'][$key]) ){
					$allItemsNull = FALSE; //set value to false if item found
				} 
				// sanitize
       			$materials['title'][$key] = sanitize_text_field($value);
       			$materials['media'][$key] = esc_url_raw($materials['media'][$key]);
				
			}
			 

			if ( $allItemsNull ) {
			    update_post_meta( $post_id, 'ldnclc-materials',  NULL);
			} else {
				update_post_meta( $post_id, 'ldnclc-materials',  $materials);
			}
		}
	}

}