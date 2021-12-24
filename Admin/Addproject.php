<?php include "header.php";?>
<!-- Content Wrapper. Contains page content (ADD PRODUCT)-->
<?php if (isset($_GET['addproducts'])): ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Products Add</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="products.php">Home</a></li>
                        <li class="breadcrumb-item active">Products Add</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <!--add products-->
        <form action="Addproducts.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Products Add</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Name</label>
                                <input type="text" id="name" class="form-control" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Manu Name</label>
                                <select id="manu_id" class="form-control custom-select" name="manu_id">
                                    <?php $getAllManu = $Manufacture -> getAllManu();
                                foreach($getAllManu as $value):?>
                                    <option value="<?php echo $value['manu_id'];?>"><?php echo $value['manu_name'];?>
                                    </option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Type Name</label>
                                <select id="type_id" class="form-control custom-select" name="type_id">
                                    <?php  $getAllManuType = $Protype ->getAllManuType();
                                foreach($getAllManuType as $value):?>
                                    <option value="<?php echo $value['type_id'];?>"><?php echo $value['type_name'];?>
                                    </option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputName">Price</label>
                                <input type="number" id="price" class="form-control" name="price" required>
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Description</label>
                                <textarea id="description" class="form-control" rows="4" name="description"
                                    required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Feature</label>
                                <select id="feature" class="form-control custom-select" name="feature">
                                    <option>0</option>
                                    <option>1</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputImage">Image</label>
                                <input type="file" id="inputImage" class="form-control" name="image" required>
                                <br>
                                <img id="hinh" alt="" style="width:100px">
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
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input name="submit" type="submit" value="Add Products" class="btn btn-success float-right">
                </div>
            </div>
        </form>
    </section>
    <!-- /.content -->
</div>
<?php endif ?>

<!-- Content Wrapper. Contains page content (ADD PROTYPES)-->
<?php if (isset($_GET['addprotypes'])): ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Protypes Add</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="protypes.php">Home</a></li>
                        <li class="breadcrumb-item active">Protypes Add</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <form action="AddProtypes.php" method="post" enctype="multipart/form-data">
            <!--add products-->
            <div class="row">
                <div class="col-md-12">
                    <br><br>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Protypes Add</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Name</label>
                                <input name="name" type="text" id="name" class="form-control" required>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <br><br>
                    <input name="submit" type="submit" value="Add Protypes" class="btn btn-success float-right">
                </div>
            </div>
        </form>
    </section>
    <!-- /.content -->
</div>
<?php endif ?>

<!-- Content Wrapper. Contains page content (ADD MANUFACTURES)-->
<?php if (isset($_GET['addmanufactures'])): ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Manufactures Add</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="Manufactures.php">Home</a></li>
                        <li class="breadcrumb-item active">Manufactures Add</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <!--add products-->
        <form action="AddManufactures.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12">
                    <br><br>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Manufactures Add</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Name</label>
                                <input name="name" type="text" id="Name" class="form-control" required>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <br><br>
                    <input name="submit" type="submit" value="Add Manufactures" class="btn btn-success float-right">
                </div>
            </div>
        </form>
    </section>
    <!-- /.content -->
</div>
<?php endif ?>
<?php include "footer.html";?>