<?php $this->load->view('admin/template/header.php'); ?>

<div class="container-fluid px-4">
    <h1 class="mt-4">History Pemesanan</h1>
    
    <div class="card mb-4">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <div>
                    <i class="fas fa-table me-1"></i>
                    Data Pemesanan
                </div>
                <!-- <div>
                    <a href="<?= base_url(); ?>customer/tambah" class="btn btn-primary btn-sm"><i class="fas fa-plus me-1"></i> Tambah</a>
                </div> -->
            </div>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis</th>
                        <th>Status Pesanan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i=1;
                    foreach ($pemesanan as $data) { ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $data->nama; ?></td>
                            <td><?= $data->jenis; ?></td>
                            <td><?= $data->status; ?></td>
                            <td>
                            <a href="<?= base_url(); ?>pemesanan/detail/<?= $data->id; ?>" class="btn btn-info btn-sm"><i class="fas fa-info-circle me-1"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $this->load->view('admin/template/footer.php'); ?>