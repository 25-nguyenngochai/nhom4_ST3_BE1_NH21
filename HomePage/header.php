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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Electro - HTML Ecommerce Template</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="css/slick.css" />
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <link type="text/css" rel="stylesheet" href="css/styles.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>

<body>
    <!-- HEADER -->
    <header>
        <!-- TOP HEADER -->
        <div id="top-header">
            <div class="container">
                <ul class="header-links pull-left">
                    <li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
                    <li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
                    <li><a href="Map.php"><i class="fa fa-map-marker"></i>Võ Văn Ngân, Linh Chiểu, Thủ Đức</a></li>
                </ul>
                <ul class="header-links pull-right">
                    <li><a href="#"><i class="fa fa-dollar"></i> USD</a></li>
                    <?php
                    if(isset($_SESSION['user'])):
                    $getAllUser = $User -> getAllUser($_SESSION['user'])?>
                    <li><a href="#"><i class="fa fa-user-o"></i>Xin chào <?php echo $getAllUser[0]['Name'];?></a></li>
                    <li><a href="../Login/logoutUser.php"><i class="fa fa-user-o"></i>Logout</a></li>
                    <?php  endif;
                    if (!isset($_SESSION['user'])):?>
                    <li><a href="../Login/dangkydangnhap.php"><i class="fa fa-user-o"></i> My Account</a></li>
                    <?php endif;?>
                </ul>
            </div>
        </div>
        <!-- /TOP HEADER -->

        <!-- MAIN HEADER -->
        <div id="header">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-3">
                        <div class="header-logo">
                            <a href="#" class="logo">
                                <img src="../img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- /LOGO -->

                    <!-- SEARCH BAR -->
                    <div class="col-md-6">
                        <div class="header-search">
                            <form method="get" action="result.php">
                                <select class="input-select">
                                    <option>All Categories</option>
                                </select>
                                <input class="input" placeholder="Search here" name="keyword">
                                <button type="submit" class="search-btn">Search</button>
                            </form>
                        </div>
                    </div>
                    <!-- /SEARCH BAR -->

                    <!-- ACCOUNT -->
                    <div class="col-md-3 clearfix">
                        <div class="header-ctn">
                            <!-- Wishlist -->
                            <div class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <i class="fa fa-heart-o"></i>
                                    <span>Your Wishlist</span>
                                    <?php
									//thanh toán
									$listCart = (isset($_SESSION['cart1'])) ? $_SESSION['cart1'] : [];
									// var_dump($listCart);
									$listCart = (isset($listCart)) ? $listCart : 0;
									//echo count($listCart);
									if ($listCart != 0) :
									?>
                                    <div class="qty">
                                        <?php
											echo ($listCart == 0) ? 0 : count($listCart) ?>
                                    </div>
                                    <?php endif ?>
                                </a>
                                <div class="cart-dropdown">
                                    <span style="font-weight: bold">Sản phẩm yêu thích</span>
                                    <hr>
                                    <div class="cart-list">
                                        <?php

										$totalPrice = 0;

										if ($listCart != 0) :
											foreach ($listCart as $key => $cart) :
												$cartItem = $product->getProductById($key);
												//var_dump($cart);
										?>
                                        <div class="product-widget">
                                            <div class="product-img">
                                                <img src="../img/<?php echo $cartItem[0]['image'] ?>" alt="">
                                            </div>
                                            <div class="product-body">
                                                <h3 class="product-name"><a
                                                        href="details.php?id=<?php echo $cartItem[0]['id']?>"><?php echo $cartItem[0]['name'] ?></a>
                                                </h3>
                                                <h4 class="product-price"><span
                                                        class="qty"><?php echo $cart['quantity'] ?>x</span><?php echo number_format($cart['quantity'] * $cartItem[0]['price']) ?>
                                                    VNĐ</h4>
                                            </div>
                                            <a href="delYourWishlist.php?id=<?php echo $key ?>" class="delete"><i
                                                    class="fa fa-close"></i></a>
                                        </div>

                                        <?php
												$totalPrice += ($cartItem[0]['price'] * $cart['quantity']);
											endforeach;
										else :
											?>
                                        <?php endif ?>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <!-- /Wishlist -->

                            <!-- Cart -->
                            <?php if(isset($_SESSION['user'])):?>
                            <div class="dropdown">
                                <a href="Yourcar.php">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>Your Cart</span>
                                </a>
                            </div>
                            <?php endif;?>
                            <?php if(!isset($_SESSION['user'])):?>
                            <div class="dropdown">
                                <a href="../Login/dangkydangnhap.php">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>Your Cart</span>
                                </a>
                            </div>
                            <?php endif;?>
                            <!-- /Cart -->

                            <!-- Menu Toogle -->
                            <div class="menu-toggle">
                                <a href="#">
                                    <i class="fa fa-bars"></i>
                                    <span>Menu</span>
                                </a>
                            </div>
                            <!-- /Menu Toogle -->
                        </div>
                    </div>
                    <!-- /ACCOUNT -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- /MAIN HEADER -->
    </header>
    <!-- /HEADER -->

    <!-- NAVIGATION -->
    <nav id="navigation">
        <!-- container -->
        <div class="container">
            <!-- responsive-nav -->
            <div id="responsive-nav">
                <!-- NAV -->
                <ul class="main-nav nav navbar-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                    <?php foreach ($getAllManuType as $value):?>
                    <li><a href="products.php?type_id=<?php echo $value['type_id']?>"> <?php echo $value['type_name']?>
                        </a></li>
                    <?php endforeach;?>
                </ul>
                <!-- /NAV -->
            </div>
            <!-- /responsive-nav -->
        </div>
        <!-- /container -->
    </nav>