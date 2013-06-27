define(['jquery'], function () {

    validate = {

        /**
         * Postal code
         */
         postalCode: function (field) {
            field.on('keyup', function (e) {
                if (field.val().length == 4) {
                    $('.next').attr('disabled', false);
                } else {
                    $('.next').attr('disabled', true);
                }
            });
         },

        /**
        * Billing info
        */
        billingInfo: function () {
            var required = $('.required').next();

            var checkField = function (field) {
                var i = 0;

                $.each(required, function () {
                    if ($(this).val().length > 0) {
                        i ++;
                    }
                });

                if (i == required.length) {
                    $('.next').attr('disabled', false);
                } else {
                    $('.next').attr('disabled', true);
                }
            }

            required.on('input', function () {
                checkField($(this));
            });

        }

    }

    return validate;

});
