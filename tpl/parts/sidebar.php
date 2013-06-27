<aside class="sidebar columns large-3">

    <div class="box categories">
        <h2>Kategorier</h2>
        <?php
            $categories = Florus::getCategories();
            require_once 'tpl/parts/categories.php';
        ?>
    </div>

    <div class="box">
        <h2>Sosialt</h2>
        <ul>
            <li>
                <a href="">Facebook</a>
            </li>
            <li>
                <a href="">Twitter</a>
            </li>
        </ul>
    </div>

    <div class="box blog">
        <h2>Blogg</h2>
        <ul>
            <?php foreach(FLorus::getPosts() as $post) { ?>
                <li>
                    <a href="#"><?php echo $post['title']; ?></a>
                    <span class="date"><?php echo $post['date']; ?></span>
                </li>
            <?php } ?>
        </ul>
    </div>

    <div class="box newsletter">
        <h2>Nyhetsbrev</h2>
        <form action="">
            <input type="email" placeholder="blomster@finn.no">
            <input type="submit" value="Meld meg på" class="button">
        </form>
    </div>

    <div class="box login">
        <h2>Logg inn</h2>
        <p>Velkommen, Mathias</p>
    </div>

</aside>