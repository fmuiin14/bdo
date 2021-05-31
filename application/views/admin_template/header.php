<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard - BDO</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/be/') ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url('assets/be/') ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url('assets/be/') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url('assets/be/') ?>plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/be/') ?>dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('assets/be/') ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url('assets/be/') ?>plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url('assets/be/') ?>plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('assets/be/') ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/be/') ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- for sweetalert -->
    <!-- include jQuery -->
    <script src="<?= base_url('assets/') ?>js/jquery.js"></script>
    <!-- include jQuery -->
    <script src="<?= base_url('assets/') ?>js/plugins.js"></script>
    <!-- include jQuery -->
    <script src="<?= base_url('assets/') ?>js/jquery.main.js"></script>
    <!-- include jQuery -->
    <script type="text/javascript" src="<?= base_url('assets/') ?>js/init.js"></script>
    <script src="<?= base_url('assets/js/') ?>sweetalert2.all.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            /* display: none; <- Crashes Chrome on hover */
            -webkit-appearance: none;
            margin: 0;
            /* <-- Apparently some margin are still there even though it's hidden */
        }

        input[type=number] {
            -moz-appearance: textfield;
            /* Firefox */
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <img src="<?= base_url('assets/') ?>img/logo/logo.png" class="user-image img-circle elevation-2" alt="User Image"><span class="d-none d-md-inline"><?= $this->session->userdata('email'); ?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <!-- User image -->
                        <li class="user-header bg-primary">
                            <img src="<?= base_url('assets/') ?>img/logo/logo.png" class="img-circle elevation-2" alt="User Image">

                            <p>
                                <?= $this->session->userdata('email'); ?>
                                <!-- <small>Member since
                                    <?php
                                    $tanggal = $this->session->userdata('date_created');
                                    $hasil = date('d F Y', strtotime($tanggal));
                                    echo $hasil;
                                    ?>
                                </small> -->
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <?php
                            $status = $this->session->userdata('user_level');
                            if ($status == '1') { ?>
                                <a href="<?= site_url('backend/ChangePassword/admin_password') ?>" class="btn btn-default btn-flat" style="padding:8px;">Ubah Password</a>
                            <?php } elseif ($status == '2') { ?>
                                <a href="<?= site_url('backend/siswa/profile_siswa/') . $this->session->userdata('id'); ?>" class="btn btn-default btn-flat" style="padding:8px;">Profile</a>
                                <a href="<?= site_url('backend/ChangePassword/siswa_password') ?>" class="btn btn-default btn-flat" style="padding:8px;">Ubah Password</a>
                            <?php } else { ?>
                                <a href="#" class="btn btn-default btn-flat" style="padding:8px;">Profile</a>
                            <?php } ?>
                            <a href="<?= base_url('login/logout') ?>" class="btn btn-default btn-flat float-right" style="padding:8px;">Log out</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?= site_url('backend/dashboard') ?>" class="brand-link">
                <img src="<?= base_url('assets/') ?>img/logo/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">LetsCode</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-header">DASHBOARD</li>
                        <li class="nav-item">
                            <a href="<?= site_url('backend/dashboard') ?>" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">MANAJEMEN ASURANSI</li>
                        <li class="nav-item has-treeview">
                            <?php $status = $this->session->userdata('user_level');
                            if ($status == '1') {
                            ?>
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-copy"></i>
                                    <p>
                                        Master Register
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                            <?php } ?>

                            <?php $status = $this->session->userdata('user_level');
                            if ($status == '1') {
                            ?>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?= site_url('backend/admin/registrasi'); ?>" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Data Registrasi</p>
                                        </a>
                                    </li>
                                </ul>
                            <?php } ?>
                        </li>
                        <?php $status = $this->session->userdata('user_level');
                        if ($status == '1') {
                        ?>
                            <li class="nav-header">MANAJEMEN PENGAJUAN</li>
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-chart-pie"></i>
                                    <p>
                                        Pengajuan
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?= site_url('backend/asuransi') ?>" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Pengajuan Asuransi</p>
                                        </a>
                                    </li>

                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?= site_url('backend/klaim') ?>" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Pengajuan Klaim</p>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                        <?php } ?>
                        <li class="nav-item">
                            <a href="<?= site_url('backend/dashboard') ?>" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Laporan
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>