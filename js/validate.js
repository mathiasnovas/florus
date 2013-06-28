define(['jquery'], function ($) {

    var validate = {

        /**
         * Postal code
         * @param jQuery-object
         */
         postalCode: function (field) {
            field.on('keyup', function () {
                if (field.val().length === 4) {
                    $('.next').attr('disabled', false);
                } else {
                    $('.next').attr('disabled', true);
                }
            });
         },

        /**
         * Generic validation for any input fields
         * @param string message to display
         */
        generic: function (message) {
            var required = $('.required').next(),
                submit = $('.next'),
                message = ((message.length > 0) ? message : ''),
                valid = false;

            var checkField = function (field) {
                var value = field.val();

                if (field.attr('type') === 'email') {
                    if (validate.isEmail(value)) {
                        field.addClass('valid');
                    } else {
                        field.removeClass('valid');
                    }
                } else {
                    if (value.length > 0) {
                        field.addClass('valid');
                    } else {
                        field.removeClass('valid');
                    }
                }

                if ($('.valid').length === required.length) {
                    valid = true;
                    submit.attr('disabled', false);
                } else {
                    valid = false;
                    submit.attr('disabled', true);
                }

                if (message.length > 0 && valid) {
                    validate.message(message);
                }
            }

            if (required.length > 1) {
                $.each(required, function () {
                    checkField($(this));
                });
            } else {
                if (required.val().length > 0) {
                    checkField(required);
                }
            }

            required.on({
                input: function () {
                    checkField($(this));
                },
                focus: function () {
                    checkField($(this));
                },
                change: function () {
                    checkField($(this));
                }
            });

        },

        /**
         * Check if input is valid e-mail
         * @param string
         * @return boolean
         */
        isEmail: function (email) {
            var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return regex.test(email);
        },

        /**
         * Display message upon form completion
         * @param string
         */
        message: function (message) {
            $('.next').on('click', function (e) {
                e.preventDefault();
                $(this).closest('.validate').html('<div class="info-box">' + message + '</div>');
            });
        }

    }

    return validate;

});
