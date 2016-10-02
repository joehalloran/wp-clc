<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ldnclc_theme
 */


$materials = get_post_meta( $post->ID , 'ldnclc-materials');

$terms = get_the_terms($post, 'resources_type');
$dataCat = '';
foreach ($terms as $term) {
	$dataCat .= $term->name.' ';
}

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> data-category="<?php echo trim($dataCat); ?>">
	<div class="cpd-box"> 
		<h2>
			<a href="<?php echo get_the_permalink(); ?>"><? echo get_the_title(); ?></a>
		</h2> 
		<hr class="tech-support-hr"> 
		<p class="cpd-preview-text"><?php echo get_the_excerpt(); ?></p>
		<?php
		if ( is_user_logged_in() ) {
			foreach ($materials as $materialItem) {
		        foreach ($materialItem['title'] as $key => $value) {
		            
		            //if either item empty, skip line
		            if ( (FALSE == $value || FALSE == $materialItem['media'][$key]) ){
		                continue;
		            }  

		            echo '<p class="materials-text"><a target="_blank" href="'.esc_url($materialItem['media'][$key]).'"><span class="glyphicon glyphicon-download" aria-hidden="true"></span> '.esc_html($value).'</a></p>';

		        }
		    }
		} else {
			echo '<a class="btn btn-primary cpd-button" href="'. get_the_permalink().'" role="button">More info</a>';		
		}
	    ?>
	</div>
</article><!-- #post-## -->
