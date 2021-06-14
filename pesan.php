<?php
session_start();
include "koneksi.php";
if(!isset($_SESSION['username'])){
    header ("location:logincustamer.php");
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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        
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
        <i class="bi bi-phone"></i> 08041807807

      </div>
        </div>
        </div>
  
    
        <!-- ======= Header ======= -->
        
        <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"> PT.Garuda Indonesia<a href="index.html"></a></h1>
        
        <a href="index.html" class="logo me-auto me-lg-0"><img src="img/logo2.jpg" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="halamanutama.php">Beranda</a></li>
            <li><a class="nav-link scrollto" href="halamanutama.php">Tentang</a></li>
          <li><a class="nav-link scrollto" href="halamanutama.php">Kontak</a></li>
            <li><a class="nav-link scrollto" href="logoutcustamer.php">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="pesan.php" class="appointment-btn scrollto"><span class="d-none d-md-inline">Pesan</span> Tiket</a>
        
         <div class="appointment-btn scrollto">
         <center>
        <pp>Welcome, <?php echo $_SESSION['username']; echo " "?><br></pp>
            </center></div>

    </div>
  </header>
        <!-- End Header -->
        
        <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Pesan Tiket</h2>
          <ol>
            <li><a href="halamanutama.php">Home</a></li>
            <li>Pesan Tiket</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->
        
        <section id="appointment" class="appointment section-bg">
      <div class="container">
          
    <form action="proses_input.php" method="post" class="row g-3">
  <div class="col-md-6">
    <label for="nama" class="form-label">Masukkan Nama</label>
    <input type="text" name="nama" class="form-control" id="nama" required>
  </div>
  <div class="col-md-6">
    <label for="email" class="form-label">Masukkan Email</label>
    <input type="email" name="email" class="form-control" id="email" required>
  </div>
    <div class="col-md-6">
    <label for="telepon" class="form-label">Masukkan No. Telepon</label>
    <input type="number" name="telepon" class="form-control" id="telepon" required>
  </div>
    <div class="col-md-6">
    <label for="tanggal" class="form-label">Tanggal Keberangkatan</label>
    <input type="text" name="tanggal" class="form-control" id="tanggal" required>
  </div>
    <div class="col-md-4">
    <label for="transportasi" class="form-label">Transportasi</label>
    <select name="transportasi" id="transportasi" class="form-select" required>
      <option selected>Pilih Maskapai</option>
      <option value="Garuda Indonesia">Garuda Indonesia</option>
      <option value="Citilink">Citilink</option>
    
    </select>
  </div>
        
        <div class="col-md-4">
    <label for="kelas" class="form-label">Kelas</label>
    <select name="kelas" id="kelas" class="form-select" required>
      <option selected>Pilih Kelas</option>
      <option value="Ekonomi">Ekonomi</option>
      <option value="Bisnis">Bisnis</option>
      <option value="Eksekutif">Eksekutif</option>
    </select>
  </div>  
  <div class="col-6">
    <label for="catatan" class="form-label">Catatan Seat</label>
    <input name="catatan" type="text" class="form-control" id="catatan" placeholder="Catatan Seat">
  </div>
        
        <div class="col-6">
    <label for="asal" class="form-label">Asal Keberangkatan</label>
    <input name="asal" type="text" class="form-control" id="asal" placeholder="Asal (Kota,Provinsi(cth:Medan,Sumatera Utara))">
  </div>
        
        <div class="col-6">
    <label for="tujuan" class="form-label">Tujuan</label>
    <input name="tujuan" type="text" class="form-control" id="tujuan" placeholder="Tujuan (Kota,Provinsi(cth:Medan,Sumatera Utara))">
  </div>
     <div class="col-12">
         <div class="text-center">
   <tr>
       <td>&nbsp;</td>
       <td></td>
       <td><input type="submit" name="tambah" class="btn btn-primary"value="Pesan Tiket"></td>
      
      </tr>
         </div>
  </div>
</form>
            </div>
        </section>
        
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