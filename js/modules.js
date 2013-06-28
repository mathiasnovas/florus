define(['jquery'], function () {

    var modules = {

        /**
         * Fetch products based on category with ajax
         * @param jQuery-object
         */
        getProducts: function (categories) {
            categories.on('click', '.tag', function (e) {
                e.preventDefault();
                var category = $(this).html().replace(/\n| /g, '').toLowerCase();

                $.ajax({
                    url: '../bin/modules/get.php',
                    data: {
                        'tag': category
                    },
                    type: 'GET',
                    success: function (data) {
                        var products = $.parseJSON(data);
                        modules.render(products, '.products-list');
                    }
                });

                categories.find('.active').removeClass('active');
                $(this).parent().addClass('active');
            });
        },

        /**
         * Render product from object to DOM
         * @param object objs
         * @param string dom
         */
        render: function (objs, dom) {
            $(dom).children().remove();

            if (objs.length > 0) {
                $.each(objs, function () {
                    var obj = this;
                        image = obj['image'].split('.');
                        imagePath = image[0] + '_thumb.' + image[1];

                    var container = $('<div>', {
                        'class': 'product columns large-3 small-6',
                        'html': '<div class="content"><a href="/?p=product&n=' + obj['name'].toLowerCase() + '"><figure class="image"><img src="' + imagePath +'"></figure></a></div>'
                    });

                    var info = $('<div>', {
                        'class': 'info',
                        'html': '<p class="text">' + obj['name'] + '</p><div class="price">Fra nok ' + obj['price'][0] + '-,</div><div class="button add">Kjøp</div>'
                    });

                    container.find('.content').append(info);

                    var html = container;

                    $(dom).append(html);
                });
            } else {
                $(dom).html('<div class="message">Beklager, vi har ingen prdukter som matcher filtreringen.</div>')
            }
        }


    }

    return modules;

});