<?php
include "config.php";
include "models/db.php";
include "models/product.php";
$Product = new Product;
if (isset($_POST['submit'])) {
    $Product -> addProducts($_POST['name'], $_POST['manu_id'], $_POST['type_id'], $_POST['price'], $_FILES['image']['name'], $_POST['description'], $_POST['feature']);
    //sử lý:
    $target_dir = "../img/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
}
else
{
    echo 0;
}
header('location:products.php');
?>