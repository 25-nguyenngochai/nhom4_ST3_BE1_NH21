<?php
include "header.php";
?>
<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb-tree">
                    <li><a href="#">Home</a></li>
                    <?php foreach($getAllManu as $value):?>
                    <li><a href="?keyword=<?php echo $value['manu_id']?>"><?php echo $value['manu_name']?></a></li>
                    <?php endforeach?>
                </ul>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /BREADCRUMB -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- ASIDE -->
            <div id="aside" class="col-md-3">
                <!-- aside Widget -->
                <div class="aside">
                    <h3 class="aside-title">Categories</h3>
                    <div class="checkbox-filter">

                        <?php foreach($getAllManuType as $value):?>
                        <div class="input-checkbox">
                            <input type="checkbox" id="category-2">
                            <label for="category-2">
                                <span></span>
                                <?php echo $value['type_name'];?>
                                <small></small>
                            </label>
                        </div>
                        <?php endforeach?>
                    </div>
                </div>
                <!-- /aside Widget -->

                <!-- aside Widget -->
                <div class="aside">
                    <h3 class="aside-title">Price</h3>
                    <div class="price-filter">
                        <div id="price-slider"></div>
                        <div class="input-number price-min">
                            <input id="price-min" type="number">
                            <span class="qty-up">+</span>
                            <span class="qty-down">-</span>
                        </div>
                        <span>-</span>
                        <div class="input-number price-max">
                            <input id="price-max" type="number">
                            <span class="qty-up">+</span>
                            <span class="qty-down">-</span>
                        </div>
                    </div>
                </div>
                <!-- /aside Widget -->

                <!-- aside Widget -->
                <div class="aside">
                    <h3 class="aside-title">Brand</h3>
                    <div class="checkbox-filter">
                        <div class="input-checkbox">
                            <input type="checkbox" id="brand-1">
                            <label for="brand-1">
                                <span></span>
                                SAMSUNG
                                <small>(578)</small>
                            </label>
                        </div>
                        <div class="input-checkbox">
                            <input type="checkbox" id="brand-2">
                            <label for="brand-2">
                                <span></span>
                                LG
                                <small>(125)</small>
                            </label>
                        </div>
                        <div class="input-checkbox">
                            <input type="checkbox" id="brand-3">
                            <label for="brand-3">
                                <span></span>
                                SONY
                                <small>(755)</small>
                            </label>
                        </div>
                        <div class="input-checkbox">
                            <input type="checkbox" id="brand-4">
                            <label for="brand-4">
                                <span></span>
                                SAMSUNG
                                <small>(578)</small>
                            </label>
                        </div>
                        <div class="input-checkbox">
                            <input type="checkbox" id="brand-5">
                            <label for="brand-5">
                                <span></span>
                                LG
                                <small>(125)</small>
                            </label>
                        </div>
                        <div class="input-checkbox">
                            <input type="checkbox" id="brand-6">
                            <label for="brand-6">
                                <span></span>
                                SONY
                                <small>(755)</small>
                            </label>
                        </div>
                    </div>
                </div>
                <!-- /aside Widget -->
            </div>
            <!-- /ASIDE -->

            <!-- STORE -->
            <div id="store" class="col-md-9">
                <!-- store products -->
                <?php
					if (isset($_GET['type_id'])):?>
                <div class="row">
                    <?php
						$type_id = $_GET['type_id'];
						$getProductByTypeId = $product->getProductByTypeId($type_id);
						// hi???n th??? 5 s???n ph???m tr??n 1 trang
						$perPage = 6;
						// L???y s??? trang tr??n thanh ?????a ch???
						if (isset($_GET['page'])) {
							$page = $_GET['page'];
						} else {
							$page = 1;
						}
						// T??nh t???ng s??? d??ng, v?? d??? k???t qu??? l?? 18
						$total = count($getProductByTypeId);
						// l???y ???????ng d???n ?????n file hi???n h??nh
						$url = $_SERVER['PHP_SELF']."?type_id=".$type_id;
						$get6ProductByManuId = $product -> get6ProductByManuId($type_id, $page, $perPage);
						foreach ($get6ProductByManuId as $value) :
					?>
                    <!-- product -->
                    <div class="col-md-4 col-xs-6">
                        <div class="product">
                            <div class="product-img">
                                <br>
                                <img src="../img/<?php echo $value['image'] ?>" alt="">
                                <div class="product-label">
                                </div>
                            </div>
                            <div class="product-body">
                                <p class="product-category">Category</p>
                                <h3 class="product-name"><a
                                        href="details.php?id=<?php echo $value['id']?>"><?php echo $value['name'] ?></a>
                                </h3>
                                <h4 class="product-price"><?php echo number_format($value['price'])?> VND</h4>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product-btns">
                                    <button onclick="location.href='YourWishlist.php?id=<?php echo $value['id'] ?>';"
                                        class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add
                                            to wishlist</span></button>
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
                    </div>
                    <!-- /product -->
                    <?php
						endforeach;
					?>

                </div>
                <!-- /store products -->

                <!-- store bottom filter -->
                <div class="store-filter clearfix">
                    <ul class="store-pagination">
                        <?php echo $product -> paginate($url, $total, $perPage) ?>
                    </ul>
                </div>
                <?php endif; ?>
                <!-- /store bottom filter -->
            </div>
            <!-- /STORE -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<?php include "footer.php"; ?>