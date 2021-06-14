<?php
$host = "localhost";
$user = "root";
$pass = "";
$name = "tes";
$koneksi = mysqli_connect($host,$user,$pass) or die ("Koneksi Ke Database Gagal!!!");
mysqli_select_db($koneksi,$name) or die ("Database Tidak Tersedia")

?>