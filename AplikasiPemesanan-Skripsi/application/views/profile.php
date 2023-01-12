<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile</title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/isi.css">
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
    <div class="profile">
        <button style="border-radius:10%; cursor:pointer;" ><h5 ><a style="color: black; padding:2px; text-decoration:none;" href="<?= base_url(); ?>home">< kembali</a></h5></button>
        <h3>Profile</h3>

        <div class="foto">
            <img src="https://via.placeholder.com/100x100" style="margin-top: 10px; margin-left: 36%; border-radius: 50% ;" >
            <!-- <button class="button1">Ganti foto</button> -->
        </div>
        <div class="nama">

                <!-- <button class="button2" style="position: absolute; right: 2%">edit</button> -->

                <div class="media">
                    <label class="lbl1">Nama :</label>
                    <p style="margin:0px;"><?= $user->nama; ?></p>
                </div>
                <div class="media">
                    <label class="lbl1">Email :</label>
                    <p><?= $user->email; ?></p>
                </div>
                <div class="media">
                    <label class="lbl1">No. Whatsapp :</label>
                    <p><?= $user->no_wa; ?></p>
                 </div>
                <div class="media">
                       <label class="lbl1">Alamat :</label>
                       <p><?= $user->alamat; ?></p>
                </div>

        </div>
        
    </div>
</body>
</html>
