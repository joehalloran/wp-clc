<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://londonclc.org.uk
 * @since             1.0.0
 * @package           ldnclc_plugin
 *
 * @wordpress-plugin
 * Plugin Name:       London CLC Plugin
 * Plugin URI:        http://example.com/ldnclc-plugin-uri/
 * Description:       A custom plugin for London CLC that creates 4 custom content types for: pupil workshops, resources, clc based teacher cpd, and in school cpd. This also includes custom metaboxes for admin screen.
 * Version:           1.0.0
 * Author:            Joe Halloran - London CLC
 * Author URI:        http://londonclc.org.uk
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ldnclc-plugin
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-ldnclc-plugin-activator.php
 */
function activate_ldnclc_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ldnclc-plugin-activator.php';
	ldnclc_plugin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-ldnclc-plugin-deactivator.php
 */
function deactivate_ldnclc_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ldnclc-plugin-deactivator.php';
	Ldnclc_Plugin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_ldnclc_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_ldnclc_plugin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-ldnclc-plugin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_ldnclc_plugin() {

	$plugin = new Ldnclc_Plugin();
	$plugin->run();

}
run_ldnclc_plugin();
