<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.facebook.com/sahilgulati007
 * @since      1.0.0
 *
 * @package    Sg_Last_Login_Time
 * @subpackage Sg_Last_Login_Time/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Sg_Last_Login_Time
 * @subpackage Sg_Last_Login_Time/includes
 * @author     Sahil Gulati <sgwebsol@gmail.com>
 */
class Sg_Last_Login_Time_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'sg-last-login-time',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
