<?php
include "../HomePage/config.php";
include "../HomePage/models/db.php";
include "../HomePage/models/User.php";
$User = new User;
if (isset($_POST['submit'])) {
    $name = $_POST['nameuser'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['Email'];
    $sdt = $_POST['sdt'];
    if ($User -> addUser($name, $username, $password, $email, $sdt)) {
        echo "<script>alert('Chúc mừng khách hàng $name đăng ký tài khoản thành công')</script>";
    }
}
else
{
    echo 0;
}
echo "<script> location.href = 'dangkydangnhap.php';</script>";
?>