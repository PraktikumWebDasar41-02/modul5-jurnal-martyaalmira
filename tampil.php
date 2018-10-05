<!DOCTYPE html>
<html>
<head>
	<title>Tampilan</title>
</head>
<body>
	<table>
		<form method="POST">
			<tr>
				<td>Nama</td>
			</tr>
			<tr>
				<td>Komentar</td>
			</tr>
			<tr>
				<td>Jumalah Kata</td>
			</tr>
		</form>
	</table>

</body>
</html>


<?php
$data =mysqli_connect('localhost', 'root', '', 'd_modul5');

session_start()
$nim = $_SESSION['nim'];
$nama = $_SESSION['nama'];
$email = $_SESSION['email'];
$komentar= $_SESSION['komentar'];
$misal ="SELECT nama WHERE nim='$nim'";
$sql = mysql_query($data, $misal);

if ($sql) {
	echo $sql;
}

?>