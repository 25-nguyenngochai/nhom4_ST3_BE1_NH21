<?php
include "config.php";
include "models/db.php";
include "models/product.php";;
$Product = new Product;
if (isset($_GET['id'])) {
    $Product->delProducts($_GET['id']);
}
header('location:products.php');
?>