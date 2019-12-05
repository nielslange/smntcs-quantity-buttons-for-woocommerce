<?php
/**
 * Product quantity inputs
 *
 * This template can be overridden by copying it to yourtheme/smntcs-woocommerce-quantity-buttons/global/quantity-input.php.
 *
 * HOWEVER, on occasion smntcs-woocommerce-quantity-buttons will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.smntcs-woocommerce-quantity-buttons.com/document/template-structure/
 * @author      WooThemes
 * @package     smntcs-woocommerce-quantity-buttons/Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $max_value && $min_value === $max_value ) {
	?>
	<div class="quantity hidden">
		<input type="hidden" id="<?php echo esc_attr( $input_id ); ?>" class="qty" name="<?php echo esc_attr( $input_name ); ?>" value="<?php echo esc_attr( $min_value ); ?>" />
	</div>
	<?php
} else {
	?>
	<div class="quantity">
		<label class="screen-reader-text" for="smntcswcb"><?php esc_html_e( 'Quantity', 'smntcs-woocommerce-quantity-buttons' ); ?></label>
		<input class="minus" type="button" value="-">
		<input type="number"
					id="smntcswcb" step="<?php echo esc_attr( $step ); ?>" min="<?php echo esc_attr( $min_value ); ?>" 
					<?php if ( isset( $max_value ) && 0 < $max_value ) : ?>
						max="<?php echo esc_attr( $max_value ); ?>"
					<?php endif; ?>
					name="<?php echo esc_attr( $input_name ); ?>"
					value="<?php echo esc_attr( $input_value ); ?>"
					title="<?php echo esc_attr_x( 'Qty', 'Product quantity input tooltip', 'smntcs-woocommerce-quantity-buttons' ); ?>"
					class="input-text qty text"
					inputmode="<?php echo esc_attr( $inputmode ); ?>" />
		<input class="plus" type="button" value="+">
	</div>
	<?php
}
