<?php
include "config.php";
include "models/db.php";
include "models/details.php";
$Details = new Details;
if (isset($_POST['submit'])) {
    $Details -> addDetails($_POST['name'], $_POST['names'], $_POST['email'], $_POST['tel'], $_POST['address'], $_POST['city'],$_POST['city']);
}
else
{
    echo 0;
}
header('location:index.php');
?>