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
					<a href="#">Kembali</a> <!-- File belum ada sebelum tugas selesai dikerjakan -->
				</td>
			</tr>
		</table>
	</form>

</body>
</html>
