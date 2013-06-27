<?php

/* Require footer */
require_once 'tpl/header.php';

/* Include template based on url */
$tpl = Florus::parseUrl('p');

if ($tpl && file_exists('tpl/' . $tpl . '.php')) {
    require_once 'tpl/' . $tpl . '.php';
}

/* Include footer */
require_once 'tpl/footer.php';

?>
