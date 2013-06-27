<h1 class="beta">Tilleggsprodukter</h1>
<div class="products-list row additional">
    <?php foreach (Florus::getProductsByTag(array('extra')) as $product) { ?>
        <?php include 'tpl/parts/product.php'; ?>
    <? } ?>
</div>
