<aside class="sidebar columns large-3">

        <div class="columns large-12 small-6 box categories">
            <h2>Kategorier</h2>
            <?php
                $categories = Florus::getCategories();
                require_once 'tpl/parts/categories.php';
            ?>
        </div>

        <div class="columns large-12 small-6 box">
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

        <div class="columns large-12 small-6 box blog">
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

        <div class="columns large-12 small-6 box newsletter">
            <h2>Nyhetsbrev</h2>
            <form action="" class="validate">
                <label for="email" class="required">E-post:</label>
                <input type="email" id="email" name="email" placeholder="blomster@finn.no">
                <input type="submit" value="Meld meg på" class="button next" disabled>
            </form>
        </div>

        <div class="columns large-12 small-6 box login">
            <h2>Logg inn</h2>
            <p>Velkommen, Mathias</p>
        </div>

</aside>