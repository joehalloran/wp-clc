<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ldnclc_theme
 */

$terms = get_terms( array(
    'taxonomy' => 'pupil_workshop_type',
    'hide_empty' => true,
) );

?>

<aside>
	<div class="cpd-box"> 
		<h2 class="cpd-title">Filters <small>showing <span id="filter-results">all</span> items</small></h2> 
		<hr class="tech-support-hr">
		<?php
		foreach ($terms as $term) {
			
			$termName = $term->name;
			?>
			<div class="checkbox" >
			    <label>
			      <input data-filter="<?php echo esc_attr($termName); ?>" class="cpt-filter" type="checkbox" checked> <?php echo esc_html($termName); ?>
			    </label>
			  </div>
		<?php
		}
		?>
		<a href="#" id="select-all">Select all</a>	
		<a href="#" id="clear-all">Clear all</a>		
	</div>
</aside>
