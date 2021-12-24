<?php
include "config.php";
include "models/db.php";
include "models/product.php";
$Product = new Product;
$getAllProducts = $Product ->getAllProducts();
if (isset($_POST['submit'])) {
    //sử lý:
    $target_dir = "../img/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "") {
    echo "<script>alert('Xin lỗi, chỉ cho phép các tệp JPG, JPEG, PNG & GIF.')</script>";
    $quay = $getAllProducts[0]['id'];
    echo "<script> location.href = 'Editproject.php?id=$quay';</script>";
    }
    else {
      $Product -> editProduct($_POST['id'], $_POST['name'], $_POST['manu_id'], $_POST['type_id'], $_POST['price'], $_FILES["image"]["name"], $_POST['description'], $_POST['feature']);
      move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    }
  }
else
{
    echo 0;
}
echo "<script> location.href = 'products.php';</script>";
?>