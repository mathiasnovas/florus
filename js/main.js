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
            jquery: 'vendor/jquery'
        },
        shim: {
            'foundation/foundation.orbit': {
                deps: ['foundation/foundation']
            }
        }
    });

    /**
     * Modernizr
     */
    require(['vendor/modernizr']);

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

            /**
             * Sticky menu
             */
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
             * Remove from chart
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
            if (sizes) {
                require(['misc'], function (events) {
                    events.changeSize(sizes);
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
             * Form validation
             */
            if ($('.validate').length > 0) {
                require(['validate'], function (validate) {

                    /* Postal code */
                    var postalCodeField = $('#postal_code');
                    if (postalCodeField) {
                        validate.postalCode(postalCodeField);
                    }

                    /* Billing info */
                    var billingInfo = $('#billing_address');
                    if (billingInfo) {
                        validate.billingInfo();
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
