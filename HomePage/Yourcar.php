<?php include "header.php";?>
<div class="tranggiohang">
    <div class="container">
        <div class="row ttsp">
            <span class="col-md-3">Image</span>
            <span class="col-md-3">Name</span>
            <span class="col-md-2">Quantity</span>
            <span class="col-md-3">Price</span>
            <span>Action</span>
        </div>
    </div>
    <div id="sosp" class="container">
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
                foreach ($getAllProducts as $value):
                    if(isset($_SESSION['cart'][$value['id']])):
        ?>
        <div class="row sanpham">
            <span class="col-md-2"><img src="../img/<?php echo $value['image'] ?>" alt="" style="width:80px"></span>
            <span class="col-md-4"><?php echo $value['name']?></span>
            <span class="col-md-2"><?php echo $_SESSION['cart'][$value['id']]?></span>
            <span
                class="col-md-3"><?php echo number_format($value['price'] * $_SESSION['cart'][$value['id']])?>VND</span>
            <span><a href="delete.php?id=<?php echo $value['id']?>">Delete</a></span>
        </div>
        <?php
							endif;
						endforeach;
                    ?>
    </div>
    <div class="container">
        <div class="row tongtien">
            <span>Tổng Tiền :</span>
        </div>
    </div>
    <div class="container">
        <div class="row thongtin">
            <input onclick="dathang(mang2)" class="input2" type="button" value="Đặt Hàng" />
        </div>
    </div>
</div>
<hr class="blue" />
<?php include "footer.php";?>