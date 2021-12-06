<?php
include "config.php";
include "models/db.php";
include "models/protype.php";
$Protype = new Protype;
if (isset($_POST['submit'])) {
    $Protype-> editProtypes($_POST['name'], $_POST['id']);
}
else
{
    echo 0;
}
header('location:protypes.php');
?>