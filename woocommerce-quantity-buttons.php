<?php
/**
 * Plugin Name: SMNTCS WooCommerce Quantity Buttons
 * Plugin URI: https://github.com/nielslange/git
 * Description: Add quantity buttons to WooCommerce product page
 * Author: Niels Lange <info@nielslange.de>
 * Author URI: https://nielslange.de
 * Text Domain: smntcs-woocommerce-quantity-buttons
 * Domain Path: /languages/
 * Version: 1.6
 * Requires at least: 3.4
 * Requires PHP: 5.6
 * Tested up to: 5.1
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
add_action(
	'wp_enqueue_scripts',
	function () {
		wp_register_style( 'dummy-style', null, null, 1.6, 'screen' );
		wp_enqueue_style( 'dummy-style' );
		wp_add_inline_style(
			'dummy-style',
			".woocommerce .quantity input[type='number']::-webkit-outer-spin-button,
			.woocommerce .quantity input[type='number']::-webkit-inner-spin-button {
			  -webkit-appearance: none !important;
			  margin: 0;
			}
	
			.woocommerce .quantity input[type='number'] {
			  -moz-appearance: textfield;
			}
	
			table.cart td.product-quantity .qty {
			  padding: .6180469716em 1.41575em;
			}"
		);

		wp_register_script( 'dummy-script', null, null, 1.6, true );
		wp_enqueue_script( 'dummy-script' );
		wp_add_inline_script(
			'dummy-script',
			"jQuery( document ).ready(function( $ ) {
				$('.woocommerce .quantity').on('click', '.minus', function (e) {
					var qty  = $(this).parent().find('input.qty');
					var val  = parseInt(qty.val());
					var step = qty.attr('step');
					step     = 'undefined' !== typeof(step) ? parseInt(step) : 1;
					if (val > 0) {
						qty.val(val - step).change();
					}
				});
				$('.woocommerce .quantity').on('click', '.plus', function (e) {
					var qty  = $(this).parent().find('input.qty');
					var val  = parseInt(qty.val());
					var step = qty.attr('step');
					step     = 'undefined' !== typeof(step) ? parseInt(step) : 1;
					qty.val(val + step).change();
				});
			});

			jQuery( document.body ).on( 'updated_cart_totals', function(){
				jQuery( document ).ready(function( $ ) {
					$('.woocommerce .quantity').on('click', '.minus', function (e) {
						var qty  = $(this).parent().find('input.qty');
						var val  = parseInt(qty.val());
						var step = qty.attr('step');
						step     = 'undefined' !== typeof(step) ? parseInt(step) : 1;
						if (val > 0) {
							qty.val(val - step).change();
						}
					});
					$('.woocommerce .quantity').on('click', '.plus', function (e) {
						var qty  = $(this).parent().find('input.qty');
						var val  = parseInt(qty.val());
						var step = qty.attr('step');
						step     = 'undefined' !== typeof(step) ? parseInt(step) : 1;
						qty.val(val + step).change();
					});
				});
			});"
		);
	},
	11
);

/**
 * Load WooCommerce template
 */
add_filter(
	'woocommerce_locate_template',
	function ( $template, $template_name, $template_path ) {
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
	},
	1,
	3
);

