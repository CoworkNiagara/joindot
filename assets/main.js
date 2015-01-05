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
        if (! $form.parsley().validate()) return false;

        $form.find("button").prop("disabled", true);

        var expiry = $(".cc-exp").val().split(" / ");
            exp_month = ($.isNumeric(expiry[0]) ? expiry[0] : 0),
            exp_year = ($.isNumeric(expiry[1]) ? expiry[1] : 0);

        Stripe.card.createToken({
            number: $(".cc-num").val(),
            cvc: $(".cc-cvc").val(),
            exp_month: exp_month,
            exp_year: exp_year,
            name: $(".cc-name").val(),
        }, stripeResponseHandler);

        return false;
    });
})(jQuery);
