<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ldnclc_theme
 */

$workshopCode = get_post_meta( $post->ID , 'pupil-workshop-key-info-code', true);
$workshopLocation = get_post_meta( $post->ID , 'pupil-workshop-key-info-location', true);
$workshopDuration = get_post_meta( $post->ID , 'pupil-workshop-key-info-duration', true);
$workshopKeyStage = get_post_meta( $post->ID , 'pupil-workshop-key-info-key-stage', true);

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="cpd-box"> 
		<h2 class="cpd-title">
			<a href="<?php echo get_the_permalink(); ?>"><? echo get_the_title(); ?></a></h2> 
		<hr class="tech-support-hr"> 
		<div class="row"> 
			<!-- ICONS Section -->
			<div class="col-sm-4"> 

				<!-- DATE --> 
				<div class="cpd-box-icon">
					<i class="fa fa-asterisk clc-light-blue"></i> 
				</div> 
				<p class="tech-support-title">
					<strong>Code:</strong> <?php echo ( isset (  $workshopCode  ) ) ?  esc_html($workshopCode)  : _e("N/A", 'ldnclc') ;?>
				</p>
				<hr class="tech-support-hr"> 

				<!-- TIME --> 
				<div class="cpd-box-icon">
					<i class="fa fa-asterisk clc-green"></i> 
				</div> 
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
				<!-- PRICE --> 

				<div class="cpd-box-icon">
					<i class="fa fa-asterisk clc-dark-orange"></i> 
				</div> 
				<p class="tech-support-title"><strong>Duration:</strong> <?php echo ( isset (  $workshopDuration  ) ) ?  esc_html($workshopDuration)  : _e("Tbc", 'ldnclc') ;?></p> 
				<hr class="tech-support-hr"> 
				
				<!-- CODE --> 
				<div class="cpd-box-icon">
					<i class="fa fa-asterisk clc-light-orange"></i> 
				</div> 
				<p class="tech-support-title"><strong>Location:</strong> <?php echo ( isset (  $workshopLocation  ) ) ?  esc_html($workshopLocation) : _e("Tbc", 'ldnclc') ;?></p> 
				<hr class="tech-support-hr"> 

			</div> 
			<!-- MAIN TEXT --> 
			<div class="col-sm-8"> 

				<p class="cpd-preview-text"><?php echo get_the_excerpt(); ?></p>
				<a class="btn btn-primary cpd-button" href="<?php echo get_the_permalink(); ?>" role="button">More info</a>
				<a class="btn btn-primary" target="_blank" href="https://docs.google.com/a/lambethclc.org.uk/forms/d/1e1TAkDcN2RlxSTEbamirDDgoGc3aWggoTvanVbPCxTw/viewform" role="button">Book Now</a> 
			<div id="using-wordpress-for-tas"></div>
			</div> 
		</div> 
	</div>
</article><!-- #post-## -->
