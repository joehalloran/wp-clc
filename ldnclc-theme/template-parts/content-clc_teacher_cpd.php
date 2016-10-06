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

$terms = get_the_terms($post, 'clc_teacher_cpd_type');
$dataCat = '';
foreach ($terms as $term) {
	$dataCat .= $term->name.' ';
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
				<!-- PRICE --> 

				<div class="cpd-box-icon">
					<i class="fa fa-asterisk clc-dark-orange"></i> 
				</div> 
				<p class="tech-support-title"><?php echo ( isset (  $coursePrice  ) ) ?  '<strong>Price: </strong>'.esc_html($coursePrice)  : _e("Price on enquiry", 'ldnclc') ;?></p> 
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
				<a class="btn btn-primary" target="_blank" href="https://docs.google.com/a/lambethclc.org.uk/forms/d/1e1TAkDcN2RlxSTEbamirDDgoGc3aWggoTvanVbPCxTw/viewform" role="button">Book Now</a> 
			<div id="using-wordpress-for-tas"></div>
			</div> 
		</div> 
	</div>
</article><!-- #post-## -->
