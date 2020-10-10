/**
 * Handle button clicks
 *
 * @author     Niels Lange <info@nielslange.de>
 * @license    http://opensource.org/licenses/gpl-license.php GNU Public License
 */

( function() {
	// Prepare variables.
	var qty = document.querySelector( 'input.qty' );
	var remove = document.querySelector( 'input.minus' );
	var add = document.querySelector( 'input.plus' );
	var min = document.querySelector( 'input.qty' ).getAttribute( 'min' );
	var max = document.querySelector( 'input.qty' ).getAttribute( 'max' );
	var step = document.querySelector( 'input.qty' ).getAttribute( 'step' );

	// Decrease quantity.
	remove.addEventListener( 'click', function( event ) {
		if ( qty.value > parseInt( min ) ) {
			qty.value = +qty.value - +step;
		}
	}, false );

	// Increase quantity.
	add.addEventListener( 'click', function( event ) {
		if ( max ) {
			var temp = +qty.value + +step;
			if ( temp < parseInt( max ) ) {
				qty.value = temp;
			}
		} else {
			qty.value = +qty.value + +step;
		}
	}, false );
}() );
