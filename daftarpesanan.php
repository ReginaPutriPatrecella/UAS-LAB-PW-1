<?php
session_start();
include "koneksi.php";
if(!isset($_SESSION['username'])){
    header ("location:login.php");
}
if(isset($_SESSION['username'])){
    $username= $_SESSION['username'];
}
?>


<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0">
        <meta http-equiv="X-UA-Compatible" content = "ie=edge">
        <title> PT.GARUDA INDONESIA </title>
        <meta content="" name="description">
        <meta content="" name="keywords">
        <link rel="stylesheet" href="baju.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        
        <!--Icon-->
        <link href="img/logo.jpg" rel="icon">
        <link href="img/logo.jpg" rel="apple-touch-icon">
        
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        
        <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

    </head>
    
    <body>
    <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">customer@garuda-indonesia.com
</a>
        <i class="bi bi-phone"></i>08041807807

      </div>
        </div>
        </div>
  
    
        <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"> PT.Garuda Indonesia<a href="index.html"></a></h1>
        
        <a href="index.html" class="logo me-auto me-lg-0"><img src="img/logo2.jpg" alt="" class="img-fluid"></a>

        
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="tugas.php">Beranda</a></li>
          <li><a class="nav-link scrollto" href="tugas.php">Tentang</a></li>
          <li><a class="nav-link scrollto" href="daftarpesanan.php">Daftar Pesanan Tiket</a></li>
          <li><a class="nav-link scrollto" href="logout.php">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="appointment-btn scrollto">
         <center>
        <pp>Welcome Admin, <?php echo $_SESSION['username']; echo " "?><br></pp>
            </center></div>

    </div>
  </header>
        <!-- End Header -->

        <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Daftar Pesanan Tiket</h2>
          <ol>
            <li><a href="tugas.php">Home</a></li>
            <li>Daftar Pesanan Tiket</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->
        
        <!--Awal Jadwal-->
        
        <div class="jumbotron" id="jadwal">
            <div class="container">
          <h1 class="display-4">Daftar Pemesan Tiket</h1>
            <table class="table table-hover">
            <thead>
                <th>No.</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Tanggal</th>
                <th>Transportasi</th>
                <th>Kelas</th>
                <th>Catatan</th>
                <th>Asal</th>
                <th>Tujuan</th>
            </thead>
            
                <!--Menampilkan Data Pemesanan-->
                
                <?php
                
                include_once 'koneksi.php';
                    $no=1;
                    $data=mysqli_query($koneksi, "select * from datapembeli");
                while ($d=mysqli_fetch_array($data)){
            ?>
                <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['email']; ?></td>
                    <td><?php echo $d['telepon']; ?></td>
                    <td><?php echo $d['tanggal']; ?></td>
                    <td><?php echo $d['transportasi']; ?></td>
                    <td><?php echo $d['kelas']; ?></td>
                    <td><?php echo $d['catatan']; ?></td>
                    <td><?php echo $d['asal']; ?></td>
                    <td><?php echo $d['tujuan']; ?></td>
                    <td>
                        <a href="hapus.php?email=<?php echo $d['email']; ?>"> <input type="submit" class="btn btn-primary" value="Hapus"></a> 
                        <br> /
                        <br>
                        <a href="edit.php?email=<?php echo $d['email']; ?>"> <input type="submit" class="btn btn-primary" value="Edit"></a>
                    
                    </td>
                </tr>
                    <?php  
                }
                
                ?>
                
                
                
                <!--Akhir Data Pemesanan-->
                
        </table>
        </div>
        </div>
        
        <!--Akhir Jadwal-->
        
        
        
         <!--Footer-->
        
        
        <footer id="footer">
        <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright 2021 <strong><span>PT.Garuda Indonesia</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

        
        
    </body>
</html>