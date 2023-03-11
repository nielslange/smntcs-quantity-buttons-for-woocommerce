<?php
/**
 * Product quantity inputs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/quantity-input.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @package    SMNTCS_Quantity_Buttons_For_WooCommerce
 */

// Avoid direct plugin access.
defined( 'ABSPATH' ) || exit;

$flip_quantity_buttons = apply_filters( 'flip_quantity_buttons', false );
$use_html_buttons      = apply_filters( 'use_html_buttons', false );

if ( $max_value && $min_value === $max_value ) {
	?>
	<div class="quantity hidden">
		<input type="hidden" id="<?php echo esc_attr( $input_id ); ?>" class="qty" name="<?php echo esc_attr( $input_name ); ?>" value="<?php echo esc_attr( $min_value ); ?>" />
	</div>
	<?php
} else {

	if ( $min_value && ( $input_value < $min_value ) ) {
		$input_value = $min_value;
	}

	if ( $max_value && ( $input_value > $max_value ) ) {
		$input_value = $max_value;
	}

	if ( '' === $input_value ) {
		$input_value = 0;
	}

	?>
	<div class="quantity">
		<label class="screen-reader-text" for="smntcswcb"><?php esc_html_e( 'Quantity', 'smntcs-quantity-buttons-for-woocommerce' ); ?></label>

		<?php if ( $flip_quantity_buttons ) : ?>
			<?php if ( $use_html_buttons ) : ?>
				<button class="plus button wp-element-button">+</button>
			<?php else : ?>
				<input class="plus button wp-element-button" type="button" value="+">
			<?php endif ?>
		<?php else : ?>
			<?php if ( $use_html_buttons ) : ?>
				<button class="minus button wp-element-button">-</button>
			<?php else : ?>
				<input class="minus button wp-element-button" type="button" value="-">
			<?php endif ?>
		<?php endif ?>

		<input type="number"
			id="smntcswcb" step="<?php echo esc_attr( $step ); ?>"
			min="<?php echo esc_attr( $min_value ); ?>"
			<?php if ( isset( $max_value ) && 0 < $max_value ) : ?>
				max="<?php echo esc_attr( $max_value ); ?>"
			<?php endif; ?>
			name="<?php echo esc_attr( $input_name ); ?>"
			value="<?php echo esc_attr( $input_value ); ?>"
			title="<?php echo esc_attr_x( 'Qty', 'Product quantity input tooltip', 'smntcs-quantity-buttons-for-woocommerce' ); ?>"
			class="input-text qty text"
			inputmode="<?php echo esc_attr( $inputmode ); ?>" />

		<?php if ( $flip_quantity_buttons ) : ?>
			<?php if ( $use_html_buttons ) : ?>
				<button class="minus button wp-element-button">-</button>
			<?php else : ?>
				<input class="minus button wp-element-button" type="button" value="-">
			<?php endif ?>
		<?php else : ?>
			<?php if ( $use_html_buttons ) : ?>
				<button class="plus button wp-element-button">+</button>
			<?php else : ?>
				<input class="plus button wp-element-button" type="button" value="+">
			<?php endif ?>
		<?php endif ?>

	</div>
	<?php
}
