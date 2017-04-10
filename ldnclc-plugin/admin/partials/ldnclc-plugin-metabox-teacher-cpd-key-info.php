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
<!-- Course code -->

<p>
	<label for="teacher-cpd-key-info-code"><?php _e( 'Course code: ', 'ldnclc-plugin' ); ?></label><br />
	<input type="text" name="teacher-cpd-key-info-code" value="<?php echo ( isset (  $courseCode  ) ) ?  esc_html($courseCode)  : " " ;?> " /> 
</p>
<!-- Course location input -->
<p>
	<label for="teacher-cpd-key-info-location"><?php _e( 'Course location: ', 'ldnclc-plugin' ); ?></label><br />
	<input type="radio" name="teacher-cpd-key-info-location" <?php echo (($courseLocation == "CLC") ? 'checked="checked" ' : " ") ;?>value="CLC">CLC<br />
	<input type="radio" name="teacher-cpd-key-info-location" <?php echo (($courseLocation == "In school") ? 'checked="checked" ' : " ") ;?>value="In school">In school<br />
	<input type="radio" name="teacher-cpd-key-info-location" <?php echo (($courseLocation == "Other") ? 'checked="checked" ' : " ");?> value="Other"> Other 
	<input type="text" name="teacher-cpd-key-info-location-other" placeholder="Other" value="<?php echo (($courseLocation == "Other") ? esc_html($courseLocationOther) : " ");?>" />​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​
  </p>
		
<!-- Course time input -->
<p>
	<label for="teacher-cpd-key-info-start-time"><?php _e( 'Course start time: ', 'ldnclc-plugin' ); ?></label><br />
	<input type="time" name="teacher-cpd-key-info-start-time" value="<?php echo ( isset (  $courseStartTime  ) ) ? esc_html($courseStartTime) : " " ;?>" /><br />
	<label for="teacher-cpd-key-info-end-time"><?php _e( 'Course end time: ', 'ldnclc-plugin' ); ?></label><br />
	<input type="time" name="teacher-cpd-key-info-end-time" value="<?php echo ( isset (  $courseEndTime  ) ) ? esc_html($courseEndTime) : " " ;?>" /> 
</p>
<!-- Course date input -->
<p>
	<label for="teacher-cpd-key-info-date"><?php _e( 'Course date : ', 'ldnclc-plugin' ); ?></label><br />
	<input type="date" name="teacher-cpd-key-info-date" value="<?php echo ( isset ( $courseDate	) ) ? esc_html($courseDate) : " " ;?>" />
</p>
<!-- Course price -->
<p>
	<label for="teacher-cpd-key-info-price"><?php _e( 'Course Price: ', 'ldnclc-plugin' ); ?></label><br />
	<input type="radio" name="teacher-cpd-key-info-price" <?php echo (($courcePrice == "free") ? 'checked="checked" ' : " ") ;?>value="free">FREE<br />
	<input type="radio" name="teacher-cpd-key-info-price" <?php echo (($courcePrice == "halfday") ? 'checked="checked" ' : " ") ;?>value="halfday">Half day (£50)<br />
	<input type="radio" name="teacher-cpd-key-info-price" <?php echo (($courcePrice == "fullday") ? 'checked="checked" ' : " ") ;?>value="fullday">Full day (£95)<br />
	<input type="radio" name="teacher-cpd-key-info-price" <?php echo (($courcePrice == "extended") ? 'checked="checked" ' : " ") ;?>value="extended">Extended (£125)<br />
</p>
<!-- Course key stage input -->
<p>
	<label for="teacher-cpd-key-info-key-stage"><?php _e( 'Relevant key stage: ', 'ldnclc-plugin' );?></label><br />
	<input type="checkbox" name="teacher-cpd-key-info-key-stage[]" <?php echo ((in_array( "EYFS", $courseKeyStage)) ? 'checked="checked" ' : " ") ;?>value="EYFS"> EYFS<br />
  	<input type="checkbox" name="teacher-cpd-key-info-key-stage[]" <?php echo ((in_array( "KS1", $courseKeyStage)) ? 'checked="checked" ' : " ") ;?> value="KS1"> KS1<br />
  	<input type="checkbox" name="teacher-cpd-key-info-key-stage[]" <?php echo ((in_array( "KS2", $courseKeyStage)) ? 'checked="checked" ' : " ") ;?> value="KS2"> KS2<br />
  	<input type="checkbox" name="teacher-cpd-key-info-key-stage[]" <?php echo ((in_array( "KS3", $courseKeyStage)) ? 'checked="checked" ' : " ") ;?> value="KS3"> KS3<br />
  	<input type="checkbox" name="teacher-cpd-key-info-key-stage[]" <?php echo ((in_array( "KS4", $courseKeyStage)) ? 'checked="checked" ' : " ") ;?> value="KS4"> KS4<br />
 </p>
<!-- Course booking link -->
<p>
	<label for="teacher-cpd-key-info-booking-link"><?php _e( 'Course booking link (EventBrite): ', 'ldnclc-plugin' ); ?></label><br />
	<input type="text" name="teacher-cpd-key-info-booking-link" value="<?php echo ( isset (  $courseBookingLink  ) ) ?  esc_html($courseBookingLink)  : " " ;?> " /> 
</p>
