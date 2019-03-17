<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://stormwild.github.io/
 * @since      1.0.0
 *
 * @package    Stormwild_Wordpress_Facebook_Plugin
 * @subpackage Stormwild_Wordpress_Facebook_Plugin/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Stormwild_Wordpress_Facebook_Plugin
 * @subpackage Stormwild_Wordpress_Facebook_Plugin/includes
 * @author     Alexander Torrijos <artorrijos@gmail.com>
 */
class Stormwild_Wordpress_Facebook_Plugin_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'stormwild-wordpress-facebook-plugin',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
