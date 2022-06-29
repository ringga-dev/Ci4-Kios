<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url('admin'); ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('admin'); ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('admin'); ?>/dist/css/adminlte.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('admin'); ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('admin'); ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('admin'); ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?= base_url('admin'); ?>/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?= base_url('admin'); ?>/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= base_url("admin") ?>/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- jQuery -->
    <script src="<?= base_url('admin'); ?>/plugins/jquery/jquery.min.js"></script>

    <script src='https://api.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.css' rel='stylesheet' />





    <!-- DataTables  & Plugins -->
    <script src="<?= base_url('admin'); ?>/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('admin'); ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url('admin'); ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url('admin'); ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url('admin'); ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url('admin'); ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url('admin'); ?>/plugins/jszip/jszip.min.js"></script>
    <script src="<?= base_url('admin'); ?>/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url('admin'); ?>/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?= base_url('admin'); ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url('admin'); ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url('admin'); ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- Select2 -->
    <script src="<?= base_url('admin'); ?>/plugins/select2/js/select2.full.min.js"></script>

    <!-- maps -->

</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="<?= base_url('admin'); ?>/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <!-- Messages Dropdown Menu -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('auth/logout') ?>" id="logout" role="button">
                        <i class="fas fa-sign-in-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <?= $this->renderSection('menu'); ?>

        <!-- Content Wrapper. Contains page content -->
        <?= $this->renderSection('content'); ?>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- Bootstrap -->
    <script src="<?= base_url('admin'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url('admin'); ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('admin'); ?>/dist/js/adminlte.js"></script>

    <!-- SweetAlert2 -->
    <script src="<?= base_url('admin') ?>/plugins/sweetalert2/sweetalert2.min.js"></script>
    <script src="<?= base_url('assets/myjs.js') ?>"></script>

    <!-- D:\web\ci-mykios\public\admin\plugins\sweetalert2-theme-bootstrap-4\bootstrap-4.min.css -->
    <script>
        <?php $pesan = session()->getFlashdata('pesan') ?>
        $(function() {
            <?php if ($pesan) { ?>
                <?php if ($pesan['stts'] != true) { ?>
                    Swal.fire({
                        icon: 'error',
                        title: 'Terjadi Kesalahan!',
                        text: '<?= $pesan['msg'] ?>'
                    })
                <?php } else { ?>
                    Swal.fire({
                        icon: 'success',
                        title: 'Great!',
                        text: '<?= $pesan['msg'] ?>'
                    })
            <?php }
            } ?>
        });
    </script>
</body>

</html>