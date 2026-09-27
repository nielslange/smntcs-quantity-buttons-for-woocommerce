=== SMNTCS Quantity Increment Buttons for WooCommerce ===

Contributors:       nielslange, derweltbuerger, marcqueralt
Tags:               woocommerce, quantity, quantity buttons, plus minus, cart
Requires at least:  5.0
Tested up to:       7.1
Requires PHP:       7.4
Stable tag:         2.8
License:            GPL v2 or later
License URI:        https://www.gnu.org/licenses/gpl-2.0.html

Adds plus and minus buttons to the WooCommerce quantity field on product and cart pages.

== Description ==

SMNTCS Quantity Increment Buttons for WooCommerce adds minus and plus buttons around the quantity field on the product page and in the classic cart, so customers can change the quantity with one click. The buttons respect the minimum, maximum and step of each product, which makes the plugin work with quantity plugins such as Min/Max Quantities.

=== Compatible with ===

* [Min and Max Quantity for WooCommerce](https://wordpress.org/plugins/minmax-quantity-for-woocommerce/)
* [WooCommerce Composite Products](https://woocommerce.com/products/composite-products/)
* [WooCommerce Min Max Quantity & Step Control Single](https://wordpress.org/plugins/woo-min-max-quantity-step-control-single/)
* [WooCommerce Min/Max Quantities](https://woocommerce.com/products/minmax-quantities/)
* [WooCommerce Minimum and Maximum Quantity](https://wordpress.org/plugins/woo-min-max-quantity-limit/)
* [WooCommerce Product Bundles](https://woocommerce.com/products/product-bundles/)

== Filters ==

Add these lines to your theme's functions.php file or a small plugin.

Swap the order of the buttons to plus, quantity, minus:

`add_filter( 'flip_quantity_buttons', '__return_true' );`

Turn the buttons off on the product page or on the cart page:

`add_filter( 'show_on_product_page', '__return_false' );`

`add_filter( 'show_on_cart_page', '__return_false' );`

Use `<button>` elements instead of `<input type="button">`:

`add_filter( 'use_html_buttons', '__return_true' );`

== Frequently Asked Questions ==

= Where are the settings? =

The plugin has no settings page. Activate it and the buttons appear on the product page and in the classic cart. Use the filters described above to change its behaviour.

= Does it work with the Cart block? =

The Cart and Checkout blocks already have their own plus and minus buttons, so the plugin leaves them alone. It adds its buttons to the product page and to the classic cart.

= The quantity changes by 2 instead of 1. What can I do? =

Some themes add their own quantity buttons. Since version 2.7 the plugin stops those scripts from changing the quantity a second time. Update to the latest version.

= Does it respect minimum, maximum and step values? =

Yes. The buttons move in steps and stay between the minimum and maximum. Values that customers type in are rounded to the nearest allowed value, which makes the plugin work with plugins such as Min/Max Quantities.

== Contribute ==

Contributions are more than welcome. Simply head over to [GitHub](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/pulls) and open a pull request.

== Installation ==

1. Upload `smntcs-quantity-buttons-for-woocommerce` to the `/wp-content/plugins/` directory.
2. Activate the plugin through the `Plugins` menu in WordPress.

== Screenshots ==

1. WooCommerce Quantity Buttons on the product page.
2. WooCommerce Quantity Buttons on the cart page.

== Changelog ==

= 2.8 (2026.09.27) =

- Remove duplicated FAQ entries from the readme
- Rewrite the plugin description and the filter documentation

= 2.7 (2026.09.26) =

- Test up to WordPress 7.1
- Update development dependencies and GitHub Actions
- Test up to WooCommerce 11.1
- Fix the quantity changing by 2 when the theme has its own quantity buttons
- Round typed quantities to the nearest step, minimum and maximum
- Keep the minus button, the quantity field and the plus button on one line
- Give every quantity field its own ID and label, and add accessible button labels
- Stop the HTML button variant from submitting the form
- Declare compatibility with the Cart and Checkout blocks
- Replace the deprecated node-sass with sass

= 2.6 (2024.12.31) =

- Test up to WordPress 6.7

= 2.5 (2023.10.01) =

- Test up to WordPress 6.4

= 2.4 (2023.05.27) =

- Add High-Performance Order Storage (HPOS) support

= 2.3 (2023.03.11) =

- Test up to WordPress 6.2

= 2.2 (2023.01.01) =

- [Fix step increment when changing shipping methods](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/88)
- [Add toggle to use `<button>` instead of `<input type="button">`](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/90)

= 2.1 (2022.12.03) =

- Test up to WC 7.1
- Test up to WordPress 6.1

= 2.0 (2022.10.02) =

- Test up to WC 6.9
- Test up to WordPress 6.0

= 1.26 (2022.01.01) =

- Test up to WordPress 5.8
- Add support for Twenty Twenty theme
- Add support for Twenty Twenty-One theme

= 1.25 (2020.03.28) =

- [Fix max quantity problem](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/70)

= 1.24 (2020.03.28) =

- [Fix quantity bug on single product page](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/67)

= 1.23 (2020.02.08) =

- [Ensure that multiple quantities can be adjusted](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/65)

= 1.22 (2020.02.07) =

- Fix JS error for empty cart

= 1.21 (2020.02.07) =

- [Fix Vanilla JS bug](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/61)
- Test up to WordPress 5.6

= 1.20 (2020.11.30) =

- Test up to WC 4.5
- Replaced the jQuery code with Vanilla JS

= 1.19 (2020.09.13) =

- Updated plugin description

= 1.18 (2020.09.13) =

- Test up to WC 4.4
- Test up to WordPress 5.5
- Updated plugin icon

= 1.17 (2020.05.20) =

- [Add SMNTCS Retro theme compatibility](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/34)
- [Adjust button styles on Twenty Twenty cart page](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/33)
- [Declaring required and supported WooCommerce version](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/30)
- [Rename handlers](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/35)
- [Rename plugin slug](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/36)

= 1.16 (2020.04.04) =

- [Fix grouped products issue](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/21)

= 1.15 (2020.04.02) =

- [Fix nulled product quantity after release 1.14](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/24)
- [Rename plugin to "SMNTCS Quantity Buttons for WooCommerce"](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/25)

= 1.14 (2020.03.31) =

- [Add compatibility for grouped products](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/21)

= 1.13 (2020.03.11) =

- [Add filter to flip buttons](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/17)
- Test up to WC 4.0
- Test up to WordPress 5.4

= 1.12 (2019.12.06) =

- [Add compatibility for Twenty Twenty theme](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/11)
- [Validate markup](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/10)

= 1.11 (2019.11.18) =

- Test up to 5.3

= 1.10 (2019.06.28) =

- Add compatibility to [WooCommerce Composite Products](https://woocommerce.com/products/composite-products/) and [WooCommerce Product Bundles](https://woocommerce.com/products/product-bundles/)
- Add compatibility for steps
- Add button class for styling purposes
- Adjust styling of quantity field on cart page

= 1.9 (2019.06.13) =

- Add filter to disable the plugin on product and/or cart page

= 1.8 (2019.06.08) =

- Fix 'maximum and minimum' issue

= 1.7 (2019.05.31) =

- Check maximum and minimum when adding or removing quantity
- Test up to 5.2

= 1.6 (2019.05.30) =

- Refactor based on PHPCS and WPCS

= 1.5 (2019.02.28) =

- Fix 'Update cart' issue

= 1.4 (2019.02.21) =

- Test up to 5.1

= 1.3 (2019.01.12) =

- Enable quantity buttons on cart page

= 1.2 (2018.11.08) =

- Add compatibility to other [WooCommerce](https://wordpress.org/plugins/woocommerce/) extensions

= 1.1 (2018.03.31) =

- Hide HTML5 input spinner

= 1.0 (2018.03.28) =

- Initial release
