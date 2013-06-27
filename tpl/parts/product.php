<?php
    // Get file extension
    $file = explode( '.', $product['image'] );
    $filePath = $file[0] . '_thumb.' . $file[1];

    // Generate thumbnail
    if (!file_exists($filePath)) {
        $thumb = new Imagick($product['image']);
        $thumb->cropThumbnailImage(200,200);
        $thumb->writeImage($filePath);
    }
?>
<div class="product columns large-3 small-6">
    <div class="content">
        <a href="<?php echo '?p=product&n=' . strtolower($product['name']); ?>">
            <figure class="image">
                <img src="<?php echo $filePath; ?>" alt="Lorem ipsum">
            </figure>
        </a>
        <div class="info">
            <p class="text"><?php echo $product['name']; ?></p>
            <div class="price"><?php echo 'Fra nok ' . $product['price'][0] . '-,'; ?></div>
            <div class="button add">Kjøp</div>
        </div>
    </div>
</div>
