<?php

if(isset($_POST['simpan']))
{
    include('koneksi.php');
    $nama		    = $_POST['nama'];	
	$email		    = $_POST['email'];	
	$telepon		= $_POST['telepon'];	
	$tanggal	    = $_POST['tanggal'];
	$transportasi	= $_POST['transportasi'];
	$kelas	        = $_POST['kelas'];
	$catatan	    = $_POST['catatan'];
	$asal	    = $_POST['asal'];
	$tujuan	    = $_POST['tujuan'];
    $update         =mysqli_query($koneksi, "update datapembeli set
    nama    =   '$nama',
    telepon =   '$telepon',
    tanggal =   '$tanggal',
    transportasi    =   '$transportasi',
    kelas   =   '$kelas',
    catatan =   '$catatan',
    asal =   '$asal',
    tujuan =   '$tujuan'
    where email =   '$email'")or die(mysqli_error($koneksi));
    
    if($update)
    {
        echo "<h2>data berhasil di update</h2>";
        echo "<script>window.location = 'daftarpesanan.php'</script>";
    }
    
    else
    {
        echo "<h2>gagal menyimpan data</h2>";
        echo "<a href ='edit.php ?email =" .$email."'>kembali</a>";
    }
}

else{
    echo "<script>window.history.back()</script>";
}
?>