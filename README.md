# SMNTCS Quantity Increment Buttons for WooCommerce

![Support Level](https://img.shields.io/badge/support-active-green.svg)
![Build Status](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/actions/workflows/test.yml/badge.svg)
![GPLv2 License](https://img.shields.io/github/license/nielslange/smntcs-woocommerce-quantity-buttons.svg)
![Compatible to WordPress version](https://plugintests.com/plugins/smntcs-woocommerce-quantity-buttons/wp-badge.svg)
![Compatible to PHP version](https://plugintests.com/plugins/smntcs-woocommerce-quantity-buttons/php-badge.svg)
![Downloads](https://img.shields.io/wordpress/plugin/dt/smntcs-woocommerce-quantity-buttons.svg)
![Active Installs](https://img.shields.io/wordpress/plugin/installs/smntcs-woocommerce-quantity-buttons.svg)
![Plugin Version](https://img.shields.io/wordpress/plugin/v/smntcs-woocommerce-quantity-buttons.svg)
![Tag Version](https://img.shields.io/github/tag/nielslange/smntcs-woocommerce-quantity-buttons.svg)

Display the quantity increment buttons on the WooCommerce product page and the WooCommerce cart page.

## Filter

Since 1.13, it's possible to flip the -/+ buttons to +/-. To do that, please add the corresponding filter to your functions.php file:

### Flip quantity buttons

```php
add_filter( 'flip_quantity_buttons', '__return_true' );
```

Since 1.9, it's possible to disable the plugin on the product page and/or the cart page. To do that, please add the corresponding filter to your functions.php file:

### Disable plugin on product page

```php
add_filter( 'show_on_product_page', '__return_false' );
```

### Disable plugin on cart page

```php
add_filter( 'show_on_cart_page', '__return_false' );
```

Since 2.2, it's possible to use `<button>` instead of `<input type="button">` for the quantity buttons. To do that, please add the corresponding filter to your functions.php file:

### Use `<button>` instead of `<input type="button">`

```php
add_filter( 'use_html_buttons', '__return_true' );
```

## Installation

1. Upload `smntcs-quantity-buttons-for-woocommerce` to the `/wp-content/plugins/` directory.
2. Activate the plugin through the `Plugins` menu in WordPress.

## Plugin page

You can find the plugin on <https://wordpress.org/plugins/smntcs-woocommerce-quantity-buttons/>.

## Changelog

### 2.5 (2023.10.01)

- Test up to WP 6.4

### 2.4 (2023.05.27)

- Add High-Performance Order Storage (HPOS) support

### 2.3 (2023.03.11)

- Test up to WP 6.2

### 2.2 (2023.01.01)

- [Fix step increment when changing shipping methods](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/88)
- [Add toggle to use `<button>` instead of `<input type="button">`](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/90)

### 2.1 (2022.12.03)

- Test up to WC 7.1
- Test up to WP 6.1

### 2.0 (2022.10.02)

- Test up to WC 6.9
- Test up to WP 6.0

### 1.26 (2022.01.01)

- Test up to WP 5.8
- Add support for Twenty Twenty theme
- Add support for Twenty Twenty-One theme

### 1.25 (2020.03.28)

- [Fix max quantity problem](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/70)

### 1.24 (2020.03.28)

- [Fix quantity bug on single product page](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/67)

### 1.23 (2020.02.08)

- [Ensure that multiple quantities can be adjusted](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/65)

### 1.22 (2020.02.07)

- Fix JS error for empty cart

### 1.21 (2020.02.07)

- [Fix Vanilla JS bug](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/61)
- Tested up to WP 5.6

### 1.20 (2020.11.30)

- Tested up to WC 4.5
- Replaced the jQuery code with Vanilla JS

### 1.19 (2020.09.13)

- Updated plugin description

### 1.18 (2020.09.13)

- Tested up to WC 4.4
- Tested up to WP 5.5
- Updated plugin icon

### 1.17 (2020.05.20)

- [Add SMNTCS Retro theme compatibility](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/34)
- [Adjust button styles on Twenty Twenty cart page](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/33)
- [Declaring required and supported WooCommerce version](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/30)
- [Rename handlers](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/35)
- [Rename plugin slug](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/36)

### 1.16 (2020.04.04)

- [Fix grouped products issue](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/21)

### 1.15 (2020.04.02)

- [Fix nulled product quantity after release 1.14](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/24)
- [Rename plugin to "SMNTCS Quantity Buttons for WooCommerce"](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/25)

### 1.14 (2020.03.31)

- [Add compatibility for grouped products](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/21)

### 1.13 (2020.03.11)

- [Add filter to flip buttons](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/17)
- Test up to WC 4.0
- Test up to WP 5.4

### 1.12 (2019.12.06)

- [Add compatibility for Twenty Twenty theme](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/11)
- [Validate markup](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/10)

### 1.11 (2019.11.18)

- Test up to WP 5.3

### 1.10 (2019.06.28)

- Add compatibility to [WooCommerce Composite Products](https://woocommerce.com/products/composite-products/) and [WooCommerce Product Bundles](https://woocommerce.com/products/product-bundles/)
- Add compatibility for steps
- Add button class for styling purposes
- Adjust styling of quantity field on cart page

### 1.9 (2019.06.13)

- Add filter to disable the plugin on product and/or cart page

### 1.8 (2019.06.08)

- Fix 'maximum and minimum' issue

### 1.7 (2019.05.31)

- Check maximum and minimum when adding or removing quantity
- Test up to WP 5.2

### 1.6 (2019.05.30)

- Refactor based on PHPCS and WPCS

### 1.5 (2019.02.28)

- Fix 'Update cart' issue

### 1.4 (2019.02.21)

- Test up to WP 5.1

### 1.3 (2019.01.12)

- Enable quantity buttons on cart page

### 1.2 (2018.11.08)

- Add compatibility to other [WooCommerce](https://wordpress.org/plugins/woocommerce/) extensions

### 1.1 (2018.03.31)

- Hide HTML5 input spinner

### 1.0 (2018.03.28)

- Initial release
