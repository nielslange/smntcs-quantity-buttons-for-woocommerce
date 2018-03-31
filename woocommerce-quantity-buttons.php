<?php
/*
Plugin Name: SMNTCS WooCommerce Quantity Buttons
Plugin URI: https://github.com/nielslange/git
Description: Add quantity buttons to WooCommerce product page
Author: Niels Lange
Author URI: https://nielslange.com
Text Domain: smntcs-woocommerce-quantity-buttons
Domain Path: /languages/
Version: 1.1
Requires at least: 3.4
Tested up to: 4.9
License: GPLv2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

/*  Copyright 2014-2018	Niels Lange (email : info@nielslange.de)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// Avoid direct plugin access
if ( !defined( 'ABSPATH' ) ) die('¯\_(ツ)_/¯');

// Show warning if WooCommerce is not active or WooCommerce version < 2.3
add_action( 'admin_notices', function() {
	global $woocommerce;
	global $woocommerce;

	if ( ! class_exists( 'WooCommerce' ) || version_compare( $woocommerce->version, '2.3', '<' ) ) {
		$class      = 'notice notice-warning is-dismissible';
		$message    = __( 'SMNTCS WooCommerce Quantity Buttons requires at least WooCommerce 2.3.', 'smntcs-woocommerce-quantity-buttons' );

		printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), esc_html( $message ) );
	}
});

// Load localisation
add_action( 'plugins_loaded', function() {
	load_plugin_textdomain( 'smntcs-woocommerce-quantity-buttons', false, dirname( plugin_basename(__FILE__) ) . '/languages/' );
});

// Enqueue script
add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_script( 'custom-script', plugins_url('custom.js', __FILE__), array('jquery'), false, true );
	wp_enqueue_style( 'custom-style', plugins_url('custom.css', __FILE__), null, false, 'screen' );
});

// Load WooCommerce template
add_filter( 'woocommerce_locate_template', function( $template, $template_name, $template_path ) {
	global $woocommerce;

	$_template      = $template;
	$plugin_path    = untrailingslashit( plugin_dir_path( __FILE__ ) ) . '/template/';
	$template_path  = ( ! $template_path ) ? $woocommerce->template_url : null;
	$template       = locate_template( array( $template_path . $template_name, $template_name ) );

	if ( ! $template && file_exists( $plugin_path . $template_name ) ) {
		$template = $plugin_path . $template_name;
	}

	if ( ! $template ) {
		$template = $_template;
	}

	return $template;
}, 1, 3 );
