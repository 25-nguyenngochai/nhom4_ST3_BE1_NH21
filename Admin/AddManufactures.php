<?php
include "config.php";
include "models/db.php";
include "models/manufacture.php";
$Manufacture = new Manufacture;
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    //
    $Manufacture-> addManufactures($name);
}
else
{
    echo 0;
}
header('location:Manufactures.php');
?>