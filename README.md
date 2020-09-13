# Quantity Increment Buttons for WooCommerce

[![Support Level](https://img.shields.io/badge/support-active-green.svg)](#support-level)
[![Build Status](https://api.travis-ci.com/nielslange/smntcs-woocommerce-quantity-buttons.svg?branch=master)](https://api.travis-ci.com/nielslange/smntcs-woocommerce-quantity-buttons)
[![GPLv3 License](https://img.shields.io/github/license/nielslange/smntcs-woocommerce-quantity-buttons.svg)](https://www.gnu.org/licenses/gpl.html)
[![Compatible to WordPress version](https://plugintests.com/plugins/smntcs-woocommerce-quantity-buttons/wp-badge.svg)](https://plugintests.com/plugins/smntcs-woocommerce-quantity-buttons/latest)
[![Compatible to PHP version](https://plugintests.com/plugins/smntcs-woocommerce-quantity-buttons/php-badge.svg)](https://plugintests.com/plugins/smntcs-woocommerce-quantity-buttons/latest)
[![Downloads](https://img.shields.io/wordpress/plugin/dt/smntcs-woocommerce-quantity-buttons.svg)](https://wordpress.org/plugins/smntcs-woocommerce-quantity-buttons/)
[![Plugin Version](https://img.shields.io/wordpress/plugin/v/smntcs-woocommerce-quantity-buttons.svg)](https://wordpress.org/plugins/smntcs-woocommerce-quantity-buttons/)
[![Tag Version](https://img.shields.io/github/tag/nielslange/smntcs-woocommerce-quantity-buttons.svg)](https://wordpress.org/plugins/smntcs-woocommerce-quantity-buttons/)

Display quantity buttons on the WooCommerce product page

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

### 1.18
* Tested up to WordPress 5.5.x and WooCommerce 4.4.x
* Updated plugin icon

### 1.17
* [Add SMNTCS Retro theme compatibility](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/34)
* [Adjust button styles on Twenty Twenty cart page](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/33)
* [Declaring required and supported WooCommerce version](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/30)
* [Rename handlers](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/35)
* [Rename plugin slug](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/36)

### 1.16
* [Fix grouped products issue](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/21)

### 1.15
* [Fix nulled product quantity after release 1.14](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/24)
* [Rename plugin to "SMNTCS Quantity Buttons for WooCommerce"](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/25)

### 1.14
* [Add compatibility for grouped products](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/21)

### 1.13
* [Add filter to flip buttons](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/17)
* Test up to WooCommerce 4.0
* Test up to WordPress 5.4

### 1.12
* [Add compatibility for Twenty Twenty theme](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/11)
* [Validate markup](https://github.com/nielslange/smntcs-quantity-buttons-for-woocommerce/issues/10)

### 1.11
* Test up to 5.3

### 1.10
* Add compatibility to [WooCommerce Composite Products](https://woocommerce.com/products/composite-products/) and [WooCommerce Product Bundles](https://woocommerce.com/products/product-bundles/)
* Add compatibility for steps
* Add button class for styling purposes
* Adjust styling of quantity field on cart page

### 1.9
* Add filter to disable the plugin on product and/or cart page

### 1.8
* Fix 'maximum and minimum' issue

### 1.7
* Check maximum and minimum when adding or removing quantity
* Test up to 5.2

### 1.6
* Refactor based on PHPCS and WPCS

### 1.5
* Fix 'Update cart' issue

### 1.4
* Test up to 5.1

### 1.3
* Enable quantity buttons on cart page

### 1.2
* Add compatibility to other [WooCommerce](https://wordpress.org/plugins/woocommerce/) extensions

### 1.1
* Hide HTML5 input spinner

### 1.0
* Initial release
