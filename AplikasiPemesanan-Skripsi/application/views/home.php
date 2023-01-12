<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard Pelanggan</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/isi.css">

    <script>
      let base_url = '<?= base_url(); ?>';
    </script>
<body>
  <header style="width: 100%; background-color: wheat; margin: auto; color:white;  background-color: rgba(255,255,255,0.13);"> 
      <div class="container">
        <div class="row">
      <div class="col-md-9"> <marquee>Selamat Datang dan Selamat Berbelanja <?= $this->session->userdata('nama'); ?></marquee> </div>
      <div class="col-md-3" style="background-color: wheat; text-align: right;   background-color: rgba(255,255,255,0.13);  " >
  <?php if ($this->session->userdata('nama')) { ?>
            <a class="l1" href="<?= base_url(); ?>home/profile" style="color:white;">Profile</a>
            <a class="l1" href="<?= base_url(); ?>home/history" style="color:white;">History</a>
            <a class="l1" href="<?= base_url(); ?>auth/logout" style="color:white;">Logout</a>
  <?php } else { ?>
    <a href="<?= base_url(); ?>auth/login">Login</a>
  <?php } ?>
      </div>
      </div>
      </div>    
  </header>
    <div class="container mt-5">

        <div style="display: flex; justify-content: space-between; margin-top: 10px;">
            <div class="slideshow">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="assets/img/jam1.png" class="d-block w-100" alt="..." >
                    </div>
                    <div class="item">
                        <img src="assets/img/bayar1.png" class="d-block w-100" alt="...">
                    </div>
                    <!-- <div class="item">
                        <img src="https://via.placeholder.com/600x225" class="d-block w-100" alt="...">
                    </div> -->
                </div>
            </div>
    
            <div class="logo">
				<?= $this->session->userdata('alert'); ?>
        <img src="<?= base_url(); ?>assets/img/logoagen5.png" alt="" class="img-fluid">
            </div>
        </div>

        <div class="flex-container">
            <div>
              <img src="<?= base_url(); ?>assets/img/listrikprabayar.png" alt="" style="width:100px; height:100px;">
              <div>  Listrik Prabayar </div>
                <button type="button" class="btn1" data-bs-toggle="modal" data-bs-target="#bt1">Pesan</button>
            </div>
            <div>
              <img src="<?= base_url(); ?>assets/img/listriktoken.png" alt="" style="width:100px; height:100px;">  
              <div>Listrik Token</div>
              <button type="button" class="btn1" data-bs-toggle="modal" data-bs-target="#bt2">Pesan</button>
            </div>
            <div>
            <img src="<?= base_url(); ?>assets/img/transfer.png" alt="" style="width:100px; height:100px;">  
            <div>  Transfer </div>
                <button type="button" class="btn1" data-bs-toggle="modal" data-bs-target="#bt3">Pesan</button>
            </div>  
            <div>
            <img src="<?= base_url(); ?>assets/img/briva.png" alt="" style="width:100px; height:100px;">  
            <div>  BRIVA </div>                
                <button type="button" class="btn1" data-bs-toggle="modal" data-bs-target="#bt4">Pesan</button>
            </div>
            <div>
            <img src="<?= base_url(); ?>assets/img/bpjs.png" alt="" style="width:100px; height:100px;">  
            <div >  BPJS </div>                
                <button type="button" class="btn1" data-bs-toggle="modal" data-bs-target="#bt5">Pesan</button>
            </div>
            <div>
            <img src="<?= base_url(); ?>assets/img/wallet.png" alt="" style="width:100px; height:100px;">  
            <div>  Ewallet </div>
                <button type="button" class="btn1" data-bs-toggle="modal" data-bs-target="#bt6">Pesan</button>
            </div>  
            <div>
            <img src="<?= base_url(); ?>assets/img/kuota.png" alt="" style="width:100px; height:100px;">  
            <div>  Kuota </div>
                <button type="button" class="btn1" data-bs-toggle="modal" data-bs-target="#bt7">Pesan</button>
            </div>
            <div>
            <img src="<?= base_url(); ?>assets/img/pulsa.png" alt="" style="width:100px; height:100px;">  
            <div>  Pulsa </div>
                <button type="button" class="btn1" data-bs-toggle="modal" data-bs-target="#bt8">Pesan</button>
            </div>
          </div>

        </div>
        <footer class="position-fixed bottom-0" style="  background-color: rgba(255,255,255,0.13); color:white;">Copyright © Agen BRILink Dede Udin 2022 · All Rights Reserved</footer>

<!-- MODAL BOOTSRAP / BUTTON -->

<!-- BT1 -->
  <div class="modal fade" id="bt1">
    <div class="modal-dialog">
      <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">Listrik Prabayar</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <form class="mb-3">
          <div class="mb-3">
            <label for="nomor">Nomor Listrik :</label>
            <input type="number" name="nomor" id="nomor" class="form-control" placeholder="Nomor Listrik" required>
            </div>
            <div class="mb-3">
            <label for="nama">Nama No. Listrik:</label>
            <input type="text" name="nama" id="nama" class="form-control" placeholder="Atas Nama" required>
            </div>
            <input type="hidden" id="pemesan" value="<?= $this->session->userdata('nama'); ?>">
        </form>
        <span>*Max Pembayaran 1x24 jam setelah pemesanan !</span>
      </div>

      <div class="modal-footer">
        <button onclick="myalert()" type="submit" class="btn2 btn-danger" data-bs-dismiss="modal" id="btnSubmit">Pesan</button>
      </div>
      </div>
    </div>
  </div>

  <!-- BT2 -->
  <div class="modal fade" id="bt2">
    <div class="modal-dialog">
      <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">Listrik Token</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <form class="mb-3">
            <div class="mb-3">
            <label for="nomorsatu">Nomor Listrik :</label>
            <input type="number" name="nomor" id="nomorsatu" class="form-control" placeholder="Nomor Listrik" required>
            </div>
            <div class="mb-3">
            <label for="nominalsatu">Nominal :</label>
            <select name="nominal" id="nominalsatu" class="form-select" required>
              <option value="">-- Pilih Nominal --</option>
              <option value="20.000">20.000</option>
              <option value="50.000">50.000</option>
              <option value="100.000">100.000</option>
              <option value="200.000">200.000</option>
            </select>
            </div>
            <input type="hidden" id="pemesan1" value="<?= $this->session->userdata('nama'); ?>">
        </form>
        <span>*Max Pembayaran 1x24 jam setelah pemesanan !</span>
      </div>

      <div class="modal-footer">
        <button onclick="myalert()" type="submit" class="btn2 btn-danger" data-bs-dismiss="modal" id="btnSubmit1">Pesan</button>
      </div>
  </div>
    </div>
  </div>

<!-- BT3 -->
    <div class="modal fade" id="bt3">
    <div class="modal-dialog">
      <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">Transfer</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <form>
            <label for="fname">Bank Tujuan :</label><br>
            <select name="nama" id="namadua" class="form-select" required>
              <option value="">-- Pilih Bank --</option>
              <option value="BRI">BRI</option>
              <option value="BNI">BNI</option>
              <option value="BCA">BCA</option>
              <option value="BSI">BSI</option>
              <option value="Mandiri">Mandiri</option>
              <option value="BTN">BTN</option>
              <option value="Danamon">Danamon</option>
              <option value="Permata">Permata</option>
              <option value="Maybank">Maybank</option>
              <option value="Panin">Panin</option>
            </select><br>
            <label for="lname">No. Bank Tujuan :</label>
            <input type="number" name="nomor" class="form-control" id="nomordua"  placeholder="Nomor Bank" required><br>
            <label for="lname">Nominal Tranfer :</label>
            <input type="number" name="nominal" class="form-control" id="nominaldua"  placeholder="Nominal" required>
            <input type="hidden" id="pemesan2" value="<?= $this->session->userdata('nama'); ?>">
        </form><br>
        <span>Admin : Sesama BRI (7rb) , Antar Bank (15rb)</span> <br>
        <span>*Max Pembayaran 1x24 jam setelah pemesanan !</span>
      </div>

      <div class="modal-footer">
        <button onclick="myalert()" type="submit" class="btn2 btn-danger" data-bs-dismiss="modal" id="btnSubmit2">Pesan</button>
      </div>
  </div>
    </div>
  </div>

<!-- BT4 -->
    <div class="modal fade" id="bt4">
    <div class="modal-dialog">
      <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">BRIVA</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <form>
            <label for="fname">No. Tujuan BRIVA :</label><br>
            <input type="text" name="nama" class="form-control" id="nomortiga"  placeholder="Nomor Tujuan" required><br>
            <input type="hidden" id="pemesan3" value="<?= $this->session->userdata('nama'); ?>">
        </form><br>
        <span>*Max Pembayaran 1x24 jam setelah pemesanan !</span>
      </div>

      <div class="modal-footer">
        <button onclick="myalert()" type="submit" class="btn2 btn-danger" data-bs-dismiss="modal" id="btnSubmit3">Pesan</button>
      </div>
  </div>
    </div>
  </div>

<!-- BT5 -->
    <div class="modal fade" id="bt5">
    <div class="modal-dialog">
      <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">BPJS</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <form>
            <label for="fname">Nama BPJS :</label><br>
            <input type="text" name="nama" class="form-control" id="namaempat"  placeholder="Nama BPJS" required><br>
            <label for="lname">Nomor BPJS :</label><br>
            <input type="number" name="nomor" class="form-control" id="nomorempat"  placeholder="Nomor BPJS" required>
            <input type="hidden" id="pemesan4" value="<?= $this->session->userdata('nama'); ?>">
        </form><br>
        <span>*Max Pembayaran 1x24 jam setelah pemesanan !</span>
      </div>

      <div class="modal-footer">
        <button onclick="myalert()" type="submit" class="btn2 btn-danger" data-bs-dismiss="modal" id="btnSubmit4">Pesan</button>
      </div>
  </div>
    </div>
  </div>

<!-- BT6 -->
    <div class="modal fade" id="bt6">
    <div class="modal-dialog">
      <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">E-Wallet</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <form>
            <label for="fname">Nama Aplikasi :</label><br>
            <select name="nama" id="namalima" class="form-select" required><br>
              <option value="">-- Pilih Dompet --</option>
              <option value="Dana">Dana</option>
              <option value="E-Money">E-Money</option>
              <option value="Go-Pay">Go-Pay</option>
              <option value="LinkAja">LinkAja</option>
              <option value="OVO">OVO</option>
              <option value="Paytren">Paytren</option>
              <option value="ShopeePay">ShopeePay</option>
            </select><br>
            <label for="lname">Nomor Tujuan :</label><br>
            <input type="number" name="nomor" class="form-control" id="nomorlima"  placeholder="Nomor Tujuan" required><br>
            <label for="lname">Nominal :</label><br>
            <select name="nominal" id="nominallima" class="form-select" required>
              <option value="">-- Pilih Nominal --</option>
              <option value="10.000">10.000</option>
              <option value="20.000">20.000</option>
              <option value="30.000">30.000</option>
              <option value="40.000">40.000</option>
              <option value="50.000">50.000</option>
              <option value="100.000">100.000</option>
              <option value="200.000">200.000</option>
            </select>
            <input type="hidden" id="pemesan5" value="<?= $this->session->userdata('nama'); ?>">
        </form><br>
        <span>*Max Pembayaran 1x24 jam setelah pemesanan !</span>
      </div>

      <div class="modal-footer">
        <button onclick="myalert()" type="submit" class="btn2 btn-danger" data-bs-dismiss="modal" id="btnSubmit5">Pesan</button>
      </div>
  </div>
    </div>
  </div>

<!-- BT7 -->
    <div class="modal fade" id="bt7">
    <div class="modal-dialog">
      <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">Kuota</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <form class="mb-3">
            <div class="mb-3">
            <label for="namaenam">Provider Kartu :</label>
            <select name="nama" id="namaenam" class="form-select" required>
              <option value="">-- Pilih Provider --</option>
              <!-- <option value="im3">im3</option> -->
              <option value="XL">XL</option>
              <option value="Indosat">Indosat</option>
              <option value="Axis">Axis</option>
              <option value="3">3</option>
              <option value="Telkomsel">Telkomsel</option>
            </select>
            </div>
            <div class="mb-3">
            <label for="nomorenam">No. Tujuan :</label>
            <input type="number" name="nomor" id="nomorenam" class="form-control" placeholder="Nomor Tujuan" required>
            </div>
            <div class="mb-3">
            <label for="nominalenam">Nominal Kuota :</label>
            <select name="nominal" id="nominalenam" class="form-select" required>
              <option value="">-- Pilih Nominal --</option>
            </select>
            </div>
            <input type="hidden" id="pemesan6" value="<?= $this->session->userdata('nama'); ?>">
        </form>
        
        <span>*Max Pembayaran 1x24 jam setelah pemesanan !</span>
      </div>

      <div class="modal-footer">
        <button onclick="myalert()" type="submit" class="btn2 btn-danger" data-bs-dismiss="modal" id="btnSubmit6">Pesan</button>
      </div>
  </div>
    </div>
  </div>

<!-- BT8 -->
    <div class="modal fade" id="bt8">
    <div class="modal-dialog">
      <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">Pulsa</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <form>
            <label for="fname">Provider Kartu :</label><br>
            <select name="nama" id="namatujuh" class="form-select" required>
              <option value="">-- Pilih Provider --</option>
              <!-- <option value="im3">im3</option> -->
              <option value="XL">XL</option>
              <option value="Indosat">Indosat</option>
              <option value="Axis">Axis</option>
              <option value="3">3</option>
              <option value="Telkomsel">Telkomsel</option>
            </select><br>
            <label for="lname">No. Tujuan :</label>
            <input type="number" name="nomor" class="form-control" id="nomortujuh"  placeholder="Nomor Tujuan" required><br>
            <label for="lname">Nominal :</label>
            <select name="nominal" id="nominaltujuh" class="form-select" required>
              <option value="">-- Pilih Nominal --</option>
              <option value="5.000">5.000</option>
              <option value="10.000">10.000</option>
              <option value="20.000">20.000</option>
              <option value="30.000">30.000</option>
              <option value="40.000">30.000</option>
              <option value="50.000">50.000</option>
              <option value="100.000">100.000</option>
            </select>
            <input type="hidden" id="pemesan7" value="<?= $this->session->userdata('nama'); ?>">
        </form><br>
        <span>Nominal Ready Semua</span><br>
        <span>*Max Pembayaran 1x24 jam setelah pemesanan !</span>
      </div>

      <div class="modal-footer">
        <button onclick="myalert()" type="submit" class="btn2 btn-danger" data-bs-dismiss="modal" id="btnSubmit7">Pesan</button>
      </div>
  </div>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js"></script>
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
    <script src="<?= base_url(); ?>assets/js/pesan.js"></script>
    <script>
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                dots: false,
                nav: true,
                items: 1
            });
        });
    </script>
    <script>
      $('#namaenam').change(function() {
        let namaenam = $(this).val();

        if (namaenam == 'im3') {
          let nominalenam = `
            <option value="1 GB (30 Hari)">1 GB (30 Hari)</option>
            <option value="2 GB (30 Hari)">2 GB (30 Hari)</option>
          `;
          $('#nominalenam').html('<option value="">-- Pilih Nominal --</option>');
          $('#nominalenam').append(nominalenam);
        } 
        else if (namaenam == 'XL') {
          let nominalenam = `
          <option value="eXtra Combo 5GB+5GB Youtube+Telp 20m (30 Hari)">eXtra Combo 5GB+5GB Youtube+Telp 20m (30 Hari)</option>
          <option value="eXtra Combo 10GB+10GB Youtube+Telp 30m (30 Hari)">eXtra Combo 10GB+10GB Youtube+Telp 30m (30 Hari)</option>
          <option value="eXtra Combo 15GB+15GB Youtube+Telp 40m (30 Hari)">eXtra Combo 15GB+15GB Youtube+Telp 40m (30 Hari)</option>
          <option value="eXtra Combo 20GB+20GB Youtube+Telp 60m (30 Hari)">eXtra Combo 20GB+20GB Youtube+Telp 60m (30 Hari)</option>
          <option value="eXtra Combo 35GB+35GB Youtube+Telp 90m (30 Hari)">eXtra Combo 35GB+35GB Youtube+Telp 90m (30 Hari)</option>
          <option value="HotRod Pro 800MB (30 Hari)">HotRod Pro 800MB (30 Hari)</option>
          <option value="HotRod Pro 1.5GB (30 Hari)">HotRod Pro 1.5GB (30 Hari)</option>
          <option value="HotRod Pro 3GB (30 Hari)">HotRod Pro 3GB (30 Hari)</option>
          <option value="HotRod Pro 6GB (30 Hari)">HotRod Pro 6GB (30 Hari)</option>
          <option value="HotRod Pro 8GB (30 Hari)">HotRod Pro 8GB (30 Hari)</option>
          `;
          $('#nominalenam').html('<option value="">-- Pilih Nominal --</option>');
          $('#nominalenam').append(nominalenam);
        } else if (namaenam == 'Indosat') {
          let nominalenam = `
            <option value="Freedom Combo 4GB+2GB malam (30 Hari)">Freedom Combo 4GB+2GB malam (30 Hari)</option>
            <option value="Freedom Combo 7GB+3GB malam (30 Hari)">Freedom Combo 7GB+3GB malam (30 Hari)</option>
            <option value="Freedom Combo 15GB+5GB malam (30 Hari)">Freedom Combo 15GB+5GB malam (30 Hari)</option>
            <option value="Data Pure 1GB (30 Hari)">Data Pure 1GB (30 Hari)</option>
            <option value="Data Pure 2GB (30 Hari)">Data Pure 2GB (30 Hari)</option>
            <option value="Data Pure 3GB (30 Hari)">Data Pure 3GB (30 Hari)</option>
            <option value="Data Pure 4GB (30 Hari)">Data Pure 4GB (30 Hari)</option>
            <option value="Data Pure 5GB (30 Hari)">Data Pure 5GB (30 Hari)</option>
          `;
          $('#nominalenam').html('<option value="">-- Pilih Nominal --</option>');
          $('#nominalenam').append(nominalenam);
        } else if (namaenam == 'Axis') {
          let nominalenam = `
          <option value="Data Bronet 1GB (30 Hari)">Data Bronet 1GB (30 Hari)</option>
          <option value="Data Bronet 2GB (30 Hari)">Data Bronet 2GB (30 Hari)</option>
          <option value="Data Bronet 3GB (30 Hari)">Data Bronet 3GB (30 Hari)</option>
          <option value="Data Bronet 4GB (30 Hari)">Data Bronet 4GB (30 Hari)</option>
          <option value="Data Bronet 5GB (30 Hari)">Data Bronet 5GB (30 Hari)</option>
          <option value="Data Mini 1.5GB (3 Hari)">Data Mini 1.5GB (3 Hari)</option>
          <option value="Data Mini 500MB (3 Hari)">Data Mini 500MB (3 Hari)</option>
          <option value="Data Mini 5GB (15 Hari)">Data Mini 5GB (15 Hari)</option>
          <option value="Data Mini 7GB (15 Hari)">Data Mini 7GB (15 Hari)</option>
          `;
          $('#nominalenam').html('<option value="">-- Pilih Nominal --</option>');
          $('#nominalenam').append(nominalenam);
        } else if (namaenam == '3') {
          let nominalenam = `
          <option value="Data Happy 2GB (5 Hari)">Data Happy 2GB (5 Hari)</option>
          <option value="Data Happy 5GB (7 Hari)">Data Happy 5GB (7 Hari)</option>
          <option value="Data Happy 12GB (30 Hari)">Data Happy 12GB (30 Hari)</option>
          <option value="Data Happy 18GB (30 Hari)">Data Happy 18GB (30 Hari)</option>
          <option value="Data Happy 26GB (30 Hari)">Data Happy 26GB (30 Hari)</option>
          <option value="Data Mini 1GB (5 Hari)">Data Mini 1GB (5 Hari)</option>
          <option value="Data Mini 1.5GB (7 Hari)">Data Mini 1.5GB (7 Hari)</option>
          <option value="Data Pure 1.5GB (14 Hari)">Data Pure 1.5GB (14 Hari)</option>
          <option value="Data Pure 2.5GB (14 Hari)">Data Pure 2.5GB (14 Hari)</option>
          `;
          $('#nominalenam').html('<option value="">-- Pilih Nominal --</option>');
          $('#nominalenam').append(nominalenam);
        } else if (namaenam == 'Telkomsel') {
          let nominalenam = `
          <option value="Data Flash 1GB (30 Hari)">Data Flash 1GB (30 Hari)</option>
          <option value="Data Flash 2GB (30 Hari)">Data Flash 2GB (30 Hari)</option>
          <option value="Data Flash 3GB (30 Hari)">Data Flash 3GB (30 Hari)</option>
          <option value="Data Flash 4GB (30 Hari)">Data Flash 4GB (30 Hari)</option>
          <option value="Data Flash 5GB (30 Hari)">Data Flash 5GB (30 Hari)</option>
          <option value="Data HARIAN 1.5GB (3 Hari)">Data HARIAN 1.5GB (3 Hari)</option>
          <option value="Data HARIAN 18GB (3 Hari)">Data HARIAN 18GB (3 Hari)</option>
          <option value="Data HARIAN 1GB (3 Hari)">Data HARIAN 1GB (3 Hari)</option>
          <option value="Data HARIAN 2.5GB (1 Hari)">Data HARIAN 2.5GB (1 Hari)</option>
          `;
          $('#nominalenam').html('<option value="">-- Pilih Nominal --</option>');
          $('#nominalenam').append(nominalenam);
        }
      });

      var owl = $('.owl-carousel');
owl.owlCarousel({
    items:1,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:4000,
    autoplayHoverPause:true
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})

function myalert() { 
            alert("Terima kasih atas pesanan anda\n " + 
                "Mohon ditunggu 10menit, kamu akan menerima notifikasi via whatsapp\n " +  
                "Kamu juga dapat cek pesanan anda di history"); 
        }
    </script>

    
</body>
</html>