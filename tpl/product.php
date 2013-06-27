<?php

$pid = Florus::parseUrl('n');
$product = Florus::currentPage($pid);

?>

<div class="page row">

    <section class="columns large-12">

        <article class="row product">
            <div class="columns large-6">
                <figure class="image">
                    <img src="<?php echo $product['image']; ?>" alt="">
                </figure>
            </div>

            <div class="columns large-6">
                <h1><?php echo $product['name']; ?></h1>

                <div class="text">
                    <p><?php echo $product['text']; ?></p>
                </div>

                <?php if (count($product['price']) > 1) { ?>
                    <div class="size split">
                        <div class="button active" data-value="<?php echo $product['price'][0]; ?>">
                            Liten
                        </div>
                        <div class="button" data-value="<?php echo $product['price'][1]; ?>">
                            Stor
                        </div>
                    </div>
                <?php } ?>

                <div class="button add">
                    <a href="#">Kjøp: <?php echo 'nok ' . $product['price'][0] . '-,'; ?></a>
                </div>
            </div>
        </article>

        <article class="additional">
            <h1 class="beta">Tilleggsprodukter</h1>

            <div class="products-list row">
                <?php
                    foreach (Florus::getProductsByTag(array('extra')) as $product) {
                        include 'tpl/parts/product.php';
                    } 
                ?>
            </div>
        </article>

    </section>

</div>