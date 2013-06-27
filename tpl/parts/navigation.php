<?php
    $current = Florus::parseUrl('p');
?>
<nav class="main navigation">
    <div class="row">
        <a href="#" class="mobile columns small-12">Meny</a>
        <ul class="columns large-10 small-12">
            <?php foreach (Florus::tree() as $key => $val) { ?>
                <li <?php echo (($key == $current) ? 'class="active"' : '') ?>>
                    <a href="<?php echo (($key == 'frontpage') ? '/' : '?p=' . $key ); ?>">
                        <?php echo $val; ?>
                    </a>
                </li>
            <?php } ?>
        </ul>
        <a href="/?p=cart" class="cart columns large-2 small-12">
            3 varer
        </a>
    </div>
</nav>
