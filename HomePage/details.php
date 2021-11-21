<?php include "header.php";?>
<!-- SECTION -->
<br><br>
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <?php if(isset($_GET['id'])):
							$id = $_GET['id'];
							$getProductById = $product -> getProductById($id);
								foreach ($getProductById as $value):
						?>
        <div class="row">
            <!-- Product thumb imgs -->
            <div class="col-md-4 col-md-push-1">
                <div id="product-main-img">
                    <div class="product-preview">
                        <img src="../img/<?php echo $value['image'] ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-2">
            </div>
            <div class="col-md-5">
                <div class="product-details">
                    <h2 class="product-name"><?php echo $value['name'];?></h2>
                    <h4 class="product-price"><?php echo number_format($value['price']) ?> VND</h4>
                    <div>
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                    <br>
                    <p><?php echo $value['description'] ?></p>
                    <div class="add-to-cart"><button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to
                            cart</button></div>
                    <ul class="product-btns">
                        <li><a href="#"><i class="fa fa-heart-o"></i> add to wishlist</a></li>
                    </ul>
                    <ul class="product-links">
                        <li>Manufacturer:</li>
                        <li><?php echo $value['type_name']?></li>
                        <i class="fa fa-exchange"></i>
                        <li>Protype:</li>
                        <li><?php echo $value['manu_name']?></li>
                    </ul>
                    <ul class="product-links">
                        <li>Share:</li>
                        <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/?lang=vi"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.google.com.vn/?hl=vi"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="https://www.google.com/intl/vi/gmail/about/"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- /Product details -->

            <!-- Product tab -->
            <div class="col-md-12">
                <div id="product-tab">
                    <!-- product tab nav -->
                    <ul class="tab-nav">
                        <li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
                        <li><a data-toggle="tab" href="#tab2">Details</a></li>
                    </ul>
                    <!-- /product tab nav -->

                    <!-- product tab content -->
                    <div class="tab-content">
                        <!-- tab1  -->
                        <div id="tab1" class="tab-pane fade in active">
                            <div class="row">
                                <div class="col-md-12">
                                    <p><?php echo $value['description'] ?></p>
                                </div>
                            </div>
                        </div>
                        <!-- /tab1  -->

                        <!-- tab2  -->
                        <div id="tab2" class="tab-pane fade in">
                            <div class="row">
                                <div class="col-md-12">
                                    <p><?php echo $value['description'] ?></p>
                                </div>
                            </div>
                        </div>
                        <!-- /tab2  -->
                    </div>
                    <!-- /product tab content  -->
                </div>
            </div>
            <!-- /product tab -->
        </div>
        <?php endforeach;
						endif;?>
        <!-- /row -->

        <!---->

         <!-- row -->
         <?php if(isset($_GET['idknb'])):
							$idknb = $_GET['idknb'];
							$getProductById = $product -> getProductById($idknb);
								foreach ($getProductById as $value):
						?>
        <div class="row">
            <!-- Product thumb imgs -->
            <div class="col-md-4 col-md-push-1">
                <div id="product-main-img">
                    <div class="product-preview">
                        <img src="../img/<?php echo $value['image'] ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-2">
            </div>
            <div class="col-md-5">
                <div class="product-details">
                    <h2 class="product-name"><?php echo $value['name'];?></h2>
                    <h4 class="product-price"><?php echo number_format(($value['price'] * 70) / 100) ?> VND</h4>
                    <a><del><?php echo number_format($value['price'])?> VND </del></a>
                    <div>
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                    <br>
                    <p><?php echo $value['description'] ?></p>
                    <div class="add-to-cart"><button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to
                            cart</button></div>
                    <ul class="product-btns">
                        <li><a href="#"><i class="fa fa-heart-o"></i> add to wishlist</a></li>
                    </ul>
                    <ul class="product-links">
                        <li>Manufacturer:</li>
                        <li><?php echo $value['type_name']?></li>
                        <i class="fa fa-exchange"></i>
                        <li>Protype:</li>
                        <li><?php echo $value['manu_name']?></li>
                    </ul>
                    <ul class="product-links">
                        <li>Share:</li>
                        <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/?lang=vi"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.google.com.vn/?hl=vi"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="https://www.google.com/intl/vi/gmail/about/"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- /Product details -->

            <!-- Product tab -->
            <div class="col-md-12">
                <div id="product-tab">
                    <!-- product tab nav -->
                    <ul class="tab-nav">
                        <li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
                        <li><a data-toggle="tab" href="#tab2">Details</a></li>
                    </ul>
                    <!-- /product tab nav -->

                    <!-- product tab content -->
                    <div class="tab-content">
                        <!-- tab1  -->
                        <div id="tab1" class="tab-pane fade in active">
                            <div class="row">
                                <div class="col-md-12">
                                    <p><?php echo $value['description'] ?></p>
                                </div>
                            </div>
                        </div>
                        <!-- /tab1  -->

                        <!-- tab2  -->
                        <div id="tab2" class="tab-pane fade in">
                            <div class="row">
                                <div class="col-md-12">
                                    <p><?php echo $value['description'] ?></p>
                                </div>
                            </div>
                        </div>
                        <!-- /tab2  -->
                    </div>
                    <!-- /product tab content  -->
                </div>
            </div>
            <!-- /product tab -->
        </div>
        <?php endforeach;
						endif;?>
        <!-- /row -->
    </div>

    <!---->
    <!-- /container -->
</div>
<!-- /SECTION -->

<!-- Section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <div class="col-md-12">
                <div class="section-title text-center">
                    <h3 class="title">Related Products</h3>
                </div>
            </div>

            <!-- product -->
            <div class="col-md-3 col-xs-6">
                <div class="product">
                    <div class="product-img">
                        <img src="./img/product01.png" alt="">
                        <div class="product-label">
                            <span class="sale">-30%</span>
                        </div>
                    </div>
                    <div class="product-body">
                        <p class="product-category">Category</p>
                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                        <div class="product-rating">
                        </div>
                        <div class="product-btns">
                            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to
                                    wishlist</span></button>
                            <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to
                                    compare</span></button>
                            <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick
                                    view</span></button>
                        </div>
                    </div>
                    <div class="add-to-cart">
                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                    </div>
                </div>
            </div>
            <!-- /product -->

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /Section -->
<?php include "footer.php";?>