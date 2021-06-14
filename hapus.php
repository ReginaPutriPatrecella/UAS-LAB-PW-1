<?php
if(isset($_GET['email'])){
	include('koneksi.php');
	$email = $_GET['email'];
	$cek = mysqli_query($koneksi,"SELECT email FROM datapembeli WHERE 
 email='$email'") or die(mysqli_error());
if(mysqli_num_rows($cek) == 0){
		echo '<script>window.history.back()</script>';
	}else{
		
		$del = mysqli_query($koneksi,"DELETE FROM datapembeli WHERE 
 email='$email'");
		if($del){
		echo "<script>window.location = 'daftarpesanan.php';</script>";	
		}else{
	echo 'FAILED! ';	
		echo '<a href="daftarpesanan.php">go back</a>';
	}
}
	
}else{
	echo '<script>window.history.back()</script>';	
}
?>
