<?php include "header.php";?>
<!-- Content Wrapper. Contains page content (EDIT PRODUCTS)-->
<?php if (isset($_GET['editproducts'])): ?>
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
                            <input type="text" id="Id" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputName">Name</label>
                            <input type="text" id="Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputName">Type_Name</label>
                            <input type="text" id="Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputName">Menu_Name</label>
                            <input type="text" id="Name" class="form-control">
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
                <input type="submit" value="Edit Products" class="btn btn-success float-right">
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<?php endif ?>

<!-- Content Wrapper. Contains page content (EDIT PROTYPES)-->
<?php if (isset($_GET['editprotypes'])): ?>
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
                <input type="submit" value="Edit Protypes" class="btn btn-success float-right">
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<?php endif ?>

<!-- Content Wrapper. Contains page content (EDIT MANUFACTURES)-->
<?php if (isset($_GET['editmanufactures'])): ?>
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
                <input type="submit" value="Edit Manufactures" class="btn btn-success float-right">
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<?php endif ?>
<?php include "footer.html";?>