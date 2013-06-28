<div class="page row">

    <section class="columns large-12">
        <h1>Handlevogn</h1>

        <div class="products-list row">
            <?php foreach (Florus::getProducts(3) as $product) { ?>
                <?php include 'tpl/parts/list_product.php'; ?>
            <?php } ?>
            <div class="sum columns large-12"></div>
        </div>

        <div class="actions">
            <div class="button remove all">Tøm handlekurven</div>
            <div class="button"><a href="/?p=purchase">Kjøp alle</div>
        </div>
    </section>

</div>
