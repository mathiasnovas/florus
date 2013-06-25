<aside class="sidebar columns large-3">

    <div class="box categories">
        <h2>Kategorier</h2>
        <ul>
            <?php foreach(Florus::getCategories() as $category) { ?>
                <li>
                    <a href="">
                        <?php echo $category; ?>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>

    <div class="box">
        <h2>Sosialt</h2>
        <div class="button facebook">facebook</div>
        <div class="button instagram">instagram</div>
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

    <div class="box login">
        <h2>Logg inn</h2>
        <p>Velkommen, Mathias</p>
    </div>

</aside>