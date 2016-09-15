<?php
$workshopCode = get_post_meta( $post->ID , 'pupil-workshop-key-info-code', true);
$workshopLocation = get_post_meta( $post->ID , 'pupil-workshop-key-info-location', true);
$workshopDuration = get_post_meta( $post->ID , 'pupil-workshop-key-info-duration', true);
$workshopKeyStage = get_post_meta( $post->ID , 'pupil-workshop-key-info-key-stage', true);
?>

<div class="spacer20"></div>
<div class="clc-box">
	<h3>Course Information</h3>

		<!-- CODE --> 
	<div class="cpd-box-icon">
	<i class="fa fa-asterisk clc-light-orange"></i> 
	</div> 
	<p class="tech-support-title"><strong>Code:</strong> <?php echo ( isset (  $workshopCode  ) ) ?  esc_html($workshopCode)  : _e("N/A", 'ldnclc') ;?></p> 
	<hr class="tech-support-hr">
	
	<!-- <hr class="tech-support-hr"> -->
	<div class="cpd-box-icon">
		<i class="fa fa-asterisk clc-dark-blue"></i> 
	</div> 
	<!-- Key stage -->
	<p class="tech-support-title">
		<strong>For pupils in: </strong>
		<?php 
		
		foreach($workshopKeyStage as $value) {
			echo esc_html($value);
			if ( !($value === end($workshopKeyStage)) ) {
				echo ', ';
			}
		}
		?> 
		
		           	
	</p> 
	<hr class="tech-support-hr"> 

	<!-- <hr class="tech-support-hr"> -->
	<div class="cpd-box-icon">
		<i class="fa fa-asterisk clc-light-blue"></i> 
	</div> 
	<!-- TIME --> 
	<div class="cpd-box-icon">
		<i class="fa fa-asterisk clc-green"></i> 
	</div> 
	<p class="tech-support-title"><strong>Duration:</strong> <?php echo ( isset (  $workshopDuration  ) ) ?  esc_html($workshopDuration)  : _e("Tbc", 'ldnclc') ;?></p> 
	<hr class="tech-support-hr"> 

	<!-- VENUE --> 
	<div class="cpd-box-icon">
		<i class="fa fa-asterisk clc-orange"></i> 
	</div> 
	<p class="tech-support-title"><strong>Location:</strong> <?php echo ( isset (  $workshopLocation  ) ) ?  esc_html($workshopLocation)  : _e("Tbc", 'ldnclc') ;?></p>  
	<hr class="tech-support-hr"> 

	<!-- Book now -->
	<a style="margin-top: 10px; margin-left: 17px;" class="btn btn-primary" target="_blank" href="https://docs.google.com/a/lambethclc.org.uk/forms/d/1e1TAkDcN2RlxSTEbamirDDgoGc3aWggoTvanVbPCxTw/viewform" role="button">Book Now</a> 
</div>