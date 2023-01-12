<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Form Login</title>
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
    <div class="home">
        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam laboriosam molestias eaque soluta obcaecati pariatur voluptatibus adipisci culpa exercitationem quam suscipit neque, enim quo laudantium porro sint, officia nobis nulla fugit explicabo excepturi et optio error in. Reiciendis eos pariatur, quibusdam nam nihil, nisi dolorem voluptatibus dolore quae exercitationem accusamus in aliquam, omnis odio non inventore. Sunt rerum distinctio quaerat atque quidem exercitationem explicabo repudiandae ipsum voluptate dignissimos illo fugiat autem itaque et, consequatur ratione nobis, dolorum qui quisquam alias deleniti odit veniam? Sequi quasi fugit, ad sapiente, itaque pariatur perspiciatis suscipit assumenda veniam quidem mollitia quos fuga totam natus inventore.
        </p> -->
        
    </div>
    <form action="<?= base_url(); ?>auth/act_login" method="POST">
        <?= $this->session->userdata('alert'); ?>
        
        <h3>Selamat Datang</h3>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Email" autofocus required>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Password" required>

        <button type="submit" class="button">Masuk</button>

        <div class="social">
          <a href="<?= base_url(); ?>auth/daftar"  style="text-decoration:none;"> <div>Daftar </div> </a>
          <!-- <a href="<?= base_url(); ?>auth/lupapassword"  style="text-decoration:none; margin-left:27px;"> <div>Lupa Password </div> </a> -->
        </div>
    </form>
</body>
</html>
