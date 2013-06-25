<?php

class Florus {

    /**
     * Parse url and return name with extension.
     * @return string
     */
    public static function parseUrl() {
        if (isset($_GET['p']) && file_exists($_GET['p'] . '.php')) {
            return $_GET['p'] . '.php';
        } else {
            return 'frontpage.php';
        }
    }

    /**
     * Fetch all products
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
                'price' => 'nok 750 -,'
            ),
            array(
                'name' => 'Liljer',
                'tag' => array( 'liljer', 'rød', 'gratulerer' ),
                'type' => 'bukkett',
                'image' => 'img/products/liljer.jpg',
                'text' => 'Lorem ipsum dolor sit amet',
                'price' => 'nok 800 -,'
            ),
            array(
                'name' => 'Peoner',
                'tag' => array( 'peoner', 'rosa', 'kjærlighet' ),
                'type' => 'bukkett',
                'image' => 'img/products/peoner.jpg',
                'text' => 'Lorem ipsum dolor sit amet',
                'price' => 'nok 790 -,'
            ),
            array(
                'name' => 'Kondolanse',
                'tag' => array( 'roser', 'hvit', 'kondolanse' ),
                'type' => 'bukkett',
                'image' => 'img/products/hvit_blanding.jpg',
                'text' => 'Lorem ipsum dolor sit amet',
                'price' => 'nok 790 -,'
            ),
            array(
                'name' => 'Gratulerer',
                'tag' => array('roser', 'rosa', 'hvit', 'gratulerer'),
                'type' => 'bukett',
                'image' => 'img/products/rosa_blanding.jpg',
                'text' => 'Lorem ipsum dolor sit amet',
                'price' => 'nok 850 -,'
            ),
            array(
                'name' => 'Dåp',
                'tag' => array('dåp', 'lilla', 'rosa'),
                'type' => 'bukett',
                'image' => 'img/products/lilla.jpg',
                'text' => 'Lorem ipsum dolor sit amet',
                'price' => 'kr 800 -,'
            )
        );
        $array = array();

        $i = 0;
        foreach($products as $product) {
            if($i < $count) {
                $array[$i] = $product;
                $i++;
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
            'Bursdag',
            'Kjærlighet',
            'Begravelse',
            'Fødsel'
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
        foreach($posts as $post) {
            if($i < $count) {
                $array[$i] = $post;
                $i++;
            }
        }

        return $array;
    }

}

?>
