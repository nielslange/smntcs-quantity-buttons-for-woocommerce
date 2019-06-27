<?php
/**
 * Plugin Name: SMNTCS WooCommerce Quantity Buttons
 * Plugin URI: https://github.com/nielslange/git
 * Description: Add quantity buttons to WooCommerce product page
 * Author: Niels Lange <info@nielslange.de>
 * Author URI: https://nielslange.de
 * Text Domain: smntcs-woocommerce-quantity-buttons
 * Domain Path: /languages/
 * Version: 1.9
 * Requires at least: 3.4
 * Requires PHP: 5.6
 * Tested up to: 5.2
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 *
 * @category   Plugin
 * @package    WordPress
 * @subpackage SMNTCS WooCommerce Quantity Buttons
 * @author     Niels Lange <info@nielslange.de>
 * @license    http://opensource.org/licenses/gpl-license.php GNU Public License
 */

/**
 * Avoid direct plugin access
 */
if ( ! defined( 'ABSPATH' ) ) {
	die( '¯\_(ツ)_/¯' );
}

/**
 * Show warning if WooCommerce is not active or WooCommerce version < 2.3
 */
add_action(
	'admin_notices',
	function () {
		global $woocommerce;

		if ( ! class_exists( 'WooCommerce' ) || version_compare( $woocommerce->version, '2.3', '<' ) ) {
			$class   = 'notice notice-warning is-dismissible';
			$message = __( 'SMNTCS WooCommerce Quantity Buttons requires at least WooCommerce 2.3.', 'smntcs-woocommerce-quantity-buttons' );

			printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), esc_html( $message ) );
		}
	}
);

/**
 * Load textdomain
 */
add_action(
	'plugins_loaded',
	function () {
		load_plugin_textdomain( 'smntcs-woocommerce-quantity-buttons', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
	}
);

/**
 * Enqueue scripts and styles
 */
add_action( 'wp_enqueue_scripts', function () {

	wp_enqueue_script( 'custom-script', plugins_url( 'custom.js', __FILE__ ), array( 'jquery' ), false, true );
	wp_enqueue_style( 'custom-style', plugins_url( 'custom.css', __FILE__ ), null, false, 'screen' );

	$show_on_product_page = apply_filters('show_on_product_page', true);
	$show_on_cart_page = apply_filters('show_on_cart_page', true);

	if ( false === $show_on_product_page && is_product() ) {
		wp_dequeue_script( 'custom-script' );
		wp_dequeue_style( 'custom-style' );
	}

	if ( false === $show_on_cart_page && is_cart() ) {
		wp_dequeue_script( 'custom-script' );
		wp_dequeue_style( 'custom-style' );
	}

} );

/**
 * Load WooCommerce template
 */
add_filter( 'woocommerce_locate_template', function ( $template, $template_name, $template_path ) {

	$show_on_product_page = apply_filters('show_on_product_page', true);
	$show_on_cart_page = apply_filters('show_on_cart_page', true);

	if ( false === $show_on_product_page && is_product() ) {
		return $template;
	}

	if ( false === $show_on_cart_page && is_cart() ) {
		return $template;
	}

	global $woocommerce;

	$_template     = $template;
	$plugin_path   = untrailingslashit( plugin_dir_path( __FILE__ ) ) . '/template/';
	$template_path = ( ! $template_path ) ? $woocommerce->template_url : null;
	$template      = locate_template( array( $template_path . $template_name, $template_name ) );

	if ( ! $template && file_exists( $plugin_path . $template_name ) ) {
		$template = $plugin_path . $template_name;
	}

	if ( ! $template ) {
		$template = $_template;
	}

	return $template;
}, 1, 3 );
