<?php require_once 'bin/florus.php';?>
<!DOCTYPE html>
<!--[if lt IE 9 ]> <html class="lt-ie9"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="no"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Florus - <?php echo Florus::getPageTitle(); ?></title>
    <link rel="icon" href="favicon.png">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/florus.css">
    <script src="js/vendor/modernizr.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQ5lYTWgpHcp8b5OUKOlYlCn1oHlpIdbM&amp;sensor=true"></script>
    <script data-main="js/main" src="js/require.js"></script>
</head>
<body class="<?php echo Florus::parseUrl('p'); ?>">

<header class="main">
    <div class="row">
        <a href="/" class="columns small-12 large-4">
            <figure class="logo">
            </figure>
        </a>
        <div class="quick-search columns large-4 small-12">
            <form action="/" method="get">
                <input type="hidden" name="p" value="search" id="">
                <input type="text" name="s" placeholder="Liljer, roser...">
                <input class="button" type="submit" value="Søk">
            </form>
        </div>
    </div>
    <?php require_once 'tpl/parts/navigation.php'; ?>
</header>
