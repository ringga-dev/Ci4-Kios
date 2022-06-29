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
                        <form action="<?= base_url('AdminControl/transaksi') ?>" method="POST" class="col-md-12 text-right">
                            <div class="row text-right">
                                <select type="text" class="custom-select col mr-2" id="stts" name="stts">
                                    <option value="">Filter</option>

                                    <?php foreach ($stts as $s) : ?>
                                        <option value="<?= $s ?>"><?= $s ?></option>
                                    <?php endforeach; ?>
                                </select>

                                <select type="text" class="custom-select col mr-2" id="user" name="user">
                                    <option value="">Filter</option>
                                    <?php foreach ($user as $u) : ?>
                                        <option value="<?= $u['id'] ?>"><?= $u['fullname'] . " _ " . $u['no_phone'] ?></option>
                                    <?php endforeach; ?>
                                </select>

                                <button type="submit" class="btn btn-warning mr-2 center"><i class="fas fa-search fa-2x"></i></button>

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
                                        <th>Nama Barang</th>
                                        <th>Harga</th>
                                        <th>qty</th>
                                        <th>Status</th>
                                        <th>Number Phone</th>
                                        <th>TGL Pesan</th>
                                        <th>Dikirim</th>
                                        <th>Jarak</th>
                                        <th>Peta</th>
                                        <th>Pesan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($trasaksi as $t) :
                                        if ($t['stts'] == "DI BATALKAN") {
                                            $bg = "#fc1808";
                                            $sttsB = "hidden";
                                        } elseif ($t['stts'] == "DI TERIMA") {
                                            $bg = "#45fc08";
                                            $sttsB = "hidden";
                                        } elseif ($t['stts'] == "DI KIRIM") {
                                            $bg = "#f4fc08";
                                            $sttsB = "hidden";
                                        } else {
                                            $sttsB = "";
                                            $bg = "#fc6e08";
                                        }

                                        $harga = ($t['harga'] * $t['promo'] / 100) * $t['qty']
                                    ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $t['fullname'] ?></td>
                                            <td><?= $t['nama_barang'] ?></td>
                                            <td>Rp <?= ($t['harga'] * $t['qty']) - $harga ?></td>
                                            <td><?= $t['qty'] ?> unit</td>
                                            <td style="background-color: <?= $bg ?>; font-style: bold;" class="text-blue"><?= $t['stts'] ?></td>
                                            <td><?= $t['no_phone'] ?></td>
                                            <td><?= $t['date'] ?></td>

                                            <td><?= $t['send'] ?></td>
                                            <td class="jarak<?= $t['id'] ?>"></td>
                                            <td>
                                                <div id='map<?= $t['id'] ?>' style='width: 1000px; height: 500px;'></div>
                                                <script>
                                                    mapboxgl.accessToken = 'pk.eyJ1IjoicmluZ2dhZGV2OTciLCJhIjoiY2t0aHlwNmViMHd3aDJ6cW5rZDE0N3RrYyJ9.yNc4BwWT45ZnF8JO6mpC9w';
                                                    $.ajax({
                                                        type: "get",
                                                        url: `https://api.mapbox.com/directions/v5/mapbox/driving/104.02825317784071%2C1.0812588590504117%3B<?= $t['long'] ?>%2C<?= $t['lat'] ?>?alternatives=true&geometries=geojson&steps=true&access_token=${mapboxgl.accessToken}`,
                                                        dataType: "json",
                                                        success: function(response) {
                                                            let jarak = response.routes[0].distance / 1000

                                                            $(".jarak<?= $t['id'] ?>").html(`<p>${response.routes[0].distance} M or ${jarak}KM</p>`)
                                                        }
                                                    });

                                                    var map<?= $t['id']; ?> = new mapboxgl.Map({
                                                        container: 'map<?= $t['id'] ?>',
                                                        style: 'mapbox://styles/mapbox/satellite-streets-v11',
                                                        center: [<?= $t['long'] ?>, <?= $t['lat'] ?>], // starting position
                                                        zoom: 15
                                                    });

                                                    var start<?= $t['id']; ?> = [<?= $t['long'] ?>, <?= $t['lat'] ?>];
                                                    async function getRoute<?= $t['id']; ?>(end) {
                                                        var query<?= $t['id']; ?> = await fetch(

                                                            `https://api.mapbox.com/directions/v5/mapbox/driving/115.21549851415249%2C-8.685972442811664%3B<?= $t['long'] ?>%2C<?= $t['lat'] ?>?alternatives=true&geometries=geojson&steps=true&access_token=${mapboxgl.accessToken}`, {
                                                                method: 'GET'
                                                            }
                                                        );
                                                        var json<?= $t['id']; ?> = await query<?= $t['id']; ?>.json();
                                                        var data<?= $t['id']; ?> = json<?= $t['id']; ?>.routes[0];
                                                        var route<?= $t['id']; ?> = data<?= $t['id']; ?>.geometry.coordinates;
                                                        var geojson<?= $t['id']; ?> = {
                                                            type: 'Feature',
                                                            properties: {},
                                                            geometry: {
                                                                type: 'LineString',
                                                                coordinates: route<?= $t['id']; ?>
                                                            }
                                                        };
                                                        // if the route already exists on the map, we'll reset it using setData
                                                        if (map<?= $t['id']; ?>.getSource('route')) {
                                                            map<?= $t['id']; ?>.getSource('route').setData(geojson<?= $t['id']; ?>);
                                                        }
                                                        // otherwise, we'll make a new request
                                                        else {
                                                            map<?= $t['id']; ?>.addLayer({
                                                                id: 'route',
                                                                type: 'line',
                                                                source: {
                                                                    type: 'geojson',
                                                                    data: geojson<?= $t['id']; ?>
                                                                },
                                                                layout: {
                                                                    'line-join': 'round',
                                                                    'line-cap': 'round'
                                                                },
                                                                paint: {
                                                                    'line-color': '#3887be',
                                                                    'line-width': 10,
                                                                    'line-opacity': 0.85
                                                                }
                                                            });
                                                        }
                                                    }

                                                    map<?= $t['id']; ?>.on('load', () => {
                                                        getRoute<?= $t['id']; ?>(start<?= $t['id']; ?>);

                                                    });
                                                    const marker<?= $t['id']; ?> = new mapboxgl.Marker({
                                                            // color: "#FFFFFF",
                                                            draggable: true
                                                        }).setLngLat([<?= $t['long'] ?>, <?= $t['lat'] ?>])
                                                        .setPopup(new mapboxgl.Popup().setHTML("<p style='color: #000; width: 80px; height: 10px;'>Lokasi User!</p>"))
                                                        .addTo(map<?= $t['id']; ?>);
                                                </script>

                                            </td>
                                            <td> <?= $t['message'] ?> </td>
                                            <td>
                                                <a href="<?= base_url() ?>/AdminControl/aksiTransaksi?action=delete&id=<?= $t['id']; ?>" class="badge badge-danger m-1 hapus"><i class="fas fa-trash-alt fa-2x"></i></a>
                                                <a <?= $sttsB ?> href="<?= base_url() ?>/AdminControl/aksiTransaksi?action=kirim&id=<?= $t['id']; ?>" class="badge badge-info m-1 ok-update"><i class="fas fa-paper-plane fa-2x"></i></i></a>
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