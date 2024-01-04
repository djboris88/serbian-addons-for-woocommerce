<?php
/**
 * Plugin Name:          Serbian Addons for WooCommerce
 * Plugin URI:           https://oblak.studio/open-source/srpski-woocommerce
 * Description:          Various addons and tweaks that make WooCommerce compatible with Serbian bureaucracy.
 * Version:              3.2.1
 * Requires PHP:         8.0
 * Author:               Oblak Studio
 * Author URI:           https://oblak.studio
 * Tested up to:         6.4
 * WC requires at least: 8.0
 * WC tested up to:      8.3
 * License:              GPLv2 or later
 * License URI:          https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:          serbian-addons-for-woocommerce
 *
 * @package Serbian Addons for WooCommerce
 */

defined( 'ABSPATH' ) || exit;
defined( 'WCRS_PLUGIN_FILE' ) || define( 'WCRS_PLUGIN_FILE', __FILE__ );

require __DIR__ . '/vendor/autoload_packages.php';

add_action( 'woocommerce_loaded', 'WCSRB' );
