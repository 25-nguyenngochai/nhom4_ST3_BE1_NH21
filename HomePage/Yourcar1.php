<?php include "header.php";?>
<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <h3 class="breadcrumb-header">Your Car</h3>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /BREADCRUMB -->

<!-- YOURCAR -->
<div class="container">
    <!-- row -->
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
                <?php
				if(isset($_GET['id'])):
					$id = $_GET['id'];
					if(isset($_SESSION['cart'][$id])){
						$_SESSION['cart'][$id] ++;
					}
					else{
						$_SESSION['cart'][$id] = 1;
                    }
                endif;
	
						foreach ($getAllProducts as $value):
							if(isset($_SESSION['cart'][$value['id']])):
				?>
                <tr>
                    <td><img src="../img/<?php echo $value['image'] ?>" alt="" style="width:80px"></td>
                    <td><a><?php echo $value['name']?></a></td>
                    <td><?php echo $_SESSION['cart'][$value['id']]?></td>
                    <td><?php echo $value['price'] * $_SESSION['cart'][$value['id']]?></td>
                    <td><a href="delete.php?id=<?php echo $value['id']?>">Delete</a></td>
                </tr>
                <?php
							endif;
						endforeach;
	?>
            </table>
        </div>
    </div>
    <!-- /row -->
</div>
<!-- /YOURCAR -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->
<?php include "footer.php";?>