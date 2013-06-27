<?php
$tags = Florus::getTags();
$currentTags = ($tags ? $tags : array());
?>

<ul class="categories">
    <?php foreach ($categories as $key => $subCategories) { ?>
        <li>
            <a href=""><?php echo $key; ?></a>
            <ul class="sub">
                <?php foreach ($subCategories as $category) { ?>
                    <li <?php echo (in_array(strtolower($category), $currentTags) ? 'class="active"' : '') ?>>
                        <a href="<?php echo '?p=products&t[]=' . strtolower($category) ?>">
                            <?php echo $category; ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </li>
    <?php } ?>
</ul>
