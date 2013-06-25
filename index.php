<?php

/* Require footer */
require_once 'tpl/header.php';

/* Include template based on url */
$tpl = Florus::parseUrl();

if ($tpl) {
    require_once $tpl;
}

/* Include footer */
require_once 'tpl/footer.php';

?>
