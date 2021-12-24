<!doctype html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logoshop.png">
    <link href="css/trangbanhang.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
    <title>
        Đăng Ký-Đăng Nhập
    </title>
</head>

<body>
    <header class="dangky">
        <div class="container">
            <div class="tem1" id="dangky-1">Đăng Ký</div>
            <div class="tem2" id="dangnhap-1">Đăng Nhập</div>
            <span class="support" onclick="location.href='../HomePage/index.php';">Home</span>
        </div>
    </header>
    <div class="bg-desgin">
    </div>
    <div class="form">
        <div class="mainform" id="dangky">
            <form name="form1" action="adddangky.php" method="post" enctype="multipart/form-data">
                <h1>Đăng Ký</h1>
                <input class="input" required name="nameuser" type="text" placeholder="Họ và tên người dùng" />
                <input class="input" required name="username" type="text" placeholder="Tên đăng nhập" />
                <input class="input" required name="password" type="password" placeholder="Mật Khẩu" />
                <input class="input" required name="passwords" type="passwords" placeholder="Mật Khẩu" />
                <input class="input" required name="Email" type="text" placeholder="Email " />
                <input class="input" required name="sdt" type="number" placeholder="Số điện thoại" />
                <p>Bạn đã có tài khoản?<a onclick="dangnhap();" href="#"> Đăng nhập </a></p>
                <input class="input" type="submit" name="submit" value="Đăng Ký Ngay!" />
            </form>
        </div>
    </div>
    <div class="form-1">
        <form action="loginUser.php" method="post" enctype="multipart/form-data">
            <div class="mainform-1" id="dangnhap">
                <h1>Đăng Nhập</h1>
                <input class="input-1" type="text" name="username" required placeholder="Tên Đăng Nhập" />
                <input class="input-1" type="password" name="password" required placeholder="Mật Khẩu" />
                <a href="#">Quên mật khẩu?</a>
                <p> chưa có tài khoản?<a onclick="dangky();" href="#"> Đăng ký </a></p>
                <input class="input-1" type="submit" name="submit" type="button" value="Đăng Nhập" />
            </div>
        </form>
    </div>
    <script src="js/slide.js"></script>
</body>

</html>