<?php
    $searchString = strtolower(Florus::parseUrl('s'));
    $products = Florus::getProductsByTag(array($searchString));
?>
<div class="row page">
    <section class="columns large-12">
        <h1>Søk</h1>
        <p class="info-box">Søk etter: "<?php echo $searchString; ?>" ga <?php echo count($products); ?> treff</p>

        <div class="products-list row">
            <?php foreach ($products as $product) { ?>
                <?php include 'tpl/parts/product.php'; ?>
            <?php } ?>
        </div>
    </section>
</div>
