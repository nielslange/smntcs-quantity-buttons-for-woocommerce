jQuery(document).ready(function($) {
  $('form.cart, form.woocommerce-cart-form').on('click', '.minus', function(e) {
    var qty = $(this).parent().find('input.qty');
    var val = parseInt(qty.val());
    var step = qty.attr('step');
    var min = qty.attr('min');

    if ( val > min ) {
      step = 'undefined' !== typeof(step) ? parseInt(step) : 1;

      if (val > 0 && val - step >= min) {
        qty.val(val - step).change();
      }
    }
  });
  $('form.cart, form.woocommerce-cart-form').on('click', '.plus', function(e) {
    var qty = $(this).parent().find('input.qty');
    var val = parseInt(qty.val());
    var step = qty.attr('step');
    var max = qty.attr('max');

    if ( max ) {
      if ( val < max ) {
        step = 'undefined' !== typeof(step) ? parseInt(step) : 1;
        if ( val + step <= max) {
          qty.val(val + step).change();
        }
      }
    } else {
      step = 'undefined' !== typeof(step) ? parseInt(step) : 1;
      qty.val(val + step).change();
    }
  });
});

jQuery(document.body).on('updated_cart_totals', function() {
  jQuery(document).ready(function($) {
    $('.woocommerce .quantity').on('click', '.minus', function(e) {
      var qty = $(this).parent().find('input.qty');
      var val = parseInt(qty.val());
      var step = qty.attr('step');
      var min = qty.attr('min');

      if ( val > min ) {
        step = 'undefined' !== typeof(step) ? parseInt(step) : 1;

        if (val > 0 && val - step >= min) {
          qty.val(val - step).change();
        }
      }
    });
    $('.woocommerce .quantity').on('click', '.plus', function(e) {
      var qty = $(this).parent().find('input.qty');
      var val = parseInt(qty.val());
      var step = qty.attr('step');
      var max = qty.attr('max');

      if ( max ) {
        if ( val < max ) {
          step = 'undefined' !== typeof(step) ? parseInt(step) : 1;
          if ( val + step <= max) {
            qty.val(val + step).change();
          }
        }
      } else {
        step = 'undefined' !== typeof(step) ? parseInt(step) : 1;
        qty.val(val + step).change();
      }
    });
  });
});
