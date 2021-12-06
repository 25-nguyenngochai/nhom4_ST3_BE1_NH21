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
                    <li><a href="?typeknb">Home</a></li>
                    <?php foreach ($getAllManuType as $value):?>
                    <li><a href="?typeid_knb=<?php echo $value['type_id']?>"> <?php echo $value['type_name']?></a></li>
                    <?php endforeach;?>
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

                        <div class="input-checkbox">
                            <input type="checkbox" id="category-1">
                            <label for="category-1">
                                <span></span>
                                Laptops
                                <small>(120)</small>
                            </label>
                        </div>

                        <div class="input-checkbox">
                            <input type="checkbox" id="category-2">
                            <label for="category-2">
                                <span></span>
                                Smartphones
                                <small>(740)</small>
                            </label>
                        </div>

                        <div class="input-checkbox">
                            <input type="checkbox" id="category-3">
                            <label for="category-3">
                                <span></span>
                                Cameras
                                <small>(1450)</small>
                            </label>
                        </div>

                        <div class="input-checkbox">
                            <input type="checkbox" id="category-4">
                            <label for="category-4">
                                <span></span>
                                Accessories
                                <small>(578)</small>
                            </label>
                        </div>

                        <div class="input-checkbox">
                            <input type="checkbox" id="category-5">
                            <label for="category-5">
                                <span></span>
                                Laptops
                                <small>(120)</small>
                            </label>
                        </div>

                        <div class="input-checkbox">
                            <input type="checkbox" id="category-6">
                            <label for="category-6">
                                <span></span>
                                Smartphones
                                <small>(740)</small>
                            </label>
                        </div>
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
					if (isset($_GET['typeknb'])) :?>
                <div class="row">
                    <?php
						$typeknb = $_GET['typeknb'];
						$getNewsProductsTopKNB = $product->getNewsProductsTopKNB($typeknb);
						// hiển thị 5 sản phẩm trên 1 trang
						$perPage = 6;
						// Lấy số trang trên thanh địa chỉ
						if (isset($_GET['page'])) {
							$page = $_GET['page'];
						} else {
							$page = 1;
						}
						// Tính tổng số dòng, ví dụ kết quả là 18
						$total = count($getNewsProductsTopKNB);
						// lấy đường dẫn đến file hiện hành
						$url = $_SERVER['PHP_SELF']."?typeknb=".$typeknb;
						$get6ProductByDiscount = $product -> get6ProductByDiscount($page, $perPage);
						foreach ($get6ProductByDiscount as $value) :
					?>
                    <!-- product -->
                    <div class="col-md-4 col-xs-6">
                        <div class="product">
                            <div class="product-img">
                                <br>
                                <img src="../img/<?php echo $value['image'] ?>" alt="">
                                <div class="product-label">
                                    <span class="sale">30% OFF</span>
                                </div>
                            </div>
                            <div class="product-body">
                                <p class="product-category">Category</p>
                                <h3 class="product-name"><a
                                        href="details.php?idknb=<?php echo $value['id']?>"><?php echo $value['name'] ?></a>
                                </h3>
                                <h4 class="product-price"><del><?php echo number_format($value['price'])?> VND </del>
                                </h4>
                                <h4 class="product-price"><?php echo number_format(($value['price'] * 70) / 100) ?> VND
                                </h4>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product-btns">
                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                            class="tooltipp">add to wishlist</span></button>
                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                            class="tooltipp">add to compare</span></button>
                                    <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick
                                            view</span></button>
                                </div>
                            </div>
                            <div class="add-to-cart">
                                <a class="primary-btn cta-btn" href="Yourcar.php?youcar=<?php echo $value['id']?>"><i
                                        class="fa fa-shopping-cart"></i> add to cart</a>
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
                        <?php 
                        echo $product -> paginate($url, $total, $perPage) ?>
                    </ul>
                </div>
                <?php endif; ?>


                <!---------------------------------->


                <!-- /store bottom filter -->
                <?php
					if (isset($_GET['typeid_knb'])) :?>
                <div class="row">
                    <?php
						$typeid_knb = $_GET['typeid_knb'];
						$getAllProductsSPNBTypeid = $product -> getAllProductsSPNBTypeid($typeid_knb);
						// hiển thị 5 sản phẩm trên 1 trang
						$perPage = 6;
						// Lấy số trang trên thanh địa chỉ
						if (isset($_GET['page'])) {
							$page = $_GET['page'];
						} else {
							$page = 1;
						}
						// Tính tổng số dòng, ví dụ kết quả là 18
						$total = count($getAllProductsSPNBTypeid);
						// lấy đường dẫn đến file hiện hành
						$url = $_SERVER['PHP_SELF']."?typeid_knb=".$typeid_knb;
						$get6ProductByKNBTypeid = $product -> get6ProductByKNBTypeid($typeid_knb, $page, $perPage);
						foreach ($get6ProductByKNBTypeid as $value) :
					?>
                    <!-- product -->
                    <div class="col-md-4 col-xs-6">
                        <div class="product">
                            <div class="product-img">
                                <br>
                                <img src="../img/<?php echo $value['image'] ?>" alt="">
                                <div class="product-label">
                                    <span class="sale">30% OFF</span>
                                </div>
                            </div>
                            <div class="product-body">
                                <p class="product-category">Category</p>
                                <h3 class="product-name"><a
                                        href="details.php?idknb=<?php echo $value['id']?>"><?php echo $value['name'] ?></a>
                                </h3>
                                <h4 class="product-price"><del><?php echo number_format($value['price'])?> VND </del>
                                </h4>
                                <h4 class="product-price"><?php echo number_format(($value['price'] * 70) / 100) ?> VND
                                </h4>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product-btns">
                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                            class="tooltipp">add to wishlist</span></button>
                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                            class="tooltipp">add to compare</span></button>
                                    <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick
                                            view</span></button>
                                </div>
                            </div>
                            <div class="add-to-cart">
                                <a class="primary-btn cta-btn" href="Yourcar.php?youcar=<?php echo $value['id']?>"><i
                                        class="fa fa-shopping-cart"></i> add to cart</a>
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