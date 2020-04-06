<?php

	//Memasukkan Data Ke Database
	
	if( isset($_POST['btn_simpan']) ){

		$host		= "localhost";
		$username	= "root";
		$password	= "";
		$database 	= "db_pemrogramanweb";

		$koneksi = mysqli_connect($host, $username, $password, $database) or die("Koneksi Gagal Dibangun") ;

		// Mengambil Data dari kontak.html
		$vnama		= $_POST['nama'];
		$vjkel		= $_POST['jkel'];
		$vemail		= $_POST['email'];
		$valamat	= $_POST['alamat'];
		$vkota		= $_POST['kota'];
		$vpesan		= $_POST['pesan'];

			//echo $vnama, $vjkel, $vemail, $valamat, $vkota, $vpesan;

		$sql = "	INSERT INTO kontak(nama, jkel, email, alamat, kota, pesan) 
				VALUES ('$vnama','$vjkel','$vemail','$valamat','$vkota','$vpesan')  ";

		mysqli_query($koneksi, $sql) or die( mysqli_error($koneksi))  ;
		mysqli_close();

		echo "<script> alert('Tambah Kontak BERHASIL'); </script>";
		echo "<script> window.location='kontak.html'; </script>";

	}else{

		echo "<script> alert('Harap isi form terlebih dahulu'); </script>";
		echo "<script> window.location='kontak.html'; </script>";

	}

	

?>