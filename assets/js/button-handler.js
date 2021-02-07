/**
 * Handle button clicks
 *
 * @author     Niels Lange <info@nielslange.de>
 * @license    http://opensource.org/licenses/gpl-license.php GNU Public License
 */

( function render() {
	// Deactivate button handler directly after call.
	jQuery( document.body ).off( 'updated_cart_totals' );

	// Prepare variables.
	var qty = document.querySelector( 'input.qty' );
	var remove = document.querySelector( 'input.minus' );
	var add = document.querySelector( 'input.plus' );
	if ( document.querySelector( 'input.qty' ) && document.querySelector( 'input.qty' ).hasAttribute( 'min' ) ) {
		var min = document.querySelector( 'input.qty' ).getAttribute( 'min' );
	}
	if ( document.querySelector( 'input.qty' ) && document.querySelector( 'input.qty' ).hasAttribute( 'max' ) ) {
		var max = document.querySelector( 'input.qty' ).getAttribute( 'max' );
	}
	if ( document.querySelector( 'input.qty' ) && document.querySelector( 'input.qty' ).hasAttribute( 'step' ) ) {
		var step = document.querySelector( 'input.qty' ).getAttribute( 'step' );
	}
	var button = document.querySelector( 'button[name="update_cart"]' );

	// console.log( { qty, remove, add, min, max, step, button } );

	// Handle update cart button.
	function updateCartButton() {
		if ( button ) {
			button.removeAttribute( 'disabled' );
			button.setAttribute( 'aria-disabled', false );
		}
	}

	// Decrease quantity.
	if ( remove ) {
		remove.addEventListener( 'click', function( event ) {
			if ( qty.value > parseInt( min ) ) {
				qty.value = parseInt(qty.value) - parseInt(step);
			}
			updateCartButton();
		}, false );
	}

	// Increase quantity.
	if ( add ) {
		add.addEventListener( 'click', function( event ) {
			if ( max ) {
				var temp = parseInt(qty.value) + parseInt(step);
				if ( temp < parseInt( max ) ) {
					qty.value = temp;
				}
			} else {
				qty.value = parseInt(qty.value) + parseInt(step);
			}
			updateCartButton();
		}, false );
	}

	// Call function after cart tottotals update.
	jQuery( document.body ).on( 'updated_cart_totals', render );
}());
