/**
 * Quantity increment buttons for WooCommerce.
 *
 * Clicks are handled in the capture phase and stopped there, so themes that
 * bind their own handlers to `.plus` and `.minus` cannot change the quantity
 * a second time.
 */
( function () {
	var WRAPPER = '.smntcs-quantity';

	function decimals( value ) {
		var match = String( value ).match( /(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/ );
		if ( ! match ) {
			return 0;
		}
		return Math.max(
			0,
			( match[ 1 ] ? match[ 1 ].length : 0 ) -
				( match[ 2 ] ? +match[ 2 ] : 0 )
		);
	}

	function limits( input ) {
		var min = parseFloat( input.getAttribute( 'min' ) );
		var max = parseFloat( input.getAttribute( 'max' ) );
		var step = input.getAttribute( 'step' );
		var stepValue = parseFloat( step );

		if ( step === 'any' || isNaN( stepValue ) || stepValue <= 0 ) {
			step = '1';
			stepValue = 1;
		}

		return {
			min: isNaN( min ) ? 0 : min,
			max: isNaN( max ) || max <= 0 ? Infinity : max,
			step: stepValue,
			decimals: decimals( step ),
		};
	}

	// Round to the nearest allowed value between min and max.
	function snap( value, l ) {
		var snapped = l.min + Math.round( ( value - l.min ) / l.step ) * l.step;
		snapped = Math.min( Math.max( snapped, l.min ), l.max );
		if ( snapped > l.max ) {
			snapped -= l.step;
		}
		return snapped.toFixed( l.decimals );
	}

	function notify( input ) {
		if ( window.jQuery ) {
			window.jQuery( input ).trigger( 'change' );
		} else {
			input.dispatchEvent( new Event( 'change', { bubbles: true } ) );
		}
	}

	document.addEventListener(
		'click',
		function ( event ) {
			var button = event.target.closest(
				WRAPPER + ' .plus, ' + WRAPPER + ' .minus'
			);
			if ( ! button ) {
				return;
			}

			event.preventDefault();
			event.stopPropagation();

			var input = button.closest( WRAPPER ).querySelector( '.qty' );
			if ( ! input ) {
				return;
			}

			var l = limits( input );
			var current = parseFloat( input.value ) || 0;
			var next = button.classList.contains( 'plus' )
				? current + l.step
				: current - l.step;

			input.value = snap( next, l );
			notify( input );
		},
		true
	);

	document.addEventListener( 'change', function ( event ) {
		var input = event.target;
		if (
			! input.matches ||
			! input.matches( WRAPPER + ' .qty' ) ||
			input.value === ''
		) {
			return;
		}

		var snapped = snap( parseFloat( input.value ) || 0, limits( input ) );
		if ( snapped !== input.value ) {
			input.value = snapped;
		}
	} );
} )();
