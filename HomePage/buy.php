<?php
session_start();
include "config.php";
include "models/db.php";
include "models/product.php";
include "models/manufacture.php";
include "models/protype.php";
include "models/User.php";
$User = new User;
$product = new Product;
$getAllProducts = $product -> getAllProducts();
$getNewsProducts = $product -> getNewsProducts();
$getNewsProductsTopNB = $product -> getNewsProductsTopNB();
$getNewsProductsTopNB1 = $product -> getNewsProductsTopNB1();
$getNewsProductsTopNB2 = $product -> getNewsProductsTopNB2();
$getNewsProductsTopNB3 = $product -> getNewsProductsTopNB3();
$getNewsProductsTopNB4 = $product -> getNewsProductsTopNB4();
$getNewsProductsTopNB5 = $product -> getNewsProductsTopNB5();
$getNewsProductsTopNB6 = $product -> getNewsProductsTopNB6();
$Manufacture = new Manufacture;
$getAllManu = $Manufacture -> getAllManu();
$Protype = new Protype;
$getAllManuType = $Protype -> getAllManuType();

$username = $_POST['Username'];

$_SESSION['cart'][$username] = [];


$id = $user->getUser($username)->user_id;
$carts = json_encode($_POST['carts']);

$purchase->buy($id, $carts);

echo json_encode('ok');
