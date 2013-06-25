<?php

$latestProducts = Florus::getProducts(8);
$popluarProducts = Florus::getProducts(4);

?>

<div class="quote">
    <p>«Smak, kunnskap og kvalitet»</p>
</div>

<div class="page row">

    <section class="main columns large-9">

        <article>
            <h1 class="beta">Sist kjøpte</h1>
            <div class="products-list row">

                <?php foreach($latestProducts as $product) { ?>

                    <div class="product columns large-3">
                        <div class="content">
                            <figure class="image">
                                <img src="<?php echo $product['image'];?>" alt="Lorem ipsum">
                            </figure>
                            <div class="info">
                                <p class="text"><?php echo $product['name']; ?></p>
                                <div class="price"><?php echo $product['price']; ?></div>
                                <div class="button">Kjøp</div>
                            </div>
                        </div>
                    </div>

                <?php } ?>

            </div>
        </article>

        <span class="separator"><i></i></span>

        <article>
            <h1 class="beta">Populære</h1>
            <div class="products-list row">

                <?php foreach($popluarProducts as $product) { ?>

                    <div class="product columns large-3">
                        <div class="content">
                            <figure class="image">
                                <img src="<?php echo $product['image'];?>" alt="Lorem ipsum">
                            </figure>
                            <div class="info">
                                <p class="text"><?php echo $product['name']; ?></p>
                                <div class="price"><?php echo $product['price']; ?></div>
                                <div class="button">Kjøp</div>
                            </div>
                        </div>
                    </div>

                <?php } ?>
            </div>
        </article>

    </section>

    <?php require_once 'tpl/parts/sidebar.php'; ?>

</div>
