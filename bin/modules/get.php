<?php

require_once '../florus.php';

$tag = $_GET['tag'];

if ($tag) {
    $products = Florus::getProductsByTag(array($tag));

    echo json_encode($products);
} else {
    echo 'Something went wrong.';
}

?>