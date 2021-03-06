<?php
/**
 * The metabox-specific saving functionality of the plugin. Including data validation.
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
	 * Saves the data from the metabox. Triggered by 'save_post' in ../includes/class-ldnclc-plugin.php -> define_metabox_save_hooks().
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

	    // Run save methods.
	    $this->ldnclc_plugin_save_pupil_workshop_key_info( $post_id ) ;

	    $this->ldnclc_plugin_save_teacher_cpd_key_info( $post_id ) ;

	    $this->ldnclc_plugin_save_outcomes( $post_id ) ;

		$this->ldnclc_plugin_save_pupil_workshop_materials( $post_id ) ;
			
	}

	/**
	 * Saves the data from the pupil workshop key info metabox. Triggered by this->ldnclc_plugin_meta_save.
	 *
	 * @since 	1.0.0
	 * @access 	protected
	 * @return 	void
	 */
	protected function ldnclc_plugin_save_pupil_workshop_key_info( $post_id ) {
		// Pupil workshop code
		if( isset( $_POST[ 'pupil-workshop-key-info-code' ] ) ) {
			$value = sanitize_text_field($_POST[ 'pupil-workshop-key-info-code' ]);
			update_post_meta( $post_id, 'pupil-workshop-key-info-code', $value );
		}

		// Pupil workshop location
		if( isset( $_POST[ 'pupil-workshop-key-info-location' ] ) ) {
			$value = sanitize_text_field($_POST[ 'pupil-workshop-key-info-location' ]);
		    update_post_meta( $post_id, 'pupil-workshop-key-info-location', $value );
		}

		// Pupil workshop duration
		if( isset( $_POST[ 'pupil-workshop-key-info-duration' ] ) ) {
			$value = sanitize_text_field($_POST[ 'pupil-workshop-key-info-duration' ]);
		    update_post_meta( $post_id, 'pupil-workshop-key-info-duration', $value );
		}

		// Pupil workshop Key stage
		if( isset( $_POST[ 'pupil-workshop-key-info-key-stage' ] ) ) {
			// $values is an array;
			$values = $_POST[ 'pupil-workshop-key-info-key-stage' ];
			foreach ($values as $key => $value) {
				$values[$key] = sanitize_text_field($value);
			}
		    update_post_meta( $post_id, 'pupil-workshop-key-info-key-stage', $values );
		}

	}

	/**
	 * Saves the data from the teacher cpd key info metabox. Triggered by 'ldnclc_plugin_meta_save'.
	 *
	 * @since 	1.0.0
	 * @access 	protected
	 * @return 	void
	 */
	protected function ldnclc_plugin_save_teacher_cpd_key_info( $post_id ) {
		// Checks for input and saves if needed
		
		// Teacher CPD code
		if( isset( $_POST[ 'teacher-cpd-key-info-code' ] ) ) {
			$value = sanitize_text_field($_POST[ 'teacher-cpd-key-info-code' ]);
		    update_post_meta( $post_id, 'teacher-cpd-key-info-code', $value );
		}

		// Teacher CPD location
		if( isset( $_POST[ 'teacher-cpd-key-info-location' ] ) ) {
			$value = sanitize_text_field($_POST[ 'teacher-cpd-key-info-location' ]);
		    update_post_meta( $post_id, 'teacher-cpd-key-info-location', $value );
		    // If checked and other text set, save 
		    if ( "Other" === $_POST[ 'teacher-cpd-key-info-location' ] && isset( $_POST[ 'teacher-cpd-key-info-location-other' ] ) ) {
		    	$value = sanitize_text_field($_POST[ 'teacher-cpd-key-info-location-other' ]);
		    	update_post_meta( $post_id, 'teacher-cpd-key-info-location-other', $value );
		    }
		}

		// Teacher CPD date
		if( isset( $_POST[ 'teacher-cpd-key-info-date' ] ) ) {
			$value = sanitize_text_field($_POST[ 'teacher-cpd-key-info-date' ]);
		    update_post_meta( $post_id, 'teacher-cpd-key-info-date', $value );
		}

		// Teacher CPD start time
		if( isset( $_POST[ 'teacher-cpd-key-info-start-time' ] ) ) {
			$value = sanitize_text_field($_POST[ 'teacher-cpd-key-info-start-time' ]);
		    update_post_meta( $post_id, 'teacher-cpd-key-info-start-time', $value );
		}

		// Teacher CPD end time
		if( isset( $_POST[ 'teacher-cpd-key-info-end-time' ] ) ) {
			$value = sanitize_text_field($_POST[ 'teacher-cpd-key-info-end-time' ]);
		    update_post_meta( $post_id, 'teacher-cpd-key-info-end-time', $value );
		}

		// Teacher CPD price
		if( isset( $_POST[ 'teacher-cpd-key-info-price' ] ) ) {
			$value = $_POST[ 'teacher-cpd-key-info-price' ];
			$acceptedValues = array("free", "halfday", "fullday", "extended");
			if ( in_array($value, $acceptedValues) ) {
			    update_post_meta( $post_id, 'teacher-cpd-key-info-price', $value );
			}
		}

		// Teacher CPD relevant key stage
		if( isset( $_POST[ 'teacher-cpd-key-info-key-stage' ] ) ) {
			// $values is an array!
			$values = $_POST[ 'teacher-cpd-key-info-key-stage' ];
			foreach ($values as $key => $value) {
				$values[$key] = sanitize_text_field($value);
			}
	    	update_post_meta( $post_id, 'teacher-cpd-key-info-key-stage', $values );
		}

		// Teacher CPD booking link (EventBrite)
		if( isset( $_POST[ 'teacher-cpd-key-info-booking-link' ] ) ) {
			$value = sanitize_text_field($_POST[ 'teacher-cpd-key-info-booking-link' ]);
		    update_post_meta( $post_id, 'teacher-cpd-key-info-booking-link', $value );
		}

		
	}

	/**
	 * Saves the data from the pupil workshop key info metabox. Triggered by 'ldnclc_plugin_meta_save'.
	 *
	 * @since 	1.0.0
	 * @access 	protected
	 * @return 	void
	 */
	protected function ldnclc_plugin_save_outcomes( $post_id ) {
		// Checks for input and saves if needed
		
		if( isset( $_POST[ 'ldnclc-outcomes' ] ) ) {
			// wp_kses_post allows basic HTML for formatting
			$value = wp_kses_post(  $_POST[ 'ldnclc-outcomes' ]  );
		    update_post_meta( $post_id, 'ldnclc-outcomes', $value );
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
			 
			// If both input values are empty do not overrite values to NULL
			if ( $allItemsNull ) {
			    update_post_meta( $post_id, 'ldnclc-materials',  NULL);
			} else {
				// else save.
				update_post_meta( $post_id, 'ldnclc-materials',  $materials);
			}
		}
	}

}