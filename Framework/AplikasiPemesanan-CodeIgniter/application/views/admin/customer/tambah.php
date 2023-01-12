<?php $this->load->view('admin/template/header.php'); ?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Customer</h1>
    
    <div class="card mb-4">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <div>
                    <i class="fas fa-plus me-1"></i>
                    Tambah Customer
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="<?= base_url(); ?>customer/act_tambah" method="post">
                <div class="mb-3">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="no_wa">No Whatsapp</label>
                    <input type="text" name="no_wa" id="no_wa" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $this->load->view('admin/template/footer.php'); ?>