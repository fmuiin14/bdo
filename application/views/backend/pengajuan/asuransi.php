<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Data Pengajuan Asuransi</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="bg-white p-4">
                        <div class="table-responsive">
                            <table id="nama-table" class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr class="text-center">
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Client</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Narahubung</th>
                                        <th scope="col">No HP Narahubung</th>
                                        <th scope="col">Email Narahubung</th>
                                        <th scope="col">No Kantor</th>
                                        <th scope="col">Email Kantor</th>
                                        <th scope="col">Daftar Asuransi</th>
                                        <th scope="col">Target Premi</th>
                                        <th scope="col">Detail Spesifikasi</th>
                                        <th scope="col">Status Pengajuan</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                <?php $no = 1;
                                foreach ($asuransis as $as) {
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $as->nama_client ?></td>
                                        <td><?= $as->alamat ?></td>
                                        <td><?= $as->cp_orang ?></td>
                                        <td><?= $as->no_hp_cp ?></td>
                                        <td><?= $as->email_cp ?></td>
                                        <td><?= $as->no_kantor ?></td>
                                        <td><?= $as->email_kantor ?></td>
                                        <td><?= $as->nama_asuransi ?></td>
                                        <td><?= $as->target_premi ?></td>
                                        <td><?= $as->detail_spesifikasi_produk ?></td>
                                        <td><?= $as->nama_status ?></td>
                                        <td>#</td>
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