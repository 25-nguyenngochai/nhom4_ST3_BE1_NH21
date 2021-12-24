<?php
include "config.php";
include "models/db.php";
include "models/protype.php";
$Protype = new Protype;
if (isset($_GET['id'])) {
    if ( $Protype->checkCanDelete($_GET['id'])) {
        $Protype->delProtypes($_GET['id']);
    }
}
header('location:protypes.php');
?>