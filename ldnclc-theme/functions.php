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
	wp_enqueue_style( 'google-fonts-two', 'http://fonts.googleapis.com/css?family=Ubuntu' );
	
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

	/*
	 * Enable html5 on comments.
	 *
	 * https://github.com/ediamin/wp-bootstrap-comment-walker
	 */

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption', 
	) );



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
	// If is post (or cat or archive or search) add link to blog roll

	if ( is_singular( 'teacher_cpd' ) ) {
		$trail .= '<li><a href="' . get_post_type_archive_link( 'teacher_cpd' ) . '">Courses</a></li>';
	} elseif  ( is_single() || is_category() || is_tax() || is_archive() || is_search() ) {
		$trail .= '<li><a href="' . get_permalink( get_option( 'page_for_posts') ) . '">Blog</a></li>';
	}
	 
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
	$trail .= '<li class="active">'.ldnclc_get_page_title().'</li>';
	$trail .= '';
 
	return $trail;	
 
}


/**
 * Register Custom Navigation Walker include custom menu widget to use walkerclass
 */
require_once('inc/wp_bootstrap_navwalker.php');
require_once('inc/bootstrap-custom-menu-widget.php');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Register Custom Navigation Walker include custom menu widget to use walkerclass
 */

register_nav_menus(
    array(
        'main_menu' => 'Main Menu',
    )
);



/**
 * Registers a widget area.
 *
 * 
 */
function ldnclc_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar-1', 'ldnclc' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'ldnclc' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ldnclc_widgets_init' );


function ldnclc_get_page_title() {
	if ( is_home() && ! is_front_page() ) { 
        return single_post_title('', FALSE);
    } elseif ( is_category() or is_tax() ) {
        return single_cat_title('', FALSE);
    } elseif ( is_archive() ) {
       return __( 'Archive ', 'ldnclc' ). '<small>' . esc_html( get_the_archive_title() ) . '</small>' ;
    } elseif ( is_post_type_archive() ) {
        return post_type_archive_title();
    } elseif ( is_search() ) {
        return  __( 'Search Results for: ', 'ldnclc' ). '<small>' . esc_html( get_search_query() ) . '</small>' ;
    } 
    elseif ( is_404() ) {
    	return "Err... something's not right here";
    }else {
        return get_the_title(); 
    } 
}

/**
 * Standard date format
 *
 * 
 */
function ldnclc_format_date($date) {
	$formatDate = strtotime($date);
	$output = date('D jS M Y', $formatDate);
	return $output;
}

/**
 * Standard time format
 *
 * 
 */
function ldnclc_format_time($time) {
	$formatTime = strtotime($time);
	$output = date('g:i A', $formatTime);
	return $output;
}

?>