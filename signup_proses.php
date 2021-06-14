<?php

if(isset($_POST['tambah'])){
    
    include ('koneksi.php');
    
    $username   =   $_POST['username'];
    $email      =   $_POST['email'];
    $password   =   $_POST['password'];
    
    $input = mysqli_query($koneksi, "insert into custamer VALUES('$username', '$email', '$password')");
    
    if($input){
        
        echo "<script> alert ('Anda Telah Terdaftar Sebagai Custamer PT.Garuda Indonesia Silahkan Login'); location = 'logincustamer.php';</script>";
    }
    else{
        echo "<script> alert ('Username kamu sudah terdaftar'); location = 'signupcustamer.php';</script>";
    }
    
}

?>