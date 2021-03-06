<?php
$courseCode = get_post_meta( $post->ID , 'teacher-cpd-key-info-code', true);
$courseLocation = get_post_meta( $post->ID , 'teacher-cpd-key-info-location', true);
$courseLocationOther = get_post_meta( $post->ID , 'teacher-cpd-key-info-location-other', true);
//$courseDate	= get_post_meta( $post->ID , 'teacher-cpd-key-info-date', true);
//$courseStartTime = get_post_meta( $post->ID , 'teacher-cpd-key-info-start-time', true);
//$courseEndTime = get_post_meta( $post->ID , 'teacher-cpd-key-info-end-time', true);
$coursePrice = get_post_meta( $post->ID , 'teacher-cpd-key-info-price', true);
$courseKeyStage = get_post_meta( $post->ID , 'teacher-cpd-key-info-key-stage', true);
?>

<div class="spacer20"></div>
<div class="clc-box">
	<h3>Course Information</h3>
	<!-- <hr class="tech-support-hr"> -->
	<div class="cpd-box-icon">
		<i class="fa fa-asterisk clc-dark-blue"></i> 
	</div> 

	<!-- Key stage -->
	<p class="tech-support-title">

		For
		<?php 
		
		foreach($courseKeyStage as $value) {
			echo esc_html($value);
			if ( !($value === end($courseKeyStage)) ) {
				echo ', ';
			}
		}
		?> 
		teachers
		           	
	</p> 
	<hr class="tech-support-hr"> 

	<!-- <hr class="tech-support-hr"> -->
	<div class="cpd-box-icon">
		<i class="fa fa-asterisk clc-light-blue"></i> 
	</div> 

	<!-- VENUE --> 
	<div class="cpd-box-icon">
		<i class="fa fa-asterisk clc-orange"></i> 
	</div> 
	<p class="tech-support-title">In school</p> 
	<hr class="tech-support-hr"> 

	<!-- PRICE --> 
	<div class="cpd-box-icon">
		<i class="fa fa-asterisk clc-dark-orange"></i> 
	</div> 
	<p class="tech-support-title"><?php echo !empty($coursePrice) ? '<strong>Price: </strong>'.esc_html($coursePrice)  : _e("Price on enquiry", 'ldnclc') ;?></p> 
	<hr class="tech-support-hr"> 

	<!-- CODE --> 
	<div class="cpd-box-icon">
	<i class="fa fa-asterisk clc-light-orange"></i> 
	</div> 
	<p class="tech-support-title"><strong>Code:</strong> <?php echo ( isset (  $courseCode  ) ) ?  esc_html($courseCode) : _e("N/A", 'ldnclc') ;?></p> 
	<hr class="tech-support-hr">

	<!-- Book now -->
	<a style="margin-top: 10px; margin-left: 17px;" class="btn btn-primary" target="_blank" href="https://docs.google.com/a/lambethclc.org.uk/forms/d/1e1TAkDcN2RlxSTEbamirDDgoGc3aWggoTvanVbPCxTw/viewform" role="button">Book Now</a> 
</div>