<?php
session_start();
include ('koneksi.php');
$username=$_POST['username'];
$password=$_POST['password'];
$query=mysqli_query($koneksi, "select * from user where username = '$username' and password = '$password'");

$xxx=mysqli_num_rows($query);
if($xxx==TRUE){
    $_SESSION['username']=$username;
    header ("location:tugas.php");
}
else{
    echo "<script>alert('Username Atau Pasword Salah!!!'); location = 'login.php';</script>";
}
?>