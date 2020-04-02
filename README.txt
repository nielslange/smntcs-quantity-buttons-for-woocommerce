=== SMNTCS WooCommerce Quantity Buttons ===

Contributors: nielslange, derweltbuerger, marcqueralt
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=H8FCEN4TDSYBN
Tags: WooCommerce, Quantity Buttons, Increment Buttons, Plus Minus Buttons
Version: 1.15
Requires at least: 4.5
Tested up to: 5.4
Requires PHP: 5.6
License: GPL3+
License URI: http://www.gnu.org/licenses/gpl.html

Display quantity buttons on WooCommerce product page

== Description ==

WooCommerce Quantity Buttons adds two additional buttons to the quantity input field on the WooCommerce product page to easily increase and decrease the quantity via button click.

=== Compatible with ===

* [Min and Max Quantity for WooCommerce](https://wordpress.org/plugins/minmax-quantity-for-woocommerce/)
* [WooCommerce Composite Products](https://woocommerce.com/products/composite-products/)
* [WooCommerce Min Max Quantity & Step Control Single](https://wordpress.org/plugins/woo-min-max-quantity-step-control-single/)
* [WooCommerce Min/Max Quantities](https://woocommerce.com/products/minmax-quantities/)
* [WooCommerce Minimum and Maximum Quantity](https://wordpress.org/plugins/woo-min-max-quantity-limit/)
* [WooCommerce Product Bundles](https://woocommerce.com/products/product-bundles/)

== Filter ==

Since 1.13 it's possible to flip the -/+ buttons to +/-. To do that, please add the corresponding filter to your functions.php file:

**Flip quantity buttons:**

`
add_filter( 'flip_quantity_buttons', '__return_true' );
`

Since 1.9 it's possible to disable the plugin on the product page and/or the cart page. To do that, please add the corresponding filter to your functions.php file:

**Disable plugin on product page:**

`
add_filter( 'show_on_product_page', '__return_false' );
`

**Disable plugin on cart page:**

`
add_filter( 'show_on_cart_page', '__return_false' );
`

== Contribute ==

Contributions are more than welcome. Simply head over to [Github](https://github.com/nielslange/smntcs-woocommerce-quantity-buttons/pulls) and open a pull request.

== Installation ==

1. Upload 'smntcs-woocommerce-quantity-buttons' to the '/wp-content/plugins/' directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Screenshots ==

1. WooCommerce Quantity Buttons on product page
2. WooCommerce Quantity Buttons on cart page

== Change log ==

= 1.15 =
* [Fix nulled product quantity after release 1.14](https://github.com/nielslange/smntcs-woocommerce-quantity-buttons/issues/24)

= 1.14 =
* [Add compatibility for grouped products](https://github.com/nielslange/smntcs-woocommerce-quantity-buttons/issues/21)

= 1.13 =
* [Add filter to flip buttons](https://github.com/nielslange/smntcs-woocommerce-quantity-buttons/issues/17)
* Tested up to WooCommerce 4.0
* Tested up to WordPress 5.4

= 1.12 =
* [Add compatibility for Twenty Twenty theme](https://github.com/nielslange/smntcs-woocommerce-quantity-buttons/issues/11)
* [Validate markup](https://github.com/nielslange/smntcs-woocommerce-quantity-buttons/issues/10)

= 1.11 =
* Test up to 5.3

= 1.10 =
* Add compatibility to [WooCommerce Composite Products](https://woocommerce.com/products/composite-products/) and [WooCommerce Product Bundles](https://woocommerce.com/products/product-bundles/)
* Add compatibility for steps
* Add button class for styling purposes
* Adjust styling of quantity field on cart page

= 1.9 =
* Add filter to disable the plugin on product and/or cart page

= 1.8 =
* Fix 'maximum and minimum' issue

= 1.7 =
* Checking maximum and minimum when adding or removing quantity
* Test up to 5.2

= 1.6 =
* Refactored based on PHPCS and WPCS

= 1.5 =
* Fix 'Update cart' issue

= 1.4 =
* Test up to 5.1

= 1.3 =
* Enable quantity buttons on cart page

= 1.2 =
* Add compatibility to other [WooCommerce](https://wordpress.org/plugins/woocommerce/) extensions

= 1.1 =
* Hide HTML5 input spinner

= 1.0 =
* Initial release
