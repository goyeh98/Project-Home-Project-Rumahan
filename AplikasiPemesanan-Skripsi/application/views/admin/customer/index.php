<?php $this->load->view('admin/template/header.php'); ?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Customer</h1>
    
    <div class="card mb-4">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <div>
                    <i class="fas fa-table me-1"></i>
                    Data Customer
                </div>
                <div>
                    <a href="<?= base_url(); ?>customer/tambah" class="btn btn-primary btn-sm"><i class="fas fa-plus me-1"></i> Tambah</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No. WA</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i=1;
                    foreach ($customers as $customer) { ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $customer->nama; ?></td>
                        <td><?= $customer->email; ?></td>
                        <td><?= $customer->no_wa; ?></td>
                        <td><?= $customer->alamat; ?></td>
                        <td>
                            <a href="<?= base_url(); ?>customer/detail/<?= $customer->id; ?>" class="btn btn-info btn-sm"><i class="fas fa-info-circle me-1"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $this->load->view('admin/template/footer.php'); ?>