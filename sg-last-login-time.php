<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.facebook.com/sahilgulati007
 * @since             1.0.0
 * @package           Sg_Last_Login_Time
 *
 * @wordpress-plugin
 * Plugin Name:       Last Login Time 
 * Plugin URI:        https://www.facebook.com/sgsoftwaresolutions.in
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Sahil Gulati
 * Author URI:        https://www.facebook.com/sahilgulati007
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       sg-last-login-time
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'SG_LAST_LOGIN_TIME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-sg-last-login-time-activator.php
 */
function activate_sg_last_login_time() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sg-last-login-time-activator.php';
	Sg_Last_Login_Time_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-sg-last-login-time-deactivator.php
 */
function deactivate_sg_last_login_time() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sg-last-login-time-deactivator.php';
	Sg_Last_Login_Time_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_sg_last_login_time' );
register_deactivation_hook( __FILE__, 'deactivate_sg_last_login_time' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-sg-last-login-time.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_sg_last_login_time() {

	$plugin = new Sg_Last_Login_Time();
	$plugin->run();

}
run_sg_last_login_time();
