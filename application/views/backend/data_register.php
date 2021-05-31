<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Data Registrasi</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- /.col-md-6 -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-10 mx-auto">
                            <div class="card card-primary card-outline">
                                <div class="card-body text-center">
                                    <p class="card-text">Kamu bisa menambah data register, dengan menekan tombol di bawah ini.</p>
                                    <a href="<?= site_url('backend/siswa/tambah_data_siswa') ?>" class="btn btn-primary">Tambah Data Register</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="bg-white p-4">
                        <div class="table-responsive">
                            <table id="nama-table" class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr class="text-center">
                                        <th scope="col">ID</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">KTP</th>
                                        <th scope="col">No HP</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">NPWP</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $no = 1;
                                    foreach ($registrations as $u) {
                                    ?>

                                        <tr class="text-center">
                                            <th scope="row"><?= $no++; ?></th>
                                            <td><?= $u->nama ?></td>
                                            <td><?= $u->email ?></td>
                                            <td>
                                                <a href="<?= base_url('uploads/ktp/' . $u->no_ktp) ?>" data-fancybox data-caption="KTP">
                                                    <img src="<?= base_url('uploads/ktp/' . $u->no_ktp) ?>" alt="" style="width: 90px;" />
                                                </a>
                                            </td>
                                            <td>
                                                <?= $u->no_hp ?>
                                            </td>
                                            <td>
                                                <?php print ($u->j_k) ? "Laki - laki" : "Perempuan"; ?>
                                            </td>
                                            <td>
                                                <a href="<?= base_url('uploads/npwp/' . $u->npwp) ?>" data-fancybox data-caption="NPWP">
                                                    <img src="<?= base_url('uploads/npwp/' . $u->npwp) ?>" alt="" style="width: 90px;" />
                                                </a>
                                            </td>
                                            <td><?= $u->is_active ? 'Aktif' : 'Belum Aktif' ?></td>
                                            <td class="text-center">
                                                <a href="<?= base_url('register/approve_register/' . $u->id_user)  ?>" class="btn btn-info" onclick="return confirm('Apa kamu yakin untuk approve data ini?')">Approve</a>
                                            </td>

                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->