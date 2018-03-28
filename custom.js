jQuery(document).ready(function( $ ) {
    $('.woocommerce.single-product .quantity').on('click', '.minus', function (e) {
        var qty  = $(this).parent().find('input.qty');
        var val  = parseInt(qty.val());
        var step = qty.attr('step');
        step     = 'undefined' !== typeof(step) ? parseInt(step) : 1;
        if (val > 0) {
            qty.val(val - step).change();
        }
    });
    $('.woocommerce.single-product .quantity').on('click', '.plus', function (e) {
        var qty  = $(this).parent().find('input.qty');
        var val  = parseInt(qty.val());
        var step = qty.attr('step');
        step     = 'undefined' !== typeof(step) ? parseInt(step) : 1;
        qty.val(val + step).change();
    });
});
