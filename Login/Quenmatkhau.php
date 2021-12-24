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
        Quên Mật Khẩu
    </title>
</head>

<body>
    <header class="dangky">
        <div class="container">
            <div class="tem1" id="dangky-1">Đặt Lại</div>
            <div class="tem2" id="dangnhap-1">Đặt Lại Mật Khẩu</div>
            <span class="support" onclick="location.href='../HomePage/index.php';">Home</span>
        </div>
    </header>
    <div class="bg-desgin">
    </div>
    <div class="form-1">
        <form action="loginUser.php" method="post" enctype="multipart/form-data">
            <div class="mainform-1" id="">
                <h1>Đặt Mật Khẩu</h1>
                <input class="input" required name="sdt" type="number" placeholder="Số điện thoại" />
                <input class="input" name="password" type="password" placeholder="Mật Khẩu Mới" />
                <input class="input" name="passwords" required type="password" placeholder="Nhập Lại Mật Khẩu Mới " />
                <br><br>
                <input class="input" type="submit" name="submit" value="Tạo Lại Mật Khẩu" />
            </div>
        </form>
    </div>
</body>

</html>