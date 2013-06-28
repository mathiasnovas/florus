<?php

/* Require footer */
include('tpl/header.php');

/* Include template based on url */
$tpl = Florus::parseUrl('p');

if ($tpl && file_exists('tpl/' . $tpl . '.php')) {
    include 'tpl/' . $tpl . '.php';
}

/* Include footer */
require_once 'tpl/footer.php';

?>
