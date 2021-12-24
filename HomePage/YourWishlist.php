<?php
session_start();
$productId = ($_GET['id'] != null) ? $_GET['id'] : null;
if ($productId != null) {
  if ($_SESSION['cart1'] && $_SESSION['cart1'][$productId]) {
    $_SESSION['cart1'][$productId]['quantity']++;
  } else {
    $_SESSION['cart1'][$productId] = $products[$productId]; $_SESSION['cart1'][$productId]['quantity'] = 1;
  }
}
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>