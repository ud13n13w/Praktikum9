<!DOCTYPE html>
<html>
<head>
	<title> Login Admin Page </title>
	<link rel="stylesheet" href="../style/style.css">
</head>
<body>

	<form method="POST" action="index.php">
		<table cellspacing="0">
			<tr>
				<th colspan="2">Login Admin Page</th>
			</tr>
			<tr>
				<th>Username</th>
				<td><input type="text" name="input_username" size="25" maxlength="25"></td>
			</tr>
			<tr>
				<th>Password</th>
				<td><input type="password" name="input_password" size="25" maxlength="25"></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" name="btn_login" value="Login" class="btn login">
					<input type="reset" name="btn_reset" value="Reset" class="btn reset">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<a href="../kontak.html">Kembali ke Kontak</a>
				</td>
			</tr>
		</table>	
	</form>

</body>
</html>

<?php
	
	include "koneksi.php";
	session_start();

	//Pencegahan user menuju index.php tanpa melalui proses Logout
	if( isset($_SESSION['id_user']) ) {
    	echo "<script> alert('Sesi terakhir anda masih Tersimpan, silahkan LOGOUT untuk ganti akun'); </script>";
        echo "<script> window.location='cetak.php'; </script>";
    }

	if( isset($_POST['btn_login']) ){

		/*
			User: burhan
			Password: burhan123
		*/
		$username = $_POST['input_username'];
		$password = hash('sha512', $_POST['input_password']);

			//echo $username, $password;
		
		$query		= "	SELECT id_user,username,email
						FROM tbL_user 
						WHERE username='".$username."' AND password='".$password."' LIMIT 1 ";
		$result		= mysqli_query ($koneksi,$query);

		if( mysqli_num_rows($result) > 0 ){
			
			//Mendefinisikan Data pada Database menjadi $row
			$row = mysqli_fetch_assoc($result);

			//Memasukkan data ke SESSION
			$_SESSION['id_user']	= $row['id_user'];
			$_SESSION['username']	= $row['username'];
			$_SESSION['email']		= $row['email'];

				//echo $_SESSION['id_user'].$_SESSION['username'].$_SESSION['email'];

	        //Hanya pengujian, Data password tidak diambil agar password tidak diketahui siapapun
			//echo $row['password'];
	        	
			echo "<script> alert('Login BERHASIL'); </script>";
			echo "<script> window.location='cetak.php'; </script>";

		}else{
			echo "Username atau password salah <br><a href='login.php'>Kembali</a>";
		}
	}
	

?>