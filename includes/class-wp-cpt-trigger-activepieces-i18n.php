<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://https://github.com/MondeLionel
 * @since      1.0.0
 *
 * @package    Wp_Cpt_Trigger_Activepieces
 * @subpackage Wp_Cpt_Trigger_Activepieces/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Cpt_Trigger_Activepieces
 * @subpackage Wp_Cpt_Trigger_Activepieces/includes
 * @author     VagrantJin <lionelnyawose@gmail.com>
 */
class Wp_Cpt_Trigger_Activepieces_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-cpt-trigger-activepieces',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
