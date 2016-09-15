<div class="spacer20"></div>
<div class="clc-box">
	<h3>Upcoming courses</h3>
	<hr> 
	<?php 
	$the_query = new WP_Query( array( 
		'posts_per_page' => 2,
		'post_type' => 'teacher_cpd',
		'order'   => 'ASC',
		'orderby'   => 'meta_value',
		'meta_key'  => 'teacher-cpd-key-info-date',
		'meta_value'   => date( "Ymd" ), // change to how "event date" is stored
		'meta_compare' => '>',
	) );

	// The Loop
	if ( $the_query->have_posts() ) {
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			echo '<h4>' . get_the_title() . '</h4>';
			$courseDate	= get_post_meta( $post->ID , 'teacher-cpd-key-info-date', true);
			echo '<p>'.ldnclc_format_date($courseDate).'</p>';
			echo '<p><a class="btn btn-primary" href="' . get_the_permalink() .'" role="button">Find out more</a></p>';
			echo '<hr>';
		}
	} ?>
 
</div>