<?php
include "config.php";
include "models/db.php";
include "models/manufacture.php";
$Manufacture = new Manufacture;
if (isset($_POST['submit'])) {
    $Manufacture-> editManufactures($_POST['name'], $_POST['id']);
}
else
{
    echo 0;
}
header('location:Manufactures.php');?>