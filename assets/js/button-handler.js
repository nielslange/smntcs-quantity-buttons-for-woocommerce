/**
 * Handle button clicks
 *
 * @author     Niels Lange <info@nielslange.de>
 * @license    http://opensource.org/licenses/gpl-license.php GNU Public License
 */

(function render() {
	// Deactivate button handler directly after call.
	jQuery(document.body).off("updated_cart_totals"); // eslint-disable-line no-undef

	var quantities = document.querySelectorAll(".quantity ");
	var button = document.querySelector("button[name='update_cart']");

	quantities.forEach((element) => {
		// Prepare variables.
		var qty = element.querySelector("input.qty");
		var remove = element.querySelector("input.minus");
		var add = element.querySelector("input.plus");
		if (
			element.querySelector("input.qty") &&
			element.querySelector("input.qty").hasAttribute("min")
		) {
			var min = element.querySelector("input.qty").getAttribute("min");
		}
		if (
			element.querySelector("input.qty") &&
			element.querySelector("input.qty").hasAttribute("max")
		) {
			var max = element.querySelector("input.qty").getAttribute("max");
		}
		if (
			element.querySelector("input.qty") &&
			element.querySelector("input.qty").hasAttribute("step")
		) {
			var step = element.querySelector("input.qty").getAttribute("step");
		}

		// Handle update cart button.
		function updateCartButton() {
			if (button) {
				button.removeAttribute("disabled");
				button.setAttribute("aria-disabled", false);
			}
		}

		// Decrease quantity.
		if (remove) {
			remove.addEventListener(
				"click",
				function () {
					if (qty.value > parseInt(min)) {
						qty.value = parseInt(qty.value) - parseInt(step);
					}
					updateCartButton();
				},
				false
			);
		}

		// Increase quantity.
		if (add) {
			add.addEventListener(
				"click",
				function () {
					max = element.querySelector("input.qty").getAttribute("max");
					if (max) {
						var temp = parseInt(qty.value) + parseInt(step);
						if (temp <= parseInt(max)) {
							qty.value = temp;
						}
					} else {
						qty.value = parseInt(qty.value) + parseInt(step);
					}
					updateCartButton();
				},
				false
			);
		}
	});

	// Call function after cart tottotals update.
	jQuery(document.body).on("updated_cart_totals", render); // eslint-disable-line no-undef
})();
