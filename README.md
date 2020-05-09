# SMNTCS Quantity Buttons for WooCommerce

[![Support Level](https://img.shields.io/badge/support-active-green.svg)](#support-level)
[![Build Status](https://api.travis-ci.com/nielslange/smntcs-quantity-buttons-for-woocommerce.svg?branch=master)](https://api.travis-ci.com/nielslange/smntcs-quantity-buttons-for-woocommerce)
[![GPLv3 License](https://img.shields.io/github/license/nielslange/smntcs-quantity-buttons-for-woocommerce.svg)](https://www.gnu.org/licenses/gpl.html)
[![Compatible to WordPress version](https://plugintests.com/plugins/smntcs-quantity-buttons-for-woocommerce/wp-badge.svg)](https://plugintests.com/plugins/smntcs-quantity-buttons-for-woocommerce/latest)
[![Compatible to PHP version](https://plugintests.com/plugins/smntcs-quantity-buttons-for-woocommerce/php-badge.svg)](https://plugintests.com/plugins/smntcs-quantity-buttons-for-woocommerce/latest)
[![Downloads](https://img.shields.io/wordpress/plugin/dt/smntcs-quantity-buttons-for-woocommerce.svg)](https://wordpress.org/plugins/smntcs-quantity-buttons-for-woocommerce/)
[![Plugin Version](https://img.shields.io/wordpress/plugin/v/smntcs-quantity-buttons-for-woocommerce.svg)](https://wordpress.org/plugins/smntcs-quantity-buttons-for-woocommerce/)
[![Tag Version](https://img.shields.io/github/tag/nielslange/smntcs-quantity-buttons-for-woocommerce.svg)](https://wordpress.org/plugins/smntcs-quantity-buttons-for-woocommerce/)
![Deploy to WordPress.org](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/workflows/Deploy%20to%20WordPress.org/badge.svg)

Display quantity buttons on WooCommerce product page

## Filter

Since 1.13 it's possible to flip the -/+ buttons to +/-. To do that, please add the corresponding filter to your functions.php file:

### Flip quantity buttons:

```
add_filter( 'flip_quantity_buttons', '__return_true' );
```

Since 1.9 it's possible to disable the plugin on the product page and/or the cart page. To do that, please add the corresponding filter to your functions.php file:

### Disable plugin on product page:

```
add_filter( 'show_on_product_page', '__return_false' );
```

### Disable plugin on cart page:

```
add_filter( 'show_on_cart_page', '__return_false' );
```

## Installation

1. Upload `smntcs-quantity-buttons-for-woocommerce` to the `/wp-content/plugins/` directory
2. Activate the plugin through the `Plugins` menu in WordPress

## Plugin page

You can find the plugin on https://wordpress.org/plugins/smntcs-quantity-buttons-for-woocommerce/.

## Changelog

### 1.16
* [Fixed grouped products issue](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/21)

### 1.15
* [Fix nulled product quantity after release 1.14](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/24)
* [Rename plugin to "SMNTCS Quantity Buttons for WooCommerce"](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/25)

### 1.14
* [Add compatibility for grouped products](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/21)

### 1.13
* [Add filter to flip buttons](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/17)
* Tested up to WooCommerce 4.0
* Tested up to WordPress 5.4

### 1.12
* [Add compatibility for Twenty Twenty theme](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/11)
* [Validate markup](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/10)

### 1.11
* Test up to WordPress 5.3

### 1.10
* Add compatibility to [WooCommerce Composite Products](https://woocommerce.com/products/composite-products/) and [WooCommerce Product Bundles](https://woocommerce.com/products/product-bundles/)
* Add compatibility for steps
* Add button class for styling purposes
* Adjust styling of quantity field on cart page

### 1.9
* Add filter to disable the plugin on product and/or cart page

### 1.8
* Fix `Maximum and minimum` issue

### 1.7
* Checking maximum and minimum when adding or removing quantity
* Test up to WordPress 5.2

### 1.6
* Refactored based on PHPCS and WPCS

### 1.5
* Fix `Update cart` issue

### 1.4
* Test up to WordPress 5.1

### 1.3
* Enable quantity buttons on cart page

### 1.2
* Add compatibility to other [WooCommerce](https://wordpress.org/plugins/woocommerce/) extensions

### 1.1
* Hide HTML5 input spinner

### 1.0
* Initial release
