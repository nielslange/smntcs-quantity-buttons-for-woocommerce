<?php
/*
Plugin Name: SMNTCS WooCommerce Quantity Buttons
Plugin URI: https://github.com/nielslange/git
Description: Add quantity buttons to WooCommerce product page
Author: Niels Lange
Author URI: https://nielslange.com
Text Domain: smntcs-woocommerce-quantity-buttons
Domain Path: /languages/
Version: 1.0
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

// Load localisation
add_action('plugins_loaded', 'smntcswqb_woocommerce_quantity_buttons_load_text_domain');
function smntcs_woocommerce_quantity_buttons_load_text_domain() {
	load_plugin_textdomain( 'smntcs-woocommerce-quantity-buttons', false, dirname( plugin_basename(__FILE__) ) . '/languages/' );
}

// Enqueue script
add_action( 'wp_enqueue_scripts', 'smntcs_woocommerce_quantity_buttons_load_scripts' );
function smntcs_woocommerce_quantity_buttons_load_scripts() {
	wp_enqueue_style( 'custom-style', plugins_url('custom.css', __FILE__) );
}

// Load WooCommerce template
add_filter( 'woocommerce_locate_template', 'smntcs_woocommerce_quantity_buttons_load_template', 1, 3 );
function smntcs_woocommerce_quantity_buttons_load_template( $template, $template_name, $template_path ) {
	global $woocommerce;

	$_template      = $template;
	$plugin_path    = untrailingslashit( plugin_dir_path( __FILE__ ) )  . '/template/';
	$template_path  = ( ! $template_path ) ? $woocommerce->template_url : null;
	$template       = locate_template( array( $template_path . $template_name, $template_name ) );

	if ( ! $template && file_exists( $plugin_path . $template_name ) ) {
		$template = $plugin_path . $template_name;
	}

	if ( ! $template ) {
		$template = $_template;
	}

	return $template;
}