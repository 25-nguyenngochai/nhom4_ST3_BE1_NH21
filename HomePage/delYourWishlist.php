<?php 
session_start();
$id = (isset($_GET['id']) && $_GET['id'] != null) ? $_GET['id'] : 0;
unset($_SESSION['cart1'][$id]);
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>