<html>
	<head>
		<title>Halaman Utama</title>
		<style>
		body{
		    background-color: #aab6b3;
		}
		a:link, a:visited {
		    background-color: #14946a;
		    color: white;
		    padding: 7px 15px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		}

		a:hover, a:active {
		    background-color: #de5b08;
		}
		</style>

	</head>
	<body>
		<table width="55%" border="3px" align="center" bgcolor="#1d2d20" cellpadding="5" style="font-size:16px;  margin-top:95; padding:20; color:#ede7e7" bordercolor="#1d2d20" >
			<tr align="center" bgcolor="#34693d">
				<th>Nomor Polisi</th>
				<th>Merk</th>
				<th>Warna</th>
				<th>Kubikasi</th>
				<th>Tahun perakitan</th>
				<th bgcolor="#1d2d20" colspan="2"><a href='index.php?add=add'>Tambah Data</a></th>
			</tr>
			<?php while($row = $this->model->fetch($data)){
				echo "<tr align='center'>
				<td bgcolor='#509a5d'>$row[0]</td>
				<td bgcolor='#509a5d'>$row[1]</td>
				<td bgcolor='#509a5d'>$row[2]</td>
				<td bgcolor='#509a5d'>$row[3]</td>
				<td bgcolor='#509a5d'>$row[4]</td>
				<td><a href='index.php?edit=$row[0]'>Edit</a></td>
				<td><a href='index.php?del=$row[0]' onClick=\"return confirm('Apakah anda yakin akan menghapus data dari $row[0]?')\"\>Delete</a></td>
				</tr>";
			}
			?>
		</table>
	</body>
</html>
