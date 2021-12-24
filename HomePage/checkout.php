<?php include "header.php";?>
<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <h3 class="breadcrumb-header">Checkout</h3>
                <ul class="breadcrumb-tree">
                    <li><a href="#">Home</a></li>
                    <li class="active">Checkout</li>
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
            <form action="" method="post" enctype="multipart/form-data">
                <div class="col-md-7">
                    <?php if(isset($_SESSION['user'])):
                    $getAllUser = $User -> getAllUser($_SESSION['user'])?>
                    <!-- Billing Details -->
                    <div class="billing-details">
                        <div class="section-title">
                            <h3 class="title">Billing address</h3>
                        </div>
                        <div class="form-group">
                            <input value="<?php echo $getAllUser[0]['Username'];?>" readonly class="input" type="text"
                                name="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input value="<?php echo $getAllUser[0]['Name'];?>" class="input" type="text" name="names"
                                placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input value="<?php echo $getAllUser[0]['Email'];?>" class="input" type="email" name="email"
                                placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input value="<?php echo $getAllUser[0]['SDT'];?>" class="input" type="tel" name="tel"
                                placeholder="Telephone">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="address" placeholder="Address">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" placeholder="City">
                        </div>
                    </div>
                    <?php endif;?>
                </div>

                <!-- Order Details -->
                <div class="col-md-5 order-details">
                    <div class="section-title text-center">
                        <h3 class="title">Your Order</h3>
                    </div>
                    <div class="order-summary">
                        <div class="order-col">
                            <div><strong>PRODUCTS</strong></div>
                            <div><strong>TOTAL</strong></div>
                        </div>
                        <?php 
					 if(isset($_GET['youcar'])):
						$id = $_GET['youcar'];
						if(isset($_SESSION['cart'][$id])){
							$_SESSION['cart'][$id] ++;
						}
						else{
							$_SESSION['cart'][$id] = 1;
						}
					endif;
					$totalPrice = 0;
					foreach ($getAllProducts as $value):
                              if(isset($_SESSION['cart'][$value['id']])):
							  ?>
                        <div class="order-products">
                            <div class="order-col">
                                <div><?php echo $_SESSION['cart'][$value['id']].'x '.$value['name']?>
                                </div>
                                <?php $total = ($value['price'] * $_SESSION['cart'][$value['id']]);?>
                                <div><?php echo number_format($total)?>VND</div>
                            </div>
                        </div>
                        <?php
					 $totalPrice +=$total;
							endif;
						endforeach;
                    ?>
                        <div class="order-col">
                            <div>Shiping</div>
                            <div><strong>FREE</strong></div>
                        </div>
                        <div class="order-col">
                            <div><strong>TOTAL</strong></div>
                            <div><strong>
                                    <h4><?php echo number_format($totalPrice);?> VNĐ</h4>
                                </strong></div>
                        </div>
                    </div>
                    <button class="primary-btn" id="purchase-btn">Mua hàng</button>
                </div>
            </form>
            <!-- /Order Details -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->
<?php include "footer.php";?>