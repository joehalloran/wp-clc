<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Ldnclc_Plugin
 * @subpackage Ldnclc_Plugin/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<p>
	<label for="meta-pupil-workshop-code"><?php _e( 'Workshop code: ', 'ldnclc-plugin' ); ?></label><br />
	<input type="text" name="pupil-workshop-key-info-code" value="<?php echo ( isset ( $workshopCode ) ) ? $workshopCode : " " ;?> " /> 
</p>
<!-- Workshop location input -->
<p>
	<label for="pupil-workshop-key-info-location"><?php _e( 'Workshop location: ', 'ldnclc-plugin' ); ?></label><br />
	<input type="radio" name="pupil-workshop-key-info-location" <?php echo (($workshopLocation == "CLC") ? 'checked="checked" ' : " ") ;?>value="CLC">CLC<br />
	<input type="radio" name="pupil-workshop-key-info-location" <?php echo (($workshopLocation == "In school") ? 'checked="checked" ' : " " ) ;?> value="In school"> In school<br />
	<input type="radio" name="pupil-workshop-key-info-location" <?php echo (($workshopLocation == "CLC or in school") ? 'checked="checked" ' : " ");?> value="CLC or in school"> CLC or in school
  </p>
		
<!-- Workshop duration input -->
<p>
	<label for="pupil-workshop-key-info-duration"><?php _e( 'Workshop duration: ', 'ldnclc-plugin' );?></label><br />
	<input type="radio" name="pupil-workshop-key-info-duration" <?php echo (($workshopDuration == "Full day") ? 'checked="checked" ' : " "); ?>value="Full day">Full day<br />
	<input type="radio" name="pupil-workshop-key-info-duration" <?php echo(($workshopDuration == "Half day") ? 'checked="checked" ' : " "); ?> value="Half day"> Half day<br />
	<input type="radio" name="pupil-workshop-key-info-duration" <?php echo(($workshopDuration == "Full or half day") ? 'checked="checked" ' : " "); ?> value="Full or half day"> Full or half day
</p>

<!-- Workshop keystage input -->
<p>
	<label for="pupil-workshop-key-info-key-stage"><?php _e( 'Workshop key stage: ', 'ldnclc-plugin' );?></label><br />
	<input type="radio" name="pupil-workshop-key-info-key-stage" <?php echo (($workshopKeyStage == "EYFS") ? 'checked="checked" ' : " ") ;?>value="EYFS"> EYFS<br />
  	<input type="radio" name="pupil-workshop-key-info-key-stage" <?php echo(($workshopKeyStage == "KS1") ? 'checked="checked" ' : " ") ;?> value="KS1"> KS1<br />
  	<input type="radio" name="pupil-workshop-key-info-key-stage" <?php echo(($workshopKeyStage == "Lower KS2") ? 'checked="checked" ' : " ") ;?> value="Lower KS2"> Lower KS2<br />
  	<input type="radio" name="pupil-workshop-key-info-key-stage" <?php echo(($workshopKeyStage == "Upper KS2") ? 'checked="checked" ' : " ") ;?> value="Upper KS2"> Upper KS2<br />
  	<input type="radio" name="pupil-workshop-key-info-key-stage" <?php echo(($workshopKeyStage == "KS2") ? 'checked="checked" ' : " ") ;?> value="KS2"> KS2<br />
 </p>