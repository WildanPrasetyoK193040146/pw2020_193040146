<?php
require 'php/functions.php';

$result = query("SELECT * FROM elektronik");


// tugas no 2

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $result = query("SELECT * FROM elektronik WHERE
Gambar LIKE '%$keyword' OR
Code_barang LIKE '%$keyword' OR
Jenis LIKE '%$keyword' OR
Merk LIKE '%$keyword' OR
Harga LIKE '%$keyword' ");
} else {
  $result = query("SELECT * FROM elektronik");
}
?>


<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="css/style.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

  <!-- Navbar -->

  <body id="home" class="scrollspy">
    <!--navbar-->
    <div class="navbar-fixed">
      <nav class="grey">
        <div class="container">
          <div class="nav-wrapper">
            <a href="#home" class="material-icons">account_circle</a>
            <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="#daftar">Daftar</a></li>
              <li><a href="#contact">Contact</a></li>
              <li><a href="php/admin.php">Halaman admin</a></li>
              <li><a href="php/login.php"><button type="submit">Login</button></a></li>

            </ul>
          </div>
        </div>
      </nav>
    </div>

    <!-- sideNav -->
    <ul class="sidenav" id="mobile-nav">
      <li><a href="php/login.php"><button type="submit">Login</button></a></li>
      <li><a href="#daftar">Daftar</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="php/admin.php">Halaman Admin</a></li>
      
    </ul>




    <!-- slider -->
    <div class="slider">
      <ul class="slides">
        <li>
          <img src="assets/img/banner.jpg">
          <div class="caption left-align ">
            <h3>Garuda Elektronik</h3>
            <h5 class="light grey-text text-lighten-3">Pusat Grosir Barang Elektronik</h5>
          </div>
        </li>
    </div>




    <!-- menambahkan kolom pencarian pada halaman index -->
    
  <form action="" method="get">
      <input type="text" name="keyword" autofocus>
      <button type="submit" name="cari">Cari</button>
    </form>





    <!-- card -->

    <section id="daftar" class="daftar scrollspy">
      <div class="container">

        <h3 class="center">Jenis Barang Elektronik</h3>
        <?php if (empty($result)) : ?>
          <div>
            <h1>Data Tidak Ditemukan</h1>
          </div>
        <?php else : ?>
          <div class="row">
            <?php foreach ($result as $rslt) : ?>


              <div class="col m3">
                <div class="center">
                  <div class="image">
                    <img src="assets/img/<?= $rslt['Gambar'] ?>">
                    <span class="card-title?nama=<?= $rslt['Code_barang'] ?>"></span>
                  </div>


                  <div class="card-content">
                    <p class="nama">

                      <li>Code Barang : <?= $rslt['Code_barang']; ?></li>
                      <li>Jenis : <?= $rslt['Jenis']; ?></li>
                      <li>Merk : <?= $rslt['Merk']; ?></li>
                      <li>Harga : <?= $rslt['Harga']; ?></li>
                      <p class="Code_barang"></p>
                      <li><a href="php/detail.php?id=<?= $rslt['id'] ?>">Detail</a></li>
                      </a>
                    </p>

                  </div>
                </div>
              </div>





            <?php endforeach; ?>
          </div>
      </div>


    </section>
  <?php endif; ?>
  <!--Contact Us-->
  <section id="contact" class="contact scrollspy">
    <div class="container">
      <h3 class="light grey-text text-darken-3"></h3>
      <div class="row">
        <div class="col m5 s12">
          <div class="card-panel grey center white-text">
            <i class="material-icons">email</i>
            <h5>Contact</h5>
            <p>Wildanpk25@gmail.com</p>
          </div>
          <ul class="collection with-header center">
            <li class="collection-header">
              <h4>Store Address</h4>
            </li>
            <li class="collection-item">Garuda Elektronik</li>
            <li class="collection-item">Jln.Krajan Cikampek, Karawang.</li>
            <li class="collection-item">West Java,Indonesia</li>
          </ul>
        </div>
        <div class="col m6 s12">
          <form>
            <div class="card-panel">
              <h5>Form Order</h5>
              <div class="input-field">
                <input type="text" name="name" id="name" required class="validate">
                <label for="name">Nama</label>
              </div>
              <div class="input-field">
                <input type="email" name="email" id="email" class="validate">
                <label for="email">Email</label>
              </div>
              <div class="input-field">
                <input type="text" name="phone number" id="phone number">
                <label for="phone number">No.Tlp</label>
              </div>
              <div class="input-field">
                <textarea name="message" id="message" class="materialize-textarea"></textarea>
                <label for="message">Alamat Lengkap</label>
              </div>
              <div class="input-field">
                <textarea name="menu" id="menu" class="materialize-textarea"></textarea>
                <label for="menu">Barang Yang Dipilih</label>
              </div>
              <button type="submit" class="grey">Send</button>
            </div>
          </form>
        </div>
      </div>
  </section>




  <!-- footer -->
  <footer class="page-footer center grey">
    <div class="container">
    ©2020 Copyright
      </ul>
    </div>
    </div>
    </div>
  </footer>






  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script>
    const sideNav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sideNav);

    const slider = document.querySelectorAll('.slider');
    M.Slider.init(slider, {
      indicators: false,
      height: 500,
      transition: 600,
      interval: 3000
    });
    const parallax = document.querySelectorAll('.parallax');
    M.Parallax.init(parallax);

    const scrollspy = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(scrollspy, {
      scrollOffset: 50

    });
  </script>
  </body>

</html>