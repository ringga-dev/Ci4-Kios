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
                        <!-- /.card-header -->
                        <form action="<?= base_url('planner') ?>" method="POST" class="col-md-12 text-right">
                            <div class="row text-right">
                                <select type="text" class="custom-select col mr-2" id="filter" name="filter">
                                    <option value="">Filter</option>
                                </select>
                                <button type="submit" class="btn btn-warning mr-2 center"><i class="fas fa-search fa-2x"></i></button>
                                <a href="" class="btn btn-info mr-2 center" data-toggle="modal" data-target="#modal-xl"><i class="fas fa-plus-square fa-2x"></i></a>
                            </div>

                        </form>
                        <div class="card-body col-lg-9">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>kategori</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($kategori as $k) : ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $k['kategory'] ?></td>
                                            <td>
                                                <a href="<?= base_url() ?>/AdminControl/aksiKategori?action=delete&id=<?= $k['id']; ?>" class="badge badge-danger m-1 hapus"><i class="fas fa-trash-alt fa-2x"></i></a>
                                            </td>
                                        </tr>
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

<!-- modal add jobs -->
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
            <form action="<?= base_url() ?>/AdminControl/aksiKategori?action=add" method="POST">
                <?= csrf_field() ?>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="plan_qty">Kategori</label>
                                    <input type="text" class="form-control" id="kategori" name="kategori" required>
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
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>
<?= $this->endSection(); ?>