<?php
session_start();
include "../Admin/config.php";
include "../Admin/models/db.php";
include "../Admin/models/Admin.php";
$Admin = new Admin;
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($Admin->checkLogin($username, $password)){
        $_SESSION['admin'] = $username;
        header('location:../Admin/index.php');
    } else {
        header('location:index.php');
    }
}
?>