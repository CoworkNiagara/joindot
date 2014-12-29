(function($) {
    var $form = $("#signup-form");

    $("input.cc-num").payment("formatCardNumber");
    $("input.cc-exp").payment("formatCardExpiry");
    $("input.cc-cvc").payment("formatCardCVC");

    var stripeResponseHandler = function(status, response) {
        if (response.error) {
            $form.find(".payment-errors").text(response.error.message);
            $form.find("button").prop("disabled", false);
        } else {
            var token = response.id;

            $form.append($('<input type="hidden" name="stripeToken">').val(token));
            $form.get(0).submit();
        }
    };

    $form.submit(function() {
        $form.find("button").prop("disabled", true);

        Stripe.card.createToken($form, stripeResponseHandler);

        return false;
    });
})(jQuery);
