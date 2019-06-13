=== SMNTCS WooCommerce Quantity Buttons ===

Contributors: nielslange
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=H8FCEN4TDSYBN
Tags: WooCommerce, Quantity Buttons, Increment Buttons, Plus Minus Buttons
Version: 1.9
Requires at least: 4.5
Tested up to: 5.2
Requires PHP: 5.6
License: GPL2+
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Display quantity buttons on WooCommerce product page

== Description ==

WooCommerce Quantity Buttons adds two additional buttons to the quantity input field on the WooCommerce product page to easily increase and decrease the quantity via button click.

=== Tested with ===

* [Min and Max Quantity for WooCommerce](https://wordpress.org/plugins/minmax-quantity-for-woocommerce/)
* [WooCommerce Min Max Quantity & Step Control Single](https://wordpress.org/plugins/woo-min-max-quantity-step-control-single/)
* [WooCommerce Min/Max Quantities](https://woocommerce.com/products/minmax-quantities/)
* [Woocommerce Minimum and Maximum Quantity](https://wordpress.org/plugins/woo-min-max-quantity-limit/)

== Filter ==

Since 1.9 it's possible to disable the plugin on the product page and/or the cart page. To do that, please add the corresponding filter to your functions.php file:

**Disable plugin on product page:**

`add_filter('show_on_product_page', '__return_false');`

**Disable plugin on cart page:**

`add_filter('show_on_cart_page', '__return_false');`

== Installation ==

1. Upload 'smntcs-woocommerce-quantity-buttons' to the '/wp-content/plugins/' directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Screenshots ==

1. WooCommerce Quantity Buttons on product page
2. WooCommerce Quantity Buttons on cart page

== Change log ==

= 1.9 =
* Add filter to disable the plugin on product and/or cart page

= 1.8 =
* Fix 'maximum and minimum' issue

= 1.7 =
* Checking maximum and minimum when adding or removing quantity

= 1.6 =
* Refactored based on PHPCS and WPCS

= 1.5 =
* Fixed 'Update cart' issue

= 1.4 =
* Tested up to 5.1

= 1.3 =
* Enable quantity buttons on cart page

= 1.2 =
* Improve compatible to other [WooCommerce](https://wordpress.org/plugins/woocommerce/) extensions

= 1.1 =
* Hide HTML5 input spinner

= 1.0 =
* Initial release
