<?php
/**
 * The metabox-specific functionality of the plugin.
 *
 * @link 		http://slushman.com
 * @since 		1.0.0
 *
 * @package 	Now_Hiring
 * @subpackage 	Now_Hiring/admin
 */
/**
 * The metabox-specific functionality of the plugin.
 *
 * @package 	Now_Hiring
 * @subpackage 	Now_Hiring/admin
 * @author 		Slushman <chris@slushman.com>
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
	        'normal', //context
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
		
		// Begin output	
		$html = '';

		// Workshop code input
		$html .= '<p><label for="meta-pupil-workshop-code">'. __( 'Workshop code: ', 'ldnclc-plugin' ).'</label>';
		$html .= '<input type="text" name="pupil-workshop-key-info-code" value="';
		if ( isset ( $workshopCode ) ) {
			$html.= $workshopCode;
		}
		$html .= '" />';

		// Workshop location input
		$html .= '<p><label for="pupil-workshop-key-info-location">'. __( 'Workshop location: ', 'ldnclc-plugin' ).'</label><br />';
		$html .= '<input type="radio" name="pupil-workshop-key-info-location" ' .(($workshopLocation == "CLC") ? 'checked="checked" ' : " ") .'value="CLC">CLC<br />';
  		$html .= '<input type="radio" name="pupil-workshop-key-info-location" ' .(($workshopLocation == "In school") ? 'checked="checked" ' : " ") .' value="In school"> In school<br />';
  		$html .= '<input type="radio" name="pupil-workshop-key-info-location" ' .(($workshopLocation == "CLC or in school") ? 'checked="checked" ' : " ") .' value="CLC or in school"> CLC or in school';
		
		// Workshop duration input
		$html .= '<p><label for="pupil-workshop-key-info-duration">'. __( 'Workshop duration: ', 'ldnclc-plugin' ).'</label><br />';
		$html .= '<input type="radio" name="pupil-workshop-key-info-duration" ' .(($workshopDuration == "Full day") ? 'checked="checked" ' : " ") .'value="Full day">Full day<br />';
  		$html .= '<input type="radio" name="pupil-workshop-key-info-duration" ' .(($workshopDuration == "Half day") ? 'checked="checked" ' : " ") .' value="Half day"> Half day<br />';
  		$html .= '<input type="radio" name="pupil-workshop-key-info-duration" ' .(($workshopDuration == "Full or half day") ? 'checked="checked" ' : " ") .' value="Full or half day"> Full or half day';;

  		// Workshop keystage input
		$html .= '<p><label for="pupil-workshop-key-info-key-stage">'. __( 'Workshop key stage: ', 'ldnclc-plugin' ).'</label><br />';
		$html .= '<input type="radio" name="pupil-workshop-key-info-key-stage" ' .(($workshopKeyStage == "EYFS") ? 'checked="checked" ' : " ") .'value="EYFS"> EYFS<br />';
  		$html .= '<input type="radio" name="pupil-workshop-key-info-key-stage" ' .(($workshopKeyStage == "KS1") ? 'checked="checked" ' : " ") .' value="KS1"> KS1<br />';
  		$html .= '<input type="radio" name="pupil-workshop-key-info-key-stage" ' .(($workshopKeyStage == "Lower KS2") ? 'checked="checked" ' : " ") .' value="Lower KS2"> Lower KS2<br />';
  		$html .= '<input type="radio" name="pupil-workshop-key-info-key-stage" ' .(($workshopKeyStage == "Upper KS2") ? 'checked="checked" ' : " ") .' value="Upper KS2"> Upper KS2<br />';
  		$html .= '<input type="radio" name="pupil-workshop-key-info-key-stage" ' .(($workshopKeyStage == "KS2") ? 'checked="checked" ' : " ") .' value="KS2"> KS2<br />';

		echo $html;
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
	    		
		// Workshop what next 0th item
		// $html .= '<p><label for="pupil-workshop-what-next[0]">'. __( 'What next 1: ', 'ldnclc-plugin' ).'</label><br />';
		// $html .= '<textarea name="pupil-workshop-what-next[0]" rows="3">'; //textarea width set in admin css
		// if ( isset ( $workshopWhatNext[0] ) ) {
		// 	$html.= $workshopWhatNext[0];
		// }
		// $html .= '</textarea>';

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
		    update_post_meta( $post_id, 'pupil-workshop-key-info-code', $_POST[ 'pupil-workshop-key-info-code' ] );
		}

		if( isset( $_POST[ 'pupil-workshop-key-info-location' ] ) ) {
		    update_post_meta( $post_id, 'pupil-workshop-key-info-location', $_POST[ 'pupil-workshop-key-info-location' ] );
		}
		if( isset( $_POST[ 'pupil-workshop-key-info-duration' ] ) ) {
		    update_post_meta( $post_id, 'pupil-workshop-key-info-duration', $_POST[ 'pupil-workshop-key-info-duration' ] );
		}

		if( isset( $_POST[ 'pupil-workshop-key-info-key-stage' ] ) ) {
		    update_post_meta( $post_id, 'pupil-workshop-key-info-key-stage', $_POST[ 'pupil-workshop-key-info-key-stage' ] );
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
		    update_post_meta( $post_id, 'pupil-workshop-what-next', $_POST[ 'pupil-workshop-what-next' ] );
		}
	}

}