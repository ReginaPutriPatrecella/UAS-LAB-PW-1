<?php
//mulai proses tambah data

//cek dahulu, jika tombol tambah di klik
if(isset($_POST['tambah'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include ('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$nama		    = $_POST['nama'];	
	$email		    = $_POST['email'];	
	$telepon		= $_POST['telepon'];	
	$tanggal	    = $_POST['tanggal'];
	$transportasi	= $_POST['transportasi'];
	$kelas	        = $_POST['kelas'];
	$catatan	    = $_POST['catatan'];
	$asal	        = $_POST['asal'];
	$tujuan    	    = $_POST['tujuan'];
	
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysqli_query($koneksi,"insert into datapembeli VALUES('$nama', '$email', '$telepon', '$tanggal','$transportasi','$kelas','$catatan','$asal','$tujuan')");
    
	
	//jika query input sukses
	if($input){
		
        echo "<script> alert ('Data Berhasil Ditambahkan'); location = 'halamanutama.php';</script>";
		
	}else{
		
		echo "<script> alert ('Data Tidak Berhasil Ditambahkan!'); location = 'halamanutama.php';</script>";
		
	}

}else{	//jika tidak terdeteksi tombol tambah di klik

	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';

}
?>