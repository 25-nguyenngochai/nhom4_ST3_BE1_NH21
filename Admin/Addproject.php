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
                            <label for="inputName">Id</label>
                            <input type="text" id="Id" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputName">Name</label>
                            <input type="text" id="Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputStatus">Type Name</label>
                            <select id="Type_id" class="form-control custom-select">
                                <?php  $getAllManuType = $Protype ->getAllManuType();
                                foreach($getAllManuType as $value):?>
                                <option><?php echo $value['type_name'];?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputStatus">Manu Name</label>
                            <select id="Manu_id" class="form-control custom-select">
                                <?php $getAllManu = $Manufacture -> getAllManu();
                                foreach($getAllManu as $value):?>
                                <option><?php echo $value['manu_name'];?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputName">Price</label>
                            <input type="text" id="Price" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputName">Image</label>
                            <input type="text" id="Image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Description</label>
                            <textarea id="Description" class="form-control" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputName">Feature</label>
                            <input type="text" id="Feature" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputName">created_at</label>
                            <input type="date" id="created_at" class="form-control">
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <input type="submit" value="Create new Products" class="btn btn-success float-right">
            </div>
        </div>
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
                            <label for="inputName">Id</label>
                            <input type="text" id="Id" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputName">Name</label>
                            <input type="text" id="Name" class="form-control">
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
                <input type="submit" value="Create new Protypes" class="btn btn-success float-right">
            </div>
        </div>
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
                            <label for="inputName">Id</label>
                            <input type="text" id="Id" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputName">Name</label>
                            <input type="text" id="Name" class="form-control">
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
                <input type="submit" value="Create new Manufactures" class="btn btn-success float-right">
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<?php endif ?>
<?php include "footer.html";?>