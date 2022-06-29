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
                                        <th>Alamat</th>
                                        <th>Number Phone</th>
                                        <th>stts</th>
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
                                            <td><?= $u['alamat'] ?></td>
                                            <td><?= $u['no_phone'] ?></td>
                                            <td><?= $u['stts'] ?></td>
                                            <td>
                                                <!-- <a href="<?= base_url() ?>/AdminControl/aksiUser?action=delete&id=<?= $u['id']; ?>" class="badge badge-danger m-1 hapus"><i class="fas fa-trash-alt fa-2x"></i></a> -->
                                                <a href="" type="button" class="badge badge-warning m-1" data-toggle="modal" data-target="#exampleModalnotif<?= $u['id']; ?>"><i class="fas fa-bell fa-2x"></i></a>
                                                <!-- <a href="" type="button" class="badge badge-success m-1" data-toggle="modal" data-target="#exampleModal<?= $u['id']; ?>"><i class="fas fa-universal-access fa-2x"></i></a> -->

                                                <!-- Modal akses -->
                                                <!-- <div class="modal fade" id="exampleModal<?= $u['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">ACCESS</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                ...
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> -->

                                                <!-- Modal notifikasi -->
                                                <div class="modal fade" id="exampleModalnotif<?= $u['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Notif</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <form action="<?= base_url() ?>/AdminControl/send_message?id=<?= $u['id']; ?>" method="POST">
                                                                <?= csrf_field() ?>
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <label for="nama_barang">Title</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" id="title" name="title" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="harga">Message</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" id="pesan" name="pesan" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
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