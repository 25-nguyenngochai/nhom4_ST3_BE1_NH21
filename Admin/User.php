<?php include "header.php";?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Products</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Products</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Produts</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th>
                                Id
                            </th>
                            <th>
                                Name
                            </th>
                            <th style="width: 15%">
                                Username
                            </th>
                            <th style="width: 20%">
                                Password
                            </th>
                            <th style="width: 18%">
                                Email
                            </th>
                            <th style="width: 16%">
                                Phone Number
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $getAllUser = $User ->getAllUser();
                        foreach($getAllUser as $value):?>
                        <tr>
                            <td><?php echo $value['User_id'];?></td>
                            <td><a><?php echo $value['Name'];?></a></td>
                            <td><a><?php echo $value['Username']?></a></td>
                            <td><a><?php echo $value['Password']?></a></td>
                            <td><a><?php echo $value['Email']?></a></td>
                            <td><a><?php echo $value['SDT']?></a></td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<?php include "footer.html";?>