<?php
session_start();
include ('koneksi.php');
$username=$_POST['username'];
$password=$_POST['password'];
$query=mysqli_query($koneksi, "select * from custamer where username = '$username' and password = '$password'");

$xxx=mysqli_num_rows($query);
if($xxx==TRUE){
    $_SESSION['username']=$username;
    
     echo "<script> alert ('Selamat Datang Di PT.Garuda Indonesia !'); location = 'halamanutama.php';</script>";
}
else{
    echo "<script>alert('Username Atau Pasword Salah!!!'); location = 'logincustamer.php';</script>";
}
?>