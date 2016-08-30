<?php
/**
 * Template for displaying search forms in ldnclc custom theme
 * 
 * @package ldnclc_theme
 * 
 */
?>

<form role="search" method="get" class="form-inline search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="form-group">
		<label class="sr-only"><?php echo _x( 'Search for:', 'label', 'ldnclc' ); ?></label>
		<input type="search" class="search-field form-control" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'ldnclc' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
		<button type="submit" class="search-submit btn btn-primary"><span class="sr-only"><?php echo _x( 'Search', 'submit button', 'ldnclc' ); ?></span><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
	</div> <!-- /.form-group -->
</form>
