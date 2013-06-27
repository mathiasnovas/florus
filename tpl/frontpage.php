<?php

$products = Florus::getProducts(4);

?>

<div class="feature">
    <div class="wrap">
        <ul data-orbit data-options="bullets: false; timer_speed: 4000;pause_on_hover: false;">
            <li>
                <img src="img/slides/slide1.jpg" alt="">
                <div class="orbit-caption">Nye, elegante buketter til bryllup!</div>
            </li>
            <li>
                <img src="img/slides/slide2.jpg" alt="">
                <div class="orbit-caption">TIlbud på borddekorasjoner</div>
            </li>
            <li>
                <img src="img/slides/slide3.jpg" alt="">
                <div class="orbit-caption">Ikke glem blomster til sommeren!</div>
            </li>
        </ul>
    </div>
</div>

<div class="page row">

    <section class="main columns large-9">

        <article>
            <h1 class="beta">Sist kjøpte</h1>
            <div class="products-list row">

                <?php
                    foreach($products as $product) {
                        include 'tpl/parts/product.php';
                    }
                ?>

            </div>
        </article>

        <span class="separator"><i></i></span>

        <article>
            <h1 class="beta">Populære</h1>
            <div class="products-list row">
                <?php
                    foreach($products as $product) {
                        include 'tpl/parts/product.php';
                    }
                ?>
            </div>
        </article>

        <span class="separator"><i></i></span>

        <article>
            <h1 class="beta">Nye</h1>
            <div class="products-list row">
                <?php
                    foreach($products as $product) {
                        include 'tpl/parts/product.php';
                    }
                ?>
            </div>
        </article>

    </section>

    <?php require_once 'tpl/parts/sidebar.php'; ?>

</div>
