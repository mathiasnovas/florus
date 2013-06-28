/**
 * JavaScript file for miscellaneous events.
 * Anything more advanced should have its own file.
 */

define(['jquery'], function ($) {

    var events = {

        /**
         * Sticky menu
         */
        stickyMenu: function () {
            var $window = $(window),
               stickyElementOffset = document.querySelector('nav.main').offsetTop,
               body = $('body');

            $window.scroll(function() {
                body.toggleClass('sticky-nav', $window.scrollTop() > stickyElementOffset);
            });

            body.toggleClass('sticky-nav', $window.scrollTop() > stickyElementOffset);
        },

        /**
         * Mobile menu
         */
        mobileMenu: function () {
            var trigger = $('.mobile');

            trigger.on('click', function (e) {
                e.preventDefault();
                $('.navigation ul').toggleClass('active');
            });
        },

        /**
         * Expand quick search upon focus
         */
        quickSearch: function (search) {
            var field = search.find('input[type=text]');
            field.on({
                focus: function () {
                    $(this).addClass('focus');
                },
                focusout: function () {
                    $(this).removeClass('focus');
                }
            });
        },

        /**
         * Add to cart
         */
        addToCart: function (button) {
            var cart = $('.cart'),
                i = 4;

            button.on('click', function (){
                var el = $(this);

                if (!el.hasClass('added')) {
                    el.html('<a href="/?p=cart">Lagt i handlekurv</a>');
                    el.addClass('added');

                    cart.html(i + ' varer');

                    i++;
                }
            });
        },

        /**
         * Remove from cart
         */
        removeFromCart: function () {
            var button = $('.remove'),
                products = $('.product');

            button.on('click', function () {
                if ($(this).hasClass('all')) {
                    products.remove();
                } else {
                    var el = $(this).closest('.product');
                    el.remove();
                }

                events.removeFromCart();
            });

            if (products.length == 0) {
                $('.products-list').html('<div class="message">Du har ingen varer i handlekurven.</div>');
                $('.actions').remove();
            }

            events.getSum(products);
        },

        /**
         * Change size
         * @param jQuery-object
         */
        changeSize: function (sizes) {
            sizes.on('click', function () {
                var el = $(this),
                    price = el.attr('data-value'),
                    button = el.closest('.product').find('.add');



                if (!button.hasClass('added')) {
                    button.html('Kjøp: nok ' + price + '-,');
                }

                if (!el.hasClass('active')) {
                    sizes.removeClass('active');
                    el.addClass('active');
                }
            });
        },

        /**
         * Get sum of products in a list
         * @param jQuery-object
         */
        getSum: function (products) {
            var sum = 0;
            $.each(products, function () {
                var price = parseInt( $(this).find('.price').html().replace(/\D/g, '') );
                sum = sum + price;
            });
            if (sum > 0) {
                $('.sum').html('Sum: ' + sum);
            }
        }

    }

    return events;

});
