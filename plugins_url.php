<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              tx-consulting.com
 * @since             1.0.0
 * @package           Plugins_url
 *
 * @wordpress-plugin
 * Plugin Name:      TX-Consulting-super-modal
 * Plugin URI:        tx-consulting.com
 * Description:       Visionneuse PDF 
 * Version:           1.0.0
 * Author:            Bensaad Mohammed
 * Author URI:        tx-consulting.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       plugins_url
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
define( 'PLUGINS_URL_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugins_url-activator.php
 */
function activate_plugins_url() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-plugins_url-activator.php';
	Plugins_url_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugins_url-deactivator.php
 */
function deactivate_plugins_url() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-plugins_url-deactivator.php';
	Plugins_url_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_plugins_url' );
register_deactivation_hook( __FILE__, 'deactivate_plugins_url' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-plugins_url.php';

require_once plugin_dir_path(__FILE__) . 'public/class-plugins_url-public.php';

require_once plugin_dir_path(__FILE__) . 'custom-post-type.php';

require_once plugin_dir_path(__FILE__) . 'shortcode.php';

require_once plugin_dir_path(__FILE__) . 'metabox-dc.php';

require_once plugin_dir_path(__FILE__) . 'metabox-dc-image.php';

require_once plugin_dir_path(__FILE__) . 'helper.php';





/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_plugins_url() {

	$plugin = new Plugins_url();
	$plugin->run();

}
run_plugins_url();
