    var ccnum = document.getElementById('ccnum'),
        cvc = document.getElementById('cvc');
        payform.cardNumberInput(ccnum);
        payform.cvcInput(cvc);

    function onlyNumberKey(evt) {
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
            return false;
        return true;
    }


    $(function() {
        var $form = $(".require-validation");
        $('form.require-validation').bind('submit', function(e) {
            
            var $form = $(".require-validation"),
                inputSelector = ['input[type=email]', 'input[type=password]',
                    'input[type=text]', 'input[type=file]', 'select',
                    'textarea'
                ].join(', '),
                $inputs = $form.find('.required').find(inputSelector),
                $errorMessage = $form.find('div.error'),
                valid = true;
                $errorMessage.addClass('d-none');

            $('.has-error').removeClass('has-error');
            $inputs.each(function(i, el) {
                var $input = $(el);
                if ($input.val() === '') {
                    $input.parent().addClass('has-error');
                    $errorMessage.removeClass('d-none');
                    e.preventDefault();
                }
            });

            if (!$form.data('cc-on-file')) {
                e.preventDefault();
                Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                Stripe.createToken({
                    number: $('.card-number').val(),
                    cvc: $('.card-cvc').val(),
                    exp_month: $('.card-expiry-month').val(),
                    exp_year: $('.card-expiry-year').val()
                }, stripeResponseHandler);
            }

        });

        function stripeResponseHandler(status, response) {
            if (response.error) {
                $('.error')
                    .removeClass('d-none')
                    .find('.alert')
                    .text(response.error.message);
            } else {
                // token contains id, last4, and card type
                var token = response['id'];
                // insert the token into the form so it gets submitted to the server
                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }

    });

    $('.pay_type').change(function() {
        if ($(this).val() == "credit-card") {
            $('.card-pay').removeClass('d-none');
            $('.paypal_pay').addClass('d-none');
            $('#submit_button').attr('type', 'submit').html('Complete Payment');
            $('.checkout_change').attr('href', '#');

        } else {
            $('.paypal_pay').removeClass('d-none');
            $('.card-pay').addClass('d-none');
            $('#submit_button').attr('type', 'button').html('Proceed');
            $('.checkout_change').attr('href', '{{url("paypal-payment")}}');

            
            
        }
    });



    $(document).ready(function() {
        $('.pay_type').filter('[value="credit-card"]').attr('checked', true).change();
    });


paypal.Buttons({
    createOrder: function(data, actions) {
        let  Order_id = document.getElementById('Order_id').value;
        let amount =  document.getElementById('amount').value;
        let appUrl = app_url;
        return fetch( appUrl+'payment', {
            method: 'post',
            headers: {
                'content-type': 'application/json',
                'Access-Control-Allow-Origin': app_url,
                'Vary': 'Origin',
                'X-CSRF-TOKEN': csrf,
            },
            body: JSON.stringify({
                Order_id : Order_id,
                amount : amount,
            })
        }).then(function (res) {
            return res.json();
        }).then(function (data) {
            return data.result.id;
        });
    },
}).render('#paypal-button-container');