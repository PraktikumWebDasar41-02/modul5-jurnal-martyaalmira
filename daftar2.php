<!DOCTYPE html>
<html>
<head>
	<title>Isi komentar</title>01
</head>
<body>
	<table>
		<form method="POST">
			<tr>
				<td>Nama <?php echo $nama ?> </td>
			</tr>
			<tr>
				<td>Komentar</td>
				<td><input type="text" name="komentar">
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


if(isset($_POST['submit'])){
	$nama = $_POST['nama'];
	$komentar = $_POST['komentar'];
		mysqli_query($data,"INSERT INTO t_jurnal1 VALUES('', '$nama', '', '$komentar')");
	header("location:tampil.php");
}
?>