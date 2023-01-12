2<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Form Daftar</title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="<?= base_url(); ?>auth/act_daftar" method="POST" style="overflow-x: hidden; overflow-y: scroll;">
    <?= $this->session->userdata('alert'); ?>
        
        <h3>Silahkan Daftar</h3>

        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" placeholder="Nama Lengkap" autofocus required>

        <label for="nama">Alamat</label>
        <input type="text" name="alamat" id="alamat" placeholder="Alamat Lengkap" autofocus required>

        <label for="no_wa">Nomor Whatsapp</label>
        <input type="text" name="no_wa" id="no_wa" placeholder="Nomor Whatsapp" required>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Email" required>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Password" required>

        <button type="submit" class="button">Daftar</button> <br>
        <span>Sudah punya akun? <a href="<?= base_url(); ?>auth/login">Masuk</a></span>
    </form>
</body>
</html>
