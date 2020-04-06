<?php

	session_start();

    // Mencegah user masuk tanpa melalui login terlebih dahulu
    if( !isset($_SESSION['id_user']) ) {
    	echo "<script> alert('Hayo belum LOGIN kok bobol ADMIN'); </script>";
        echo "<script> window.location='index.php'; </script>";
    }

    //PROSES : Cek Akun
    if( isset($_POST['btn_cekakun']) ){

		$id_user	= $_SESSION['id_user'];
	    $username	= $_SESSION['username'];
	    $email 		= $_SESSION['email'];

	    $alert = "Saat ini login sebagai \\nUser ID : ". $id_user ." \\nUsername : ". $username ." \\nEmail : ". $email ."  ";
	    echo "<script> alert('". $alert ."'); </script>";

	}

	//PROSES : Logout
	if( isset($_POST['btn_logout']) ){

		session_destroy();
		echo "<script> alert('Logout BERHASIL'); </script>";
		echo "<script> window.location='index.php'; </script>";

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../style/style.css">
</head>
<body>

	<form method="POST" action="cetak.php">
		<table width="75%" cellpadding="2" cellspacing="0" border="1">
			<tr>
				<th colspan="7" class="judul">Admin Page</th>
			</tr>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Jenis Kelamin</th>
				<th>Email</th>
				<th>Alamat</th>
				<th>Kota</th>
				<th>Pesan</th>
			</tr>

		<?php

			include('koneksi.php');

			$query = "  SELECT * FROM kontak  ";
			$result = mysqli_query($koneksi, $query);

			if( mysqli_num_rows($result) > 0 ){
				$no = 1;
				while( $row = mysqli_fetch_row($result) ){
					echo "<tr>";
						echo "<td> $no </td>";
						echo "<td> $row[1] </td>";
						echo "<td> $row[2] </td>";
						echo "<td> $row[3] </td>";
						echo "<td> $row[4] </td>";
						echo "<td> $row[5] </td>";
						echo "<td> $row[6] </td>";
					echo "</tr>";
					$no++;
				}
			}else{
				echo "Tidak ada data";
			}
			
		?>
			<tr>
				<td colspan="7">
					<input type="submit" name="btn_cekakun" value="Cek Status Akun" class="btn cekakun">
					<input type="submit" name="btn_logout" value="Logout" class="btn logout">
				</td>
			</tr>
		</table>
	</form>

</body>
</html>