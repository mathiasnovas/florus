/**
 * Main JavaScript file.
 *
 * Using require.js. More information at http://requirejs.org/docs/start.html
 */

(function (require) {

    "use strict";

    /**
     * Config
     */
    require.config({
        paths: {
            jquery: [
                '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min',
                'vendor/jquery'
            ]
        },
        shim: {
            'foundation/foundation.orbit': {
                deps: ['foundation/foundation']
            },
            'vendor/jquery-ui': {
                deps: ['jquery']
            }
        }
    });


    /**
     * Functions
     */
    require(['jquery'], function ($) {

        $(function () {

            /**
             * Instantiate Foundation
             */
            require(['foundation/foundation', 'foundation/foundation.orbit'], function () {
                $(document).foundation();
            });

            // /**
            //  * Sticky menu
            //  */
            if ($(window).width() > 767) {
                require(['misc'], function (events) {
                    events.stickyMenu();
                });
            }

            /**
             * Mobile menu
             */
            require(['misc'], function (events) {
                events.mobileMenu();
            });

            /**
             * Quick search
             */
            var search = $('.quick-search');
            if (search.length > 0 && $(window).width() > 767) {
                require(['misc'], function (events) {
                    events.quickSearch(search);
                });
            }

            /**
             * Add to cart
             */
            var button = $('.product .add');
            if (button.length > 0) {
                require(['misc'], function (events) {
                    events.addToCart(button);
                });
            }

            /**
             * Remove from cart
             */
            var removeButton = $('.product .remove');
            if (removeButton.length > 0) {
                require(['misc'], function (events) {
                    events.removeFromCart();
                });
            }

            /**
             * Change size
             */
            var sizes = $('.size div');
            if (sizes.length > 0) {
                require(['misc'], function (events) {
                    events.changeSize(sizes);
                });
            }

            /**
             * Get sum
             */
            var products = $('.cart .product');
            if (products.length > 0) {
                require(['misc'], function (events) {
                    events.getSum(products);
                });
            }

            /**
             * Fetch products based on category with ajax
             */
            var categories = $('.products .categories');
            if (categories.length > 0) {
                require(['modules'], function (modules) {
                    modules.getProducts(categories);
                });
            }

            /**
             * Datepicker
             */
            var date = $('.datepicker');
            if (date.length > 0 && !Modernizr.inputtypes.date) {
                require(['vendor/jquery-ui'], function () {
                    date.datepicker();
                });
            }

            /**
             * Form validation
             */
            if ($('.validate').length > 0) {
                require(['validate'], function (validate) {

                    /* Postal code */
                    var postalCodeField = $('#postal_code');
                    if (postalCodeField.length > 0) {
                        validate.postalCode(postalCodeField);
                    }

                    /* Billing info */
                    var billingInfo = $('#billing_address');
                    if (billingInfo.length > 0) {
                        validate.generic('');
                    }

                    /* Newsletter */
                    var newsletter = $('.newsletter');
                    if (newsletter.length > 0) {
                        validate.generic('Du vil høre fra oss!');
                    }

                });
            }

            /**
             * Google maps
             */
            var map = $('.map');
            if (map.length > 0) {
                require(['maps']);
            }

        });

    });

}) (window.requirejs);
