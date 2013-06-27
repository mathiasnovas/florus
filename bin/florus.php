<?php

class Florus {

    /**
     * Parse url and return name with extension.
     * @return string
     */
    public static function parseUrl($param) {
        if (isset($_GET[$param])) {
            return $_GET[$param];
        } else {
            return 'frontpage';
        }
    }

    /**
     * Return the site tree
     * @return array
     */
    public static function tree() {
        $tree = array(
            'frontpage' => 'Hjem',
            'products' => 'Produkter',
            'about' => 'Om oss',
            'contact' => 'Kontakt'
        );

        return $tree;
    }

    /**
     * Get page title
     * @return string
     */
    public static function getPageTitle() {
        $identifier = self::parseUrl('p');
        $title = '';

        foreach (self::tree() as $key => $page) {
            if ($key == $identifier) {
                $title = $page;
            }
        }

        return $title;
    }

    /**
     * Fetch products
     * @return array
     */
    public static function getProducts($count = 10) {
        $products = array(
            array(
                'name' => 'Roser',
                'tag' => array( 'roser', 'rosa', 'bursdag' ),
                'type' => 'bukett',
                'image' => 'img/products/roser.jpg',
                'text' => 'Lorem ipsum dolor sit amet',
                'price' => array('750', '850')
            ),
            array(
                'name' => 'Liljer',
                'tag' => array( 'liljer', 'rød', 'gratulerer' ),
                'type' => 'bukkett',
                'image' => 'img/products/liljer.jpg',
                'text' => 'Lorem ipsum dolor sit amet',
                'price' => array('800', '900')
            ),
            array(
                'name' => 'Peoner',
                'tag' => array( 'peoner', 'rosa', 'kjærlighet' ),
                'type' => 'bukkett',
                'image' => 'img/products/peoner.jpg',
                'text' => 'Lorem ipsum dolor sit amet',
                'price' => array('790', '890')
            ),
            array(
                'name' => 'Kondolanse',
                'tag' => array( 'roser', 'hvit', 'kondolanse' ),
                'type' => 'bukkett',
                'image' => 'img/products/hvit_blanding.jpg',
                'text' => 'Lorem ipsum dolor sit amet',
                'price' => array('790', '890')
            ),
            array(
                'name' => 'Gratulerer',
                'tag' => array('roser', 'rosa', 'hvit', 'gratulerer'),
                'type' => 'bukett',
                'image' => 'img/products/rosa_blanding.jpg',
                'text' => 'Lorem ipsum dolor sit amet',
                'price' => array('850', '950')
            ),
            array(
                'name' => 'Dåp',
                'tag' => array('dåp', 'lilla', 'rosa'),
                'type' => 'bukett',
                'image' => 'img/products/lilla.jpg',
                'text' => 'Lorem ipsum dolor sit amet',
                'price' => array('800', '900')
            ),
            array(
                'name' => 'Gaveinnpakning',
                'tag' => array('gave', 'extra'),
                'type' => '',
                'image' => 'img/products/gift.jpg',
                'text' => 'Lorem ipsum dolor sit amet',
                'price' => array('100')
            ),
            array(
                'name' => 'Gaveeske',
                'tag' => array('gave', 'extra'),
                'type' => '',
                'image' => 'img/products/gift_box.jpg',
                'text' => 'Lorem ipsum dolor sit amet',
                'price' => array('200')
            ),
            array(
                'name' => 'Konfekt',
                'tag' => array('extra'),
                'type' => '',
                'image' => 'img/products/chocolates.jpg',
                'text' => 'Lorem ipsum dolor sit amet',
                'price' => array('340')
            ),
            array(
                'name' => 'Duftlys',
                'tag' => array('extra'),
                'type' => '',
                'image' => 'img/products/candles.jpg',
                'text' => 'Lorem ipsum dolor sit amet',
                'price' => array('80')
            )
        );
        $array = array();

        $i = 0;
        foreach ($products as $product) {
            if ($i < $count) {
                $array[] = $product;
                $i++;
            }
        }

        return $array;
    }

    /**
     * Parse url and return tags
     * @return array
     */
    public static function getTags() {
        if (isset($_GET['t'])) {
            return $_GET['t'];
        }
    }

    /**
     * Fetch products based on one or more tags
     * @param tags array of tags
     * @return array
     */
    public static function getProductsByTag($tags = array()) {
        $products = self::getProducts();
        $array = array();

        foreach ($products as $product) {
            foreach ($product['tag'] as $tag) {
                if (in_array($tag, $tags)) {
                    $array[] = $product;
                }
            }
        }

        return $array;
    }

    /**
     * Fetch all categories
     * @return array
     */
    public static function getCategories() {
        $categories = array(
            'Anledninger' => array(
                'Bursdag', 'Firmagaver', 'Gratulerer', 'Takk', 'Kondolanse', 'Kjærlighet'
            ),
            'Blomster' => array(
                'Peoner', 'Orkideer', 'Roser', 'Liljer', 'Nelliker'
            ),
            'Farge' => array(
                'Grønn', 'Rød', 'Rosa', 'Oransje', 'Gul', 'Hvit', 'Blå', 'Lilla'
            ),
            'Type' => array(
                'Bukett', 'Borddekorasjon', 'Kranser', 'Potteplante'
            )
        );

        return $categories;
    }

    /**
     * Fetch latest blog
     * @return array
     */
    public static function getPosts($count = 10) {
        $posts = array(
            array(
                'title' => 'Lorem ipsum',
                'date' => '18.06.2013'
            ),
            array(
                'title' => 'Dolor sit amet',
                'date' => '16.06.2013'
            ),
            array(
                'title' => 'Nunc porta',
                'date' => '13.06.2013'
            ),
            array(
                'title' => 'Integer lacus',
                'date' => '08.06.2013'
            )
        );

        $array = array();

        $i = 0;
        foreach ($posts as $post) {
            if ($i < $count) {
                $array[] = $post;
                $i++;
            }
        }

        return $array;
    }

    /**
     * Current page
     */
    public static function currentPage($pid) {
        $products = self::getProducts();
        $page = '';

        foreach ($products as $product) {
            if ($pid === strtolower($product['name'])) {
                $page = $product;
            }
        }

        return $page;
    }

}

?>
