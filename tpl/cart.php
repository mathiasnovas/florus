<div class="page row">

    <section class="columns large-12">
        <h1>Handlevogn</h1>

        <form action="index.php?p=purchase">
            <div class="products-list row">
                <?php foreach (Florus::getProducts(3) as $product) { ?>
                    <?php include 'tpl/parts/list_product.php'; ?>
                <?php } ?>
            </div>

            <div class="actions">
                <div class="button remove all">Tøm handlekurven</div>
                <a class="button" href="/?p=purchase">Kjøp alle</a>
            </div>
        </form>
    </section>

</div>