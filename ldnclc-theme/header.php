<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ldnclc_theme
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="<?php bloginfo('description'); ?> ">
	    <meta name="author" content="London Connected Learning Centre">
	    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">
	    <link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	    <?php
	    if ( is_admin_bar_showing() ) {
	        ?>
	          <style>
	          .navbar-fixed-top {
	            margin-top: 32px;
	          }
	          </style>
        <?php
	    }
	    ?>
		<?php wp_head(); ?>
	</head>

<body>

     <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="<?php echo site_url(); ?>">London CLC</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->

    <?php
	    wp_nav_menu( array(
	            'theme_location'    => 'main_menu',
	            'depth'             => 2,
	            'container'         => 'nav',
	            'container_class'   => 'collapse navbar-collapse navbar-1-collapse',
	            'menu_class'        => 'nav navbar-nav navbar-right',
	            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
	            'walker'            => new wp_bootstrap_navwalker())
	    );
	    ?>
	    </div>
        </nav>

