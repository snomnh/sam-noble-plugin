<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://ld50design.net
 * @since             1.0.0
 * @package           Sam_Noble_Plugin
 *
 * @wordpress-plugin
 * Plugin Name:       Sam Noble Museum WordPress Plugin
 * Plugin URI:        http://samnoblemuseum.ou.edu
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Matt DeHart
 * Author URI:        http://ld50design.net
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       sam-noble-plugin
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-sam-noble-plugin-activator.php
 */
function activate_sam_noble_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sam-noble-plugin-activator.php';
	Sam_Noble_Plugin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-sam-noble-plugin-deactivator.php
 */
function deactivate_sam_noble_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sam-noble-plugin-deactivator.php';
	Sam_Noble_Plugin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_sam_noble_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_sam_noble_plugin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-sam-noble-plugin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_sam_noble_plugin() {

	$plugin = new Sam_Noble_Plugin();
	$plugin->run();

}
run_sam_noble_plugin();


/**
 * Include the files that deal with custom WordPress structures such
 * as post types and taxonomies.
 *
 * @since    1.1.0
 */
require_once plugin_dir_path( __FILE__ ) . '\\structures\\sam-noble-structures.php';