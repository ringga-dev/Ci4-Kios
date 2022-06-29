<?= $this->extend('base_ui/home_ui'); ?>
<?= $this->extend('base_ui/menu_ui'); ?>
<?= $this->section('content'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">

                <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
                        <li class="breadcrumb-item active">open view</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <form action="<?= base_url('AdminControl/produc') ?>" method="POST" class="col-md-12  text-right">
                            <div class="row text-right ml-2 mr-2">
                                <a href="" class="btn btn-info mr-2" data-toggle="modal" data-target="#modal-xl"><i class="fas fa-plus-square fa-2x"></i></a>
                            </div>

                        </form>

                        <script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
                        <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />

                        <div class="card-body table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Fullname</th>
                                        <th>Email</th>
                                        <th>Image</th>
                                        <th>Number Phone</th>
                                        <th>stts</th>
                                        <th>role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($user as $u) :
                                    ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $u['fullname'] ?></td>
                                            <td><?= $u['email'] ?></td>
                                            <td><?= $u['image'] ?></td>
                                            <td><?= $u['no_phone'] ?></td>
                                            <td><?=
                                                $u['stts'] == 1 ? "Akses True" : "Akses false"
                                                ?></td>
                                            <td><?php
                                                switch ($u['role']) {
                                                    case 1:
                                                        echo "root";
                                                        break;
                                                    case 2:
                                                        echo "Admin";
                                                        break;
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($u['role'] != 1) :
                                                ?>
                                                    <a href="<?= base_url() ?>/AdminControl/aksiAdmin?action=delete&id=<?= $u['id']; ?>" class="badge badge-danger m-1 hapus"><i class="fas fa-trash-alt fa-2x"></i></a>
                                                    <a href="<?= base_url() ?>/AdminControl/aksiAdmin?action=update&id=<?= $u['id']; ?>" class="badge badge-info m-1 update"><i class="fas fa-low-vision fa-2x"></i></a>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                        <!-- Large modal -->

                                    <?php endforeach; ?>
                            </table>
                        </div>
                        <!-- ./card-body -->

                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<td>
    <!-- modal barang add -->
    <div class="modal fade" id="modal-xl">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">ADD Form</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- class="was-validated" -->
                <form action="<?= base_url() ?>/AdminControl/aksiAdmin?action=add" method="POST" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="nama_barang">Fullname</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="fullname" name="fullname" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_barang">Email</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="email" name="email" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_barang">Password</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="password" name="password" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_barang">No phone</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="no_phone" name="no_phone" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Kategori</label>
                                        <select class="form-control select2bs4" style="width: 100%;" id="role" name="role" required>
                                            <option value="">Pilih</option>
                                            <?php
                                            echo "<option value='2'>Admin</option>";
                                            echo "<option value='1'>Root</option>";
                                            ?>

                                        </select>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- /.col (RIGHT) -->
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>


        </div>
        <!-- /.modal-content -->

    </div>


    <script>
        $(function() {
            $("#example1").DataTable({
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo(' #example1_wrapper .col-md-6:eq(0)');
        });
    </script>
    <?= $this->endSection(); ?>