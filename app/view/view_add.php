<?php

require __DIR__ . '/../../vendor/autoload.php';

use App\Controller\Controller;

	if(isset($_POST['submit'])){
		$main = new Controller();
		$main->insert();
	}
?>

<html>
	<head>
		<title>Tambah Data</title>
		<style>
		body{
			background-color: #aab6b3;
		}
		</style>
	</head>
	<body>
		<form action="" method="POST">
			<table border="1px" align="center" bgcolor="#1d2d20" cellpadding="5" style="font-size:16px;  margin-top:95; padding:20; color:#ede7e7" bordercolor="#1d2d20" >
				<tr>
					<td>Nomor Polisi</td>
					<td>:</td>
					<td><input type="text" name="nopol" size="45" /></td>
				</tr>
				<tr>
					<td>Merk</td>
					<td>:</td>
					<td><input type="text" name="merk" size="45"/></td>
				</tr>
				<tr>
					<td>Warna</td>
					<td>:</td>
					<td><input type="text" name="warna" size="45"/></td>
				</tr>
				<tr>
					<td>Kubikasi</td>
					<td>:</td>
					<td><input type="text" name="kubikasi" size="45"/></td>
				</tr>
				<tr>
					<td>Tahun perakitan</td>
					<td>:</td>
					<td><input type="text" name="tahun_perakitan" size="45"/></td>
				</tr>
				<tr align="center">
					<td colspan="3"><input type="submit" name="submit"/></td>
				</tr>
			</table>
		</form>
	</body>
</html>
