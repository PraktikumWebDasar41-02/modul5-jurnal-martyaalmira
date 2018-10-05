<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pendaftaran</title>
</head>
<body>
<table>
	<form method="POST">
		<tr>
			<td>NIM</td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Submit"></td>
		</tr>


	</form>
</table>

</body>
</html>


<?php
$data =mysqli_connect('localhost', 'root', '', 'd_modul5');

session_start();
//$_SESSION ["nama"] = $_POST['nama'];
//$_SESSION ["email"] = $_POST['email'];


if(isset($_POST['submit'])){
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];


	$cek = mysqli_query($data,"INSERT INTO t_jurnal1 VALUES($nim, '$nama', '$email', '' )");
	if($cek){
		header("location:daftar2.php");
	}
}
?>