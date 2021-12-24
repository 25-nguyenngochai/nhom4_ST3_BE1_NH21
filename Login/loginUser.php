<?php
session_start();
include "../HomePage/config.php";
include "../HomePage/models/db.php";
include "../HomePage/models/User.php";
$User = new User;
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($User->checkLogin($username, $password)){
        $_SESSION['user'] = $username;
        $getAllUser = $User -> getAllUser($_SESSION['user']);
        $Name = $getAllUser[0]['Name'];
        echo "<script>alert('Tài khoản $Name đăng nhập thành công')</script>";
        echo "<script> location.href = '../HomePage/index.php';</script>";
    } else {
        header('location:dangkydangnhap.php');
    }
}
?>