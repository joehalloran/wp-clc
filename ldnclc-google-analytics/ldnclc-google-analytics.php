<?php
/*
 * Plugin Name: LdnCLC Google Analytics
 * Plugin URI: https://www.londonclc.org.uk
 * Description: Adds a Google analytics trascking code to the <head> of your theme, by hooking to wp_head.
 * Version: 1.0
 * Author: Joe Halloran
 * Author URI: 
 * License: GPL2
 *
 * @package ldnclc-google-analytics
 * @copyright Copyright (c) 2016, London Connected Learning Centre
 * @license GPL2+
*/

function ldnclc_google_analytics() { ?>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-55159530-1', 'auto');
	  ga('send', 'pageview');

	</script>
<?php }
add_action( 'wp_head', 'ldnclc_google_analytics', 10 );