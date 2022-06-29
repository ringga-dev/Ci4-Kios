<!DOCTYPE html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">

    <!-- Site title -->
    <title>Galio - Mega Shop Responsive Bootstrap 4 Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url('tamplate') ?>/assets/img/favicon.ico" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="<?= base_url('tamplate') ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font-Awesome CSS -->
    <link href="<?= base_url("tamplate") ?>/assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- helper class css -->
    <link href="<?= base_url('tamplate') ?>/assets/css/helper.min.css" rel="stylesheet">
    <!-- Plugins CSS -->
    <link href="<?= base_url('tamplate') ?>/assets/css/plugins.css" rel="stylesheet">
    <!-- Main Style CSS -->
    <link href="<?= base_url('tamplate') ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url('tamplate') ?>/assets/css/skin-default.css" rel="stylesheet" id="galio-skin">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= base_url("admin") ?>/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
</head>

<body>


    <?= $this->renderSection('auth'); ?>

    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Scroll to Top End -->


    <!--All jQuery, Third Party Plugins & Activation (main.js) Files-->
    <script src="<?= base_url('tamplate') ?>/assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <!-- Jquery Min Js -->
    <script src="<?= base_url('tamplate') ?>/assets/js/vendor/jquery-3.3.1.min.js"></script>
    <!-- Popper Min Js -->
    <script src="<?= base_url('tamplate') ?>/assets/js/vendor/popper.min.js"></script>
    <!-- Bootstrap Min Js -->
    <script src="<?= base_url('tamplate') ?>/assets/js/vendor/bootstrap.min.js"></script>
    <!-- Plugins Js-->
    <script src="<?= base_url('tamplate') ?>/assets/js/plugins.js"></script>
    <!-- Ajax Mail Js -->
    <script src="<?= base_url('tamplate') ?>/assets/js/ajax-mail.js"></script>
    <!-- Active Js -->
    <script src="<?= base_url('tamplate') ?>/assets/js/main.js"></script>
    <!-- Switcher JS [Please Remove this when Choose your Final Projct] -->
    <script src="<?= base_url('tamplate') ?>/assets/js/switcher.js"></script>
    <!-- SweetAlert2 -->
    <script src="<?= base_url('admin') ?>/plugins/sweetalert2/sweetalert2.min.js"></script>

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