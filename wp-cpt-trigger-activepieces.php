<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://https://github.com/MondeLionel
 * @since             1.0.0
 * @package           Wp_Cpt_Trigger_Activepieces
 *
 * @wordpress-plugin
 * Plugin Name:       WP Custom Post trigger for Activepieces
 * Plugin URI:        https://https://github.com/MondeLionel/wp-cpt-trigger
 * Description:       A lightweight WordPress plugin that enables you to select Custom Post Types as triggers for Activepieces integration. This plugin seamlessly connects your custom content with Activepieces automation workflows, enhancing your site's functionality without bloating your WordPress installation.
 * Version:           1.0.0
 * Author:            VagrantJin
 * Author URI:        https://https://github.com/MondeLionel/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-cpt-trigger-activepieces
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
define( 'WP_CPT_TRIGGER_ACTIVEPIECES_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-cpt-trigger-activepieces-activator.php
 */
function activate_wp_cpt_trigger_activepieces() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-cpt-trigger-activepieces-activator.php';
	Wp_Cpt_Trigger_Activepieces_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-cpt-trigger-activepieces-deactivator.php
 */
function deactivate_wp_cpt_trigger_activepieces() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-cpt-trigger-activepieces-deactivator.php';
	Wp_Cpt_Trigger_Activepieces_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_cpt_trigger_activepieces' );
register_deactivation_hook( __FILE__, 'deactivate_wp_cpt_trigger_activepieces' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-cpt-trigger-activepieces.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_cpt_trigger_activepieces() {

	$plugin = new Wp_Cpt_Trigger_Activepieces();
	$plugin->run();

}
run_wp_cpt_trigger_activepieces();
