<!DOCTYPE html>
<html lang="en">
<head>
    <title>History</title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/isi.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid white;
  text-align: center;
  padding: 8px;
}

/* tr:nth-child(even) {
  background-color: #dddddd;
  } */
</style>
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <div class="profile">
        <button style="border-radius:10%; cursor:pointer;" ><h5 ><a style="color: black; padding:2px; text-decoration:none;" href="<?= base_url(); ?>home">< kembali</a></h5></button>
        <h3>History Pemesanan</h3><br><br>

            <table>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis</th>
                    <th>Status</th>
                </tr>
            <tbody>
                <?php
                $i=1;
                foreach ($histories as $history) { ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $history->nama; ?></td>
                    <td><?= $history->jenis; ?></td>
                    <td><?= $history->status; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        
    </div>
</body>
</html>
