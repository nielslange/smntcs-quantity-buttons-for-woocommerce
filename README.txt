=== SMNTCS Quantity Increment Buttons for WooCommerce ===

Contributors: nielslange, derweltbuerger, marcqueralt
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=H8FCEN4TDSYBN
Tags: WooCommerce, Quantity Buttons, Increment Buttons, Plus Minus Buttons
Version: 1.24
Requires at least: 4.5
Requires PHP: 5.6
Tested up to: 5.7
WC requires at least: 5.0
WC tested up to: 5.2
License: GPL3+
License URI: http://www.gnu.org/licenses/gpl.html

Display the quantity increment buttons on the WooCommerce product page and the WooCommerce cart page.

== Description ==

Increment Quantity Buttons for WooCommerce adds two additional buttons to the quantity input field on the WooCommerce product page to easily increase and decrease the quantity via button click.

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

Contributions are more than welcome. Simply head over to [Github](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/pulls) and open a pull request.

== Installation ==

1. Upload 'smntcs-quantity-buttons-for-woocommerce' to the '/wp-content/plugins/' directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Screenshots ==

1. WooCommerce Quantity Buttons on product page
2. WooCommerce Quantity Buttons on cart page

== Change log ==

= 1.24 =
* [Fix quantity bug on single product page](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/67)

= 1.23 =
* [Ensure that multiple quantities can be adjusted](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/65)

= 1.22 =
* Fix JS error for empty cart

= 1.21 =
* [Fix Vanilla JS bug](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/61)
* Tested up to WordPress 5.6

= 1.20 =
* Tested up to WooCommerce 4.5
* Replaced the jQuery code with Vanilla JS

= 1.19 =
* Updated plugin description

= 1.18 =
* Tested up to WordPress 5.5 and WooCommerce 4.4
* Updated plugin icon

= 1.17 =
* [Add SMNTCS Retro theme compatibility](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/34)
* [Adjust button styles on Twenty Twenty cart page](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/33)
* [Declaring required and supported WooCommerce version](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/30)
* [Rename handlers](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/35)
* [Rename plugin slug](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/36)

= 1.16 =
* [Fix grouped products issue](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/21)

= 1.15 =
* [Fix nulled product quantity after release 1.14](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/24)
* [Rename plugin to "SMNTCS Quantity Buttons for WooCommerce"](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/25)

= 1.14 =
* [Add compatibility for grouped products](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/21)

= 1.13 =
* [Add filter to flip buttons](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/17)
* Test up to WooCommerce 4.0
* Test up to WordPress 5.4

= 1.12 =
* [Add compatibility for Twenty Twenty theme](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/11)
* [Validate markup](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/10)

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
* Check maximum and minimum when adding or removing quantity
* Test up to 5.2

= 1.6 =
* Refactor based on PHPCS and WPCS

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
