<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ldnclc_theme
 */

$courseCode = get_post_meta( $post->ID , 'teacher-cpd-key-info-code', true);
$courseLocation = get_post_meta( $post->ID , 'teacher-cpd-key-info-location', true);
$courseLocationOther = get_post_meta( $post->ID , 'teacher-cpd-key-info-location-other', true);
$courseDate	= get_post_meta( $post->ID , 'teacher-cpd-key-info-date', true);
$courseStartTime = get_post_meta( $post->ID , 'teacher-cpd-key-info-start-time', true);
$courseEndTime = get_post_meta( $post->ID , 'teacher-cpd-key-info-end-time', true);
$coursePrice = get_post_meta( $post->ID , 'teacher-cpd-key-info-price', true);
$courseKeyStage = get_post_meta( $post->ID , 'teacher-cpd-key-info-key-stage', true);
$courseBookingLink = get_post_meta( $post->ID , 'teacher-cpd-key-info-booking-link', true);

$terms = get_the_terms($post, 'clc_teacher_cpd_type');
$dataCat = '';
if ($terms) {
	foreach ($terms as $term) {
		$dataCat .= $term->name.' ';
	}
}

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> data-category="<?php echo trim($dataCat); ?>">
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
					<?php 
					if ( isset (  $courseDate  ) && $courseDate > 0 ) {
						echo ldnclc_format_date($courseDate);
					} else {
						_e("Date: Tbc", 'ldnclc');
					}
					?> 
				</p>
				<hr class="tech-support-hr"> 

				<!-- TIME --> 
				<div class="cpd-box-icon">
					<i class="fa fa-asterisk clc-green"></i> 
				</div> 
				<p class="tech-support-title">
					<?php 
					if ( isset ( $courseStartTime  ) && isset ( $courseEndTime ) ){
						
						echo ldnclc_format_time($courseStartTime);
						
						echo " - ";
						
						echo ldnclc_format_time($courseEndTime);

					} else {

						_e("Time: Tbc", 'ldnclc');
					}
					?> 
				</p> 
				<hr class="tech-support-hr"> 

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

				<!-- PRICE --> 

				<div class="cpd-box-icon">
					<i class="fa fa-asterisk clc-dark-orange"></i> 
				</div> 
				<p class="tech-support-title">
				<strong>Price: </strong> <?php echo ldnclc_cpd_price($coursePrice); ?>
				</p> 
				<hr class="tech-support-hr"> 
				
				<!-- CODE --> 
				<div class="cpd-box-icon">
					<i class="fa fa-asterisk clc-light-orange"></i> 
				</div> 
				<p class="tech-support-title"><strong>Code:</strong> <?php echo ( isset (  $courseCode  ) ) ?  esc_html($courseCode) : _e("N/A", 'ldnclc') ;?></p> 
				<hr class="tech-support-hr"> 

			</div> 
			<!-- MAIN TEXT --> 
			<div class="col-sm-8"> 

				<p class="cpd-preview-text"><?php echo get_the_excerpt(); ?></p>
				<a class="btn btn-primary cpd-button" href="<?php echo get_the_permalink(); ?>" role="button">More info</a>
				<?php 
				if ( !empty( $courseBookingLink ) ) {
					echo '<a class="btn btn-primary" target="_blank" href="'.esc_html($courseBookingLink).'" role="button">Book Now</a>';
				} else {
					echo '<a class="btn btn-primary" target="_blank" href="https://docs.google.com/a/lambethclc.org.uk/forms/d/1e1TAkDcN2RlxSTEbamirDDgoGc3aWggoTvanVbPCxTw/viewform" role="button">Book Now</a>';
				}
				?>
			<div id="using-wordpress-for-tas"></div>
			</div> 
		</div> 
	</div>
</article><!-- #post-## -->
