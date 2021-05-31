<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard
                        <?php
                        $status = $this->session->userdata('user_level');
                        if ($status == '1') {
                            echo 'Admin';
                        }
                        ?>
                    </h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <?php
    $status = $this->session->userdata('user_level');
    if ($status == '1') {
    ?>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-4 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>#</h3>

                                <p>Register</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-4 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>53<sup style="font-size: 20px">%</sup></h3>

                                <p>Pengajuan Asuransi</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-4 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>44</h3>

                                <p>Pengajuan Klaim</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="card card-default">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="alert alert-success">
                                    <h5><i class="icon fas fa-check"></i> Selamat Datang, Admin !</h5>
                                    Kamu sukses login untuk aplikasi ini. Berikut adalah halaman dashboard admin.
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col-md-6 -->
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card card-primary card-outline">
                                    <div class="card-header">
                                        <h5 class="m-0">Update Data Registrasi?</h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Kamu bisa update data registrasi peserta dengan
                                            menekan
                                            tombol di bawah ini.</p>
                                        <a href="#" class="btn btn-primary">Update Data Registrasi</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-primary card-outline">
                                    <div class="card-header">
                                        <h5 class="m-0">Data Pengajuan?</h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Kamu bisa melihat dan manajemen data pengajuan dengan menekan tombol di bawah ini.</p>
                                        <a href="<?= site_url('backend/admin/registrasi') ?>" class="btn btn-primary">Data Pengajuan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    <?php } else if ($status == '3') { ?>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Info boxes -->
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Kelas Selanjutnya</span>
                                <span class="info-box-number">
                                    Monday, 8 Januari 2021
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-6">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Jumlah Kelas Pilihan</span>
                                <span class="info-box-number">1</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->

                    <!-- fix for small devices only -->
                    <div class="clearfix hidden-md-up"></div>
        </section>
        <!-- /.content -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="card card-default">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="alert alert-success">
                                    <h5><i class="icon fas fa-check"></i> Selamat Datang, <?= $this->session->userdata('name'); ?> !</h5>
                                    Kamu sukses login untuk aplikasi ini. Berikut adalah halaman dashboard.
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Pencapaianmu</h5>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <!-- /.col -->
                                    <div class="col-md-10 mx-auto">
                                        <p class="text-center">
                                            <strong>Progress</strong>
                                        </p>

                                        <div class="progress-group">
                                            Scratch
                                            <span class="float-right"><b>160</b>/200</span>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-primary" style="width: 80%"></div>
                                            </div>
                                        </div>
                                        <!-- /.progress-group -->


                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- ./card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <!-- /.col-md-6 -->
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card card-primary card-outline">
                                    <div class="card-header">
                                        <h5 class="m-0">Lengkapi Profile?</h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Kamu bisa melengkapi data profile, dengan
                                            menekan
                                            tombol di bawah ini.</p>
                                        <a href="<?= site_url('backend/siswa/profile_siswa/') . $this->session->userdata('id'); ?>" class="btn btn-primary">Lengkapi Profile</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-primary card-outline">
                                    <div class="card-header">
                                        <h5 class="m-0">Histori Pengajaran?</h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Kamu bisa melihat histori pengajaran dengan menekan tombol di bawah ini.</p>
                                        <a href="<?= base_url('admin/data_siswa') ?>" class="btn btn-primary">Histori Pembelajaran</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    <?php } else { ?>
        <!-- Siswa -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Info boxes -->
                <div class="row">
                    <?php foreach ($nexttgl as $next) : ?>
                        <div class="col-12 col-sm-6 col-md-6">
                            <div class="info-box">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Kelas Selanjutnya</span>
                                    <span class="info-box-number">
                                        <?php $tanggal = $next->pertemuan_selanjutnya;
                                        $tgl = date('d F Y', strtotime($tanggal));
                                        echo $tgl; ?>
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-12 col-sm-6 col-md-6">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Jumlah Pertemuan</span>
                                    <span class="info-box-number"><?= $next->pertemuan_ke ?></span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                    <?php endforeach; ?>

                    <!-- fix for small devices only -->
                    <div class="clearfix hidden-md-up"></div>
        </section>
        <!-- /.content -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="card card-default">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="alert alert-success">
                                    <h5><i class="icon fas fa-check"></i> Selamat Datang, <?= $this->session->userdata('name'); ?> !</h5>
                                    Kamu sukses login untuk aplikasi ini. Berikut adalah halaman dashboard.
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <!-- /.col-md-6 -->
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card card-primary card-outline">
                                    <div class="card-header">
                                        <h5 class="m-0">Lengkapi Profile?</h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Kamu bisa melengkapi data profile dan menambah foto, dengan
                                            menekan
                                            tombol di bawah ini.</p>
                                        <a href="<?= site_url('backend/siswa/profile_siswa/') . $this->session->userdata('id'); ?>" class="btn btn-primary">Lengkapi Profile</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-primary card-outline">
                                    <div class="card-header">
                                        <h5 class="m-0">Histori Pembelajaran?</h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Kamu bisa melihat histori pembelajaran dengan menekan tombol di bawah ini.</p>
                                        <a href="<?= base_url('backend/siswa/history_siswa/') . $this->session->userdata('id'); ?>" class="btn btn-primary">Histori Pembelajaran</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    <?php } ?>
</div>
<!-- /.content-wrapper -->