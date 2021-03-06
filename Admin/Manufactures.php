<?php include "header.php";?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Manufactures</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Manufactures</li>
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
                <h3 class="card-title">Manufactures</h3>
                <a class="col-md-5" href="#">
                    <i class="glyphicon glyphicon-envelope"></i></a>
                <div class="card-tools">
                    <a class="btn btn-info btn-sm" href="Addproject.php?addmanufactures">
                        <i class="fas fa-cart-plus"></i>
                        </i>
                        Add
                    </a>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 30%">
                                Id
                            </th>
                            <th style="width: 27%">
                                Name
                            </th>
                            <th style="width: 20%" class="text-center">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $getAllManuDesc = $Manufacture -> getAllManuDesc();
                        foreach($getAllManuDesc as $value):?>
                        <tr>
                            <td><?php echo $value['manu_id'];?></td>
                            <td><a><?php echo $value['manu_name'];?></a></td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm"
                                    href="Editproject.php?manu_id=<?php echo $value['manu_id'];?>">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <?php
                                if ($Manufacture->checkCanDelete($value['manu_id'])) { ?>
                                <a id="delete" class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                                <?php
                                } else {
                                ?>
                                <a id="delete" class="btn btn-danger btn-sm" href="">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                                <?php
                                }
                                ?>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                    <script>
                    const del = document.querySelectorAll('#delete');
                    del.forEach((item) => {
                        item.onclick = () => {
                            if (item.getAttribute("href") == "#") {
                                alert("X??a Manufacture id <?php echo $getAllManuDesc[0]['manu_id'];?> th??nh c??ng!");
                                item.setAttribute("href",
                                    "delManufacture.php?id=<?php echo $getAllManuDesc[0]['manu_id'];?>")
                            } else {
                                alert("C??n d??? li???u b??n Products x??a Manufacture id <?php echo $getAllManuDesc[0]['manu_id'];?> th???t b???i!");
                            }
                        }
                    })
                    </script>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<?php include "footer.html";?>