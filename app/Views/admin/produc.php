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
                        <form action="<?= base_url('AdminControl/produc') ?>" method="POST" class="col-md-12  text-right">
                            <div class="row text-right ml-2 mr-2">
                                <select type="text" class="custom-select col mr-2" id="kategori" name="kategori">
                                    <option value="">Filter</option>

                                    <?php foreach ($kategori as $k) : ?>
                                        <option value="<?= $k['id']; ?>"><?= $k['kategory']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <button type="submit" class="btn btn-warning mr-2 center"><i class="fas fa-search fa-2x"></i></button>
                                <a href="" class="btn btn-info mr-2 center" data-toggle="modal" data-target="#modal-xl"><i class="fas fa-plus-square fa-2x"></i></a>
                            </div>

                        </form>
                        <div class="card-body table-responsive">
                            <table id="example1" class=" table table-hover">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>Nama Produc</th>
                                        <th>Harga</th>
                                        <th>QTY</th>
                                        <th>Promo</th>
                                        <th>Kategori</th>
                                        <th>image_b1</th>
                                        <th>image_b2</th>
                                        <th>image_b3</th>
                                        <th>image_b4</th>
                                        <th>deskripsi</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($barang as $d) :

                                        if ($d['promo']) {
                                            $color = "#ff29";
                                            $kurang = $d['harga'] * $d['promo'] / 100;
                                        } else {
                                            $color = "";
                                            $kurang = 0;
                                        }
                                    ?>
                                        <tr style="background-color: <?= $color; ?>;">
                                            <td> <?= $i++; ?></td>
                                            <td> <?= $d['nama_barang']; ?></td>
                                            <td><s>Rp <?= $d['harga']; ?></s> new Rp<?= $d['harga'] - $kurang ?> </td>
                                            <td> <?= $d['jumlah']; ?></td>
                                            <td> <?= $d['promo']; ?> %</td>
                                            <td> <?= $d['kategory']; ?></td>
                                            <td>
                                                <img style="width: 200px;" src="<?= base_url() . "/assets/barang/" . $d['image_b1']; ?>" class="rounded mx-auto d-block">

                                            </td>
                                            <td>
                                                <img style="width: 200px;" src="<?= base_url() . "/assets/barang/" . $d['image_b2']; ?>" class="rounded mx-auto d-block">
                                            </td>
                                            <td>
                                                <img style="width: 200px;" src="<?= base_url() . "/assets/barang/" . $d['image_b3']; ?>" class="rounded mx-auto d-block">
                                            </td>
                                            <td>
                                                <img style="width: 200px;" src="<?= base_url() . "/assets/barang/" . $d['image_b4']; ?>" class="rounded mx-auto d-block">
                                            </td>
                                            <td> <?= $d['deskripsi']; ?></td>
                                            <td>
                                                <a href="" class="badge badge-warning mr-2 center" data-toggle="modal" data-target="#modal-xl-<?= $d['id']; ?>"><i class="fas fa-edit fa-2x"></i></a>
                                                <a href="<?= base_url() ?>/AdminControl/aksiBarang?action=delete&id=<?= $d['id']; ?>" class="badge badge-danger m-1 hapus"><i class="fas fa-trash-alt fa-2x"></i></a>
                                            </td>
                                            <!-- modal barang update-->
                                            <div class="modal fade" id="modal-xl-<?= $d['id']; ?>">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Update Form</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <!-- class="was-validated" -->
                                                        <form action="<?= base_url() ?>/AdminControl/aksiBarang?action=update&id=<?= $d['id'] ?>" method="POST" enctype="multipart/form-data">
                                                            <?= csrf_field() ?>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="card-body">
                                                                            <div class="form-group">
                                                                                <label for="nama_barang">Nama Barang</label>
                                                                                <div class="input-group">
                                                                                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" value=" <?= $d['nama_barang']; ?>" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="harga">Harga</label>
                                                                                <div class="input-group">
                                                                                    <input type="number" class="form-control" id="harga" name="harga" value="<?= $d['harga']; ?>" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="jumlah">QTY</label>
                                                                                <div class="input-group">
                                                                                    <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?= $d['jumlah']; ?>" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label>Kategori</label>
                                                                                <select class="form-control select2bs4" style="width: 100%;" id="kategori_id" name="kategori_id" required>
                                                                                    <option value=""> <?= $d['kategory']; ?></option>
                                                                                    <?php foreach ($kategori as $k) : ?>
                                                                                        <option value="<?= $k['id']; ?>"><?= $k['kategory']; ?></option>
                                                                                    <?php endforeach; ?>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label>Promo</label>
                                                                                <select class="form-control select2bs4" style="width: 100%;" id="promo" name="promo">
                                                                                    <option value="<?= $d['promo']; ?>"> <?= $d['promo']; ?></option>
                                                                                    <?php for ($i = 1; $i < 100; $i++) : ?>
                                                                                        <option value="<?= $i ?>"><?= $i ?> %</option>
                                                                                    <?php endfor; ?>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="deskripsi">Deskripsi</label>
                                                                                <div class="input-group">
                                                                                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" required value="<?= $d['deskripsi']; ?>">
                                                                                </div>
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
                                        </tr>

                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>NO</th>
                                        <th>Nama Produc</th>
                                        <th>Harga</th>
                                        <th>QTY</th>
                                        <th>Kategori</th>
                                        <th>image_b1</th>
                                        <th>image_b2</th>
                                        <th>image_b3</th>
                                        <th>image_b4</th>
                                        <th>deskripsi</th>
                                        <th>action</th>
                                    </tr>
                                </tfoot>
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
            <form action="<?= base_url() ?>/AdminControl/aksiBarang?action=add" method="POST" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama_barang">Nama Barang</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" id="harga" name="harga" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah">QTY</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" id="jumlah" name="jumlah" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select class="form-control select2bs4" style="width: 100%;" id="kategori_id" name="kategori_id" required>
                                        <option value="">Pilih</option>
                                        <?php foreach ($kategori as $k) : ?>
                                            <option value="<?= $k['id']; ?>"><?= $k['kategory']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="image1">Image Barang 1</label>
                                    <input type="file" class="form-control-file" id="image1" name="image1">
                                </div>
                                <div class="form-group">
                                    <label for="image2">Image Barang 2</label>
                                    <input type="file" class="form-control-file" id="image2" name="image2">
                                </div>
                                <div class="form-group">
                                    <label for="image3">Image Barang 3</label>
                                    <input type="file" class="form-control-file" id="image3" name="image3">
                                </div>
                                <div class="form-group">
                                    <label for="image4">Image Barang 4</label>
                                    <input type="file" class="form-control-file" id="image4" name="image4">
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
    $(document).ready(function() {

        $('#example1').DataTable({
            "info": true,
            "ordering": true,
            dom: 'Bfrtip',
            buttons: [
                "copy", "csv", "excel", "pdf", "print", "colvis"
            ]
        });
    });

    $(function() {

        $('.select2').select2()

        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
        $('.input-cav').select2({
            theme: 'bootstrap4'
        })

    });
</script>
<?= $this->endSection(); ?>