<?php
include "config.php";
include "models/db.php";
include "models/manufacture.php";
$Manufacture = new Manufacture;
if (isset($_GET['id'])) {
    if ( $Manufacture->checkCanDelete($_GET['id'])) {
        $Manufacture->delManufactures($_GET['id']);
    }
}
header('location:Manufactures.php');
?>