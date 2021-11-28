<?php
include "config.php";
include "models/db.php";
include "models/product.php";
$Product = new Product;
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $manu_id = $_POST['manu_id'];
    $type_id = $_POST['type_id'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $desc = $_POST['description'];
    $feature = $_POST['feature'];
    //
    $Product-> addProducts($name,$manu_id,$type_id,$price,$image,$desc,$feature);
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