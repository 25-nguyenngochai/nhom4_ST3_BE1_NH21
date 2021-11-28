<?php
session_start();
include "config.php";
include "models/db.php";
include "models/product.php";
$product = new Product;
?>
<?php
if (isset($_GET['id'])){
    unset($_SESSION["cart"][$_GET['id']]);
    header("location:Yourcar.php");
}
?>