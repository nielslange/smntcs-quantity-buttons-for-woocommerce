jQuery(document).ready(function($) {
  $('.woocommerce .quantity').on('click', '.minus', function(e) {
    var qty = $(this).parent().find('input.qty');
    var val = parseInt(qty.val());
    var step = qty.attr('step');
    var min = qty.attr('min');

    if ( 'undefined' !== typeof(min) || val > min) {
      step = 'undefined' !== typeof(step) ? parseInt(step) : 1;

      if (val > 0) {
        qty.val(val - step).change();
      }
    }
  });
  $('.woocommerce .quantity').on('click', '.plus', function(e) {
    var qty = $(this).parent().find('input.qty');
    var val = parseInt(qty.val());
    var step = qty.attr('step');
    var max = qty.attr('max');

    if ( 'undefined' !== typeof(max) || val < max ) {
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

      if ( 'undefined' !== typeof(min) || val > min) {
        step = 'undefined' !== typeof(step) ? parseInt(step) : 1;

        if (val > 0) {
          qty.val(val - step).change();
        }
      }
    });
    $('.woocommerce .quantity').on('click', '.plus', function(e) {
      var qty = $(this).parent().find('input.qty');
      var val = parseInt(qty.val());
      var step = qty.attr('step');
      var max = qty.attr('max');

      if ( 'undefined' !== typeof(max) || val < max ) {
        step = 'undefined' !== typeof(step) ? parseInt(step) : 1;
        qty.val(val + step).change();
      }
    });
  });
});
