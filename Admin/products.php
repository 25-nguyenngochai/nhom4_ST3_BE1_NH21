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
                    <a class="btn btn-info btn-sm" href="Addproject.php?addproducts">
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
                            <th style="width: 1%">
                                Id
                            </th>
                            <th style="width: 30%">
                                Name
                            </th>
                            <th style="width: 12%">
                                Image
                            </th>
                            <th style="width: 15%">
                                Price
                            </th>
                            <th style="width: 4%">
                                Manufacture
                            </th>
                            <th style="width: 8%">
                                Protype
                            </th>
                            <th style="width: 25%" class="text-center">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $getAllProducts = $Product ->getAllProducts();
                        foreach($getAllProducts as $value):?>
                        <tr>
                            <td><?php echo $value['id'];?></td>
                            <td><a><?php echo $value['name'];?></a></td>
                            <td><img src="../img/<?php echo $value['image'] ?>" alt="" style="width:100px"></td>
                            <td><a><?php echo number_format($value['price']) ?> VND</a></td>
                            <td class="project_progress"><?php echo $value['manu_name'];?></td>
                            <td class="project-state"><span><?php echo $value['type_name'];?></span></td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="Editproject.php?id=<?php echo $value['id'];?>">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a id="delete" class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                    <script>
                    const del = document.querySelectorAll('#delete');
                    del.forEach((item) => {
                        item.onclick = () => {
                            if (item.getAttribute("href") == "#") {
                                alert("Xóa Products id <?php echo $getAllProducts[0]['id'];?> thành công!");
                                item.setAttribute("href",
                                    "delProducts.php?id=<?php echo $getAllProducts[0]['id'];?>")
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