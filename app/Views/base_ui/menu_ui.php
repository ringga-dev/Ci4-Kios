<?= $this->extend('base_ui/home_ui'); ?>
<?= $this->section('menu'); ?>
<?php $sesion = session()->get() ?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="<?= base_url(); ?>/assets/icon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url(); ?>/assets/profile/<?= $sesion['data']['image'] ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="" class="d-block"><?= $sesion['data']['fullname'] ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <?php
                $sesion = session()->get('role');
                if ($sesion == 1) : ?>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-fingerprint"></i>
                            <p>
                                Control Admin
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= base_url('AdminControl/admin_control'); ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List Admin</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-store-alt"></i>
                        <p>
                            Market
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('AdminControl/produc'); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Barang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('AdminControl/kategori'); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kategori</p>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-cash-register"></i>
                        <p>
                            Transaksi
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('AdminControl/transaksi'); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Trasaksi</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-cash-register"></i>
                        <p>
                            User
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('AdminControl/notifikasi'); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Notifikasi</p>
                            </a>
                        </li>
                    </ul>


                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<?php $this->endSection() ?>