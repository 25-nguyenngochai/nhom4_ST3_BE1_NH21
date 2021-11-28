<?php
include "config.php";
include "models/db.php";
include "models/protype.php";
$Protype = new Protype;
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    //
    $Protype-> addProtypes($name);
}
else
{
    echo 0;
}
header('location:protypes.php');
?>