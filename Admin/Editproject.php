<?php include "header.php";?>
<!-- Content Wrapper. Contains page content (EDIT PRODUCTS)-->
<?php if (isset($_GET['id'])):
            $id = $_GET['id']; ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Products Edit</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="products.php">Home</a></li>
                        <li class="breadcrumb-item active">Products Edit</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <form action="Editproducts.php" method="post" enctype="multipart/form-data">
            <?php
            $getProductById = $Product -> getProductById($id);
            foreach($getProductById as $value):?>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Products Edit</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Id</label>
                                <input value="<?php echo $value['id'];?>" name="id" type="text" readonly id="id"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Name</label>
                                <input value="<?php echo $value['name'];?>" name="name" required type="text" id="name"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Manu Name</label>
                                <select id="manu_id" class="form-control custom-select" name="manu_id">
                                    <?php $getAllManu = $Manufacture -> getAllManu();
                                foreach($getAllManu as $values):?>
                                    <option <?php if ($values['manu_id'] == $value['manu_id']) echo "selected" ?>
                                        value="<?php echo $values['manu_id']?>"><?php echo $values['manu_name'] ?>
                                    </option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Type Name</label>
                                <select id="type_id" class="form-control custom-select" name="type_id">
                                    <?php  $getAllManuType = $Protype ->getAllManuType();
                                foreach($getAllManuType as $values):?>
                                    <option <?php if ($values['type_id'] == $value['type_id']) echo "selected" ?>
                                        value="<?php echo $values['type_id']?>"><?php echo $values['type_name'] ?>
                                    </option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputName">Price</label>
                                <input value="<?php echo $value['price'];?>" name="price" required type="number"
                                    id="Price" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputImage">Image</label>
                                <input type="file" id="inputImage" class="form-control" name="image">
                                <br>
                                <img id="hinh" src="../img/<?php echo $value['image'] ?>" alt="" style="width:100px">
                            </div>
                            <script>
                            const inputPro_image = document.querySelector('#inputImage');
                            const hinh = document.querySelector('#hinh');
                            inputImage.onchange = evt => {
                                const [file] = inputImage.files
                                if (file) {
                                    hinh.src = URL.createObjectURL(file)
                                }
                            }
                            </script>
                            <div class="form-group">
                                <label for="inputDescription">Description</label>
                                <textarea required name="description" id="Description" class="form-control"
                                    rows="4"><?php echo $value['description'];?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="inputFeature">Feature</label>
                                <select id="feature" class="form-control custom-select" type="text" name="feature"
                                    required>
                                    <option <?php if ($value['feature'] == 0) echo 'selected' ?>>0</option>
                                    <option <?php if ($value['feature'] == 1) echo 'selected' ?>>1</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <?php endforeach;?>
            <div class="row">
                <div class="col-12">
                    <input name="submit" type="submit" value="Edit Products" class="btn btn-success float-right">
                </div>
            </div>
        </form>
    </section>
    <!-- /.content -->
</div>
<?php endif ?>

<!-- Content Wrapper. Contains page content (EDIT PROTYPES)-->
<?php if (isset($_GET['type_id'])): 
    $type_id = $_GET['type_id'];?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Protypes Edit</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="protypes.php">Home</a></li>
                        <li class="breadcrumb-item active">Protypes Edit</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <!--add products-->
        <form action="Editprotypes.php" method="post" enctype="multipart/form-data">
            <?php
            $getAlltypeid = $Protype -> getAlltypeid($type_id);
            foreach($getAlltypeid as $value):?>
            <div class="row">
                <div class="col-md-12">
                    <br><br>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Protypes Edit</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Type Id</label>
                                <input value="<?php echo $value['type_id'];?>" type="text" id="id" readonly name="id"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Type Name</label>
                                <input value="<?php echo $value['type_name'];?>" type="text" required id="name"
                                    name="name" class="form-control">
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <?php endforeach;?>
            <div class="row">
                <div class="col-12">
                    <br><br>
                    <input name="submit" type="submit" value="Edit Protypes" class="btn btn-success float-right">
                </div>
            </div>
        </form>
    </section>
    <!-- /.content -->
</div>
<?php endif ?>

<!-- Content Wrapper. Contains page content (EDIT MANUFACTURES)-->
<?php if (isset($_GET['manu_id'])):
    $manu_id = $_GET['manu_id'];?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Manufactures Edit</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="Manufactures.php">Home</a></li>
                        <li class="breadcrumb-item active">Manufactures Edit</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <!--add products-->
        <form action="Editmanufactures.php" method="post" enctype="multipart/form-data">
            <?php
            $getAllManuId = $Manufacture -> getAllManuId($manu_id);
            foreach($getAllManuId as $value):?>
            <div class="row">
                <div class="col-md-12">
                    <br><br>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Manufactures Edit</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Manu Id</label>
                                <input value="<?php echo $value['manu_id'];?>" name="id" readonly type="text" id="id"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Manu Name</label>
                                <input value="<?php echo $value['manu_name'];?>" name="name" required type="text"
                                    id="Name" class="form-control">
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <?php endforeach;?>
            <div class="row">
                <div class="col-12">
                    <br><br>
                    <input name="submit" type="submit" value="Edit Manufactures" class="btn btn-success float-right">
                </div>
            </div>
        </form>
    </section>
    <!-- /.content -->
</div>
<?php endif ?>
<?php include "footer.html";?>