/**
 * JavaScript file for miscellaneous events.
 * Anything more advanced should have its own file.
 */

define(['jquery'], function () {

    var events = {

        /**
         * Sticky menu
         */
        stickyMenu: function () {
            var $window = $(window),
               $sticky_element = $('nav.main'),
               $sticky_element_offset = $sticky_element.offset().top;

            if ($('#ezwt').length) {
                $sticky_element_offset -= $('#ezwt').height();
            }

           $window.scroll(function() {
                $('body').toggleClass('sticky-nav', $window.scrollTop() > $sticky_element_offset);
            });

            $('body').toggleClass('sticky-nav', $window.scrollTop() > $sticky_element_offset);
        },

        /**
         * Add to cart
         */
        addToCart: function (button) {
            button.on('click', function (){
                var el = $(this);

                el.html('Lagt i handlekurv');
                el.addClass('cart');
            });
        }

    }

    return events;

});
