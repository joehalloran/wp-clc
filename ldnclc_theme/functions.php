<?php 

##### Function to load additional scripts ######
function ldnclc_scripts() {
	// Deregister jquery to load in footer
	wp_deregister_script( 'jquery' );
    // Register and load jquery in footer
    wp_register_script( 'jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"), false, NULL, true );
    // Font Awesome, required for star rating functions
	wp_enqueue_script('font-awesome', 'https://use.fontawesome.com/322889a4a3.js');
	// Enqueue bootstrap javascript
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '1.0.0', true );
	// Enqueue custom css:
	// Load main stylesheet:
	wp_enqueue_style( 'ldnclc-style', get_stylesheet_uri() );
	// Load google fonts stylesheet.
	wp_enqueue_style( 'google-fonts', 'http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic' );
	
}
add_action( 'wp_enqueue_scripts', 'ldnclc_scripts' );

####### Theme set-up function #############
if ( ! function_exists( 'ldnclc_setup' ) ) :
/**
 * Sets up theme defaults.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 */
function ldnclc_setup() {

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	load_theme_textdomain( 'ldnclc', get_template_directory() . '/languages' );



}
endif; // ldnclc_setup
add_action( 'after_setup_theme', 'ldnclc_setup' );


/**
 * Generates Breadcrunmbs
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 */
function get_breadcrumbs() {
 
	global $post;
 	
 	// Add home link
	$trail = '<li><a href="' . home_url() . '">Home</a></li>';
	// If single post add link to blog roll
	$trail .= ( is_single() ) ? '<li><a href="' . get_permalink( get_option( 'page_for_posts') ) . '">Blog</a></li>' : '' ;
	$page_title = get_the_title($post->ID);
 
 	// Get all parent pages
	if($post->post_parent) {
		$parent_id = $post->post_parent;
 
		while ($parent_id) {
			$page = get_page($parent_id);
			$breadcrumbs[] = '<li><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
			$parent_id = $page->post_parent;
		}
 
		$breadcrumbs = array_reverse($breadcrumbs);
		foreach($breadcrumbs as $crumb) $trail .= $crumb;
	}
 
 	// Add current page
	$trail .= '<li class="active">'.$page_title.'</li>';
	$trail .= '';
 
	return $trail;	
 
}


/**
 * Register Custom Navigation Walker include custom menu widget to use walkerclass
 */
require_once('inc/wp_bootstrap_navwalker.php');
require_once('inc/bootstrap-custom-menu-widget.php');


/**
 * Register Custom Navigation Walker include custom menu widget to use walkerclass
 */

register_nav_menus(
    array(
        'main_menu' => 'Main Menu',
    )
);

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

?>