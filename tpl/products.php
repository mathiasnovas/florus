<?php

$tags = Florus::getTags();

if ($tags) {
    $products = Florus::getProductsByTag($tags);
} else {
    $products = Florus::getProducts();
}

$categories = Florus::getCategories();

?>

<div class="page row">

    <section class="columns large-12">

        <h1>Kategorier</h1>

        <nav class="navigation">
            <?php require_once 'tpl/parts/categories.php'; ?>
        </nav>

        <article class="products-list categories row">
            <?php
                if (count($products) > 0) {
                    foreach($products as $product) {
                        include 'tpl/parts/product.php';
                    }
                } else {
                    echo '<div class="message">Beklager, vi har ingen prdukter som matcher filtreringen.</div>';
                }
            ?>
        </article>

    </section>

</div>
