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
            <table class="table" width="100%">
                <tr>
                    <th width="25%">Nama</th>
                    <td width="75%"><?= $customer->nama; ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?= $customer->email; ?></td>
                </tr>
                <tr>
                    <th>No. WA</th>
                    <td><?= $customer->no_wa; ?></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><?= $customer->alamat; ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

<?php $this->load->view('admin/template/footer.php'); ?>