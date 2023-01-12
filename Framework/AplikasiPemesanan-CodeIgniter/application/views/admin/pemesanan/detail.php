<?php $this->load->view('admin/template/header.php'); ?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Pemesanan</h1>
    
    <div class="card mb-4">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <div>
                    <i class="fas fa-table me-1"></i>
                    Data Pemesanan
                </div>
                <!-- <div>
                    <a href="<?= base_url(); ?>pemesanan/tambah" class="btn btn-primary btn-sm"><i class="fas fa-plus me-1"></i> Tambah</a>
                </div> -->
            </div>
        </div>
        <div class="card-body">
            <table class="table" width="100%">
                <tr>
                    <th width="25%">Nama</th>
                    <td width="75%"><?= $pemesanan->nama; ?></td>
                </tr>
                <tr>
                    <th>Jenis</th>
                    <td><?= $pemesanan->jenis; ?></td>
                </tr>
                <tr>
                    <th>Status Pesanan</th>
                    <td><?= $pemesanan->status; ?></td>
                </tr>
                <?php
                $transaksi = json_decode($pemesanan->transaksi);
                foreach ($transaksi as $key => $data) { ?>
                <tr>
                    <th class="text-capitalize"><?= $key; ?></th>
                    <td><?= $data; ?></td>
                </tr>
                <?php } ?>
                <?php if ($pemesanan->status == 'Belum diproses') { ?>
                <tr>
                    <th>Proses</th>
                    <td> <button type="button" class="btn1" data-bs-toggle="modal" data-bs-target="#btn1">Proses</button></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>


<!-- FORM BALASAN DARI ADMIN -->
<div class="modal fade" id="btn1">
    <div class="modal-dialog">
      <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">Proses Transaksi</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <form class="mb-3">
          <div class="mb-3">
            <label for="jumlah">Jumlah Pembayaran :</label>
            <input type="number" name="jumlah" id="jumlah" class="form-control" placeholder="Nominal yang harus dibayarkan" required>
            </div>
            <!-- <div class="mb-3">
            <label for="nama">Data pembeli:</label>
            <input type="text" name="nama" id="nama" class="form-control" placeholder="Atas Nama" required>
            </div> -->
            <input type="hidden" id="id" value="<?= $pemesanan->id; ?>">
        </form>
        <!-- <span>*Max Pembayaran 1x24 jam setelah pemesanan !</span> -->
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn2 btn-danger" data-bs-dismiss="modal" id="btnSubmit">Kirim</button>
      </div>
      </div>
    </div>
  </div>

<?php $this->load->view('admin/template/footer.php'); ?>