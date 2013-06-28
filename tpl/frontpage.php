<?php
    $products = new Florus;
?>
<div class="feature">
    <div class="wrap">
        <ul data-orbit data-options="bullets: false; timer_speed: 4000;pause_on_hover: false;">
            <li>
                <img src="img/slides/slide3.jpg" alt="">
                <div class="orbit-caption"><a href="/?p=products&amp;t[]=hvit">Ikke glem blomster til sommeren!</a></div>
            </li>
            <li>
                <img src="img/slides/slide1.jpg" alt="">
                <div class="orbit-caption"><a href="/?p=products&amp;t[]=bukett">Nye, elegante buketter til bryllup!</a></div>
            </li>
            <li>
                <img src="img/slides/slide2.jpg" alt="">
                <div class="orbit-caption"><a href="/?p=products&amp;t[]=borddekorasjon">TIlbud på borddekorasjoner</a></div>
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
                    foreach($products->getProducts(4) as $product) {
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
                    foreach($products->getProducts(4, 4) as $product) {
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
                    foreach($products->getProducts(4, 2) as $product) {
                        include 'tpl/parts/product.php';
                    }
                ?>
            </div>
        </article>

    </section>

    <?php require_once 'tpl/parts/sidebar.php'; ?>

</div>
