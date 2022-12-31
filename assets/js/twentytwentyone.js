const buttons = document.querySelectorAll( ".quantity > input[type='button']" );
buttons.forEach( ( element ) => {
	element.classList.add( 'single_add_to_cart_button' );
	element.classList.add( 'button' );
	element.classList.add( 'alt' );
} );
