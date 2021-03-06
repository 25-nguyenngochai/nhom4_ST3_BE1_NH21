<?php include "header.php";?>
<!-- SECTION -->
<br><br>
<div class="chuyenanh">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="slide">
                    <div class="dieuhuong">
                        <i class="fa fa-chevron-circle-left" onclick="Back();"></i>
                        <i class="fa fa-chevron-circle-right" onclick="Next();"></i>
                    </div>
                    <div class="chuyen-slide">
                        <a><img src="../img/Aseri-830-300-830x300-1.png" alt="slide"></a>
                        <a><img src="../img/4.jpg" alt="slide"></a>
                        <a><img src="../img/tab-s7-fe-800-200-800x200-1.png" alt="slide"></a>
                        <a><img src="../img/800-200-800x200-207.png" alt="slide"></a>
                        <a><img src="../img/800-200-800x200-211.png" alt="slide"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /SECTION -->
<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">New Products</h3>
                    <div class="section-nav">
                        <ul class="section-tab-nav tab-nav">
                            <?php foreach ($getAllManuType as $value):?>
                            <li><a href="newproducts.php?typeid=<?php echo $value['type_id']?>">
                                    <?php echo $value['type_name']?> </a></li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /section title -->

            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <!-- tab -->
                        <div id="tab1" class="tab-pane active">
                            <div class="products-slick" data-nav="#slick-nav-1">
                                <?php foreach($getNewsProducts as $value): ?>
                                <!-- product -->
                                <div class="product">
                                    <br>
                                    <div class="product-img">
                                        <img src="../img/<?php echo $value['image'] ?>" alt="">
                                        <div class="product-label">
                                            <span class="sale">tr??? g??p 0%</span>
                                            <span class="new">NEW</span>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a
                                                href="details.php?id=<?php echo $value['id']?>"><?php echo $value['name'] ?></a>
                                        </h3>
                                        <h4 class="product-price"><?php echo number_format($value['price']) ?> VND</h4>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="product-btns">
                                            <button
                                                onclick="location.href='YourWishlist.php?id=<?php echo $value['id'] ?>';"
                                                class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                    class="tooltipp">add to wishlist</span></button>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <?php if(!isset($_SESSION['user'])):?>
                                        <button onclick="location.href='../Login/dangkydangnhap.php';"
                                            class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to
                                            cart</button>
                                        <?php endif;?>
                                        <?php if(isset($_SESSION['user'])):?>
                                        <button onclick="location.href='Yourcar.php?youcar=<?php echo $value['id']?>';"
                                        class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to
                                        cart</button>
                                        <?php endif;?>
                                    </div>
                                </div>
                                <!-- /product -->
                                <?php endforeach ?>
                            </div>
                            <div id="slick-nav-1" class="products-slick-nav"></div>
                        </div>
                        <!-- /tab -->
                    </div>
                </div>
            </div>
            <!-- Products tab & slick -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<!-- HOT DEAL SECTION -->
<div id="hot-deal" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="hot-deal">
                    <ul class="hot-deal-countdown">
                        <li>
                            <div>
                                <h3>02</h3>
                                <span>Days</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h3>10</h3>
                                <span>Hours</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h3>34</h3>
                                <span>Mins</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h3>60</h3>
                                <span>Secs</span>
                            </div>
                        </li>
                    </ul>
                    <h2 class="text-uppercase">hot deal this week</h2>
                    <p>New Collection Up to 30% OFF</p>
                    <a class="primary-btn cta-btn" href="discount.php?typeknb">Shop now</a>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /HOT DEAL SECTION -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">Top feature</h3>
                    <div class="section-nav">
                        <ul class="section-tab-nav tab-nav">
                            <?php foreach ($getAllManuType as $value):?>
                            <li><a href="topfeature.php?type=<?php echo $value['type_id']?>">
                                    <?php echo $value['type_name']?> </a></li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /section title -->

            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <!-- tab -->
                        <div id="tab2" class="tab-pane fade in active">
                            <div class="products-slick" data-nav="#slick-nav-2">
                                <?php foreach($getNewsProductsTopNB as $value): ?>
                                <!-- product -->
                                <div class="product">
                                    <br>
                                    <div class="product-img">
                                        <img src="../img/<?php echo $value['image'] ?>" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a
                                                href="details.php?id=<?php echo $value['id']?>"><?php echo $value['name'] ?></a>
                                        </h3>
                                        <h4 class="product-price"><?php echo number_format($value['price']) ?> VND</h4>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="product-btns">
                                            <button
                                                onclick="location.href='YourWishlist.php?id=<?php echo $value['id'] ?>';"
                                                class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                    class="tooltipp">add to wishlist</span></button>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <?php if(!isset($_SESSION['user'])):?>
                                        <button onclick="location.href='../Login/dangkydangnhap.php';"
                                            class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to
                                            cart</button>
                                        <?php endif;?>
                                        <?php if(isset($_SESSION['user'])):?>
                                        <button onclick="location.href='Yourcar.php?youcar=<?php echo $value['id']?>';"
                                        class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to
                                        cart</button>
                                        <?php endif;?>
                                    </div>
                                </div>
                                <!-- /product -->
                                <?php endforeach ?>
                            </div>
                            <div id="slick-nav-2" class="products-slick-nav"></div>
                        </div>
                        <!-- /tab -->
                    </div>
                </div>
            </div>
            <!-- /Products tab & slick -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-4 col-xs-6">
                <div class="section-title">
                    <h4 class="title">Top feature</h4>
                    <div class="section-nav">
                        <div id="slick-nav-3" class="products-slick-nav"></div>
                    </div>
                </div>

                <div class="products-widget-slick" data-nav="#slick-nav-3">
                    <div>
                        <?php foreach($getNewsProductsTopNB1 as $value): ?>
                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="../img/<?php echo $value['image'] ?>" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Category</p>
                                <h3 class="product-name"><a
                                        href="details.php?id=<?php echo $value['id']?>"><?php echo $value['name'] ?></a>
                                </h3>
                                <h4 class="product-price"><?php echo number_format($value['price']) ?> VND</h4>
                            </div>
                        </div>
                        <!-- /product widget -->
                        <?php endforeach?>
                    </div>

                    <div>
                        <?php foreach($getNewsProductsTopNB2 as $value): ?>
                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="../img/<?php echo $value['image'] ?>" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Category</p>
                                <h3 class="product-name"><a
                                        href="details.php?id=<?php echo $value['id']?>"><?php echo $value['name'] ?></a>
                                </h3>
                                <h4 class="product-price"><?php echo number_format($value['price']) ?> VND</h4>
                            </div>
                        </div>
                        <!-- /product widget -->
                        <?php endforeach?>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xs-6">
                <div class="section-title">
                    <h4 class="title">Top feature</h4>
                    <div class="section-nav">
                        <div id="slick-nav-4" class="products-slick-nav"></div>
                    </div>
                </div>

                <div class="products-widget-slick" data-nav="#slick-nav-4">
                    <div>
                        <?php foreach($getNewsProductsTopNB3 as $value): ?>
                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="../img/<?php echo $value['image'] ?>" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Category</p>
                                <h3 class="product-name"><a
                                        href="details.php?id=<?php echo $value['id']?>"><?php echo $value['name'] ?></a>
                                </h3>
                                <h4 class="product-price"><?php echo number_format($value['price']) ?> VND</h4>
                            </div>
                        </div>
                        <!-- /product widget -->
                        <?php endforeach?>
                    </div>

                    <div>
                        <?php foreach($getNewsProductsTopNB4 as $value): ?>
                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="../img/<?php echo $value['image'] ?>" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Category</p>
                                <h3 class="product-name"><a
                                        href="details.php?id=<?php echo $value['id']?>"><?php echo $value['name'] ?></a>
                                </h3>
                                <h4 class="product-price"><?php echo number_format($value['price']) ?> VND</h4>
                            </div>
                        </div>
                        <!-- /product widget -->
                        <?php endforeach?>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xs-6">
                <div class="section-title">
                    <h4 class="title">Top feature</h4>
                    <div class="section-nav">
                        <div id="slick-nav-5" class="products-slick-nav"></div>
                    </div>
                </div>

                <div class="products-widget-slick" data-nav="#slick-nav-5">
                    <div>
                        <?php foreach($getNewsProductsTopNB5 as $value): ?>
                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="../img/<?php echo $value['image'] ?>" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Category</p>
                                <h3 class="product-name"><a
                                        href="details.php?id=<?php echo $value['id']?>"><?php echo $value['name'] ?></a>
                                </h3>
                                <h4 class="product-price"><?php echo number_format($value['price']) ?> VND</h4>
                            </div>
                        </div>
                        <!-- /product widget -->
                        <?php endforeach?>
                    </div>
                    <div>
                        <?php foreach($getNewsProductsTopNB6 as $value): ?>
                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="../img/<?php echo $value['image'] ?>" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Category</p>
                                <h3 class="product-name"><a
                                        href="details.php?id=<?php echo $value['id']?>"><?php echo $value['name'] ?></a>
                                </h3>
                                <h4 class="product-price"><?php echo number_format($value['price']) ?> VND</h4>
                            </div>
                        </div>
                        <!-- /product widget -->
                        <?php endforeach?>
                    </div>
                </div>
            </div>

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<!-- NEWSLETTER -->
<div id="newsletter" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="newsletter">
                    <p>Sign Up for the <strong>NEWSLETTER</strong></p>
                    <form>
                        <input class="input" type="email" placeholder="Enter Your Email">
                        <button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
                    </form>
                    <ul class="newsletter-follow">
                        <li>
                            <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/?lang=vi"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /NEWSLETTER -->
<?php include "footer.php";?>