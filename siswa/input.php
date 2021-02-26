<?php
	include "session.php";
?>

<!DOCTYPE html>
	<head>
		<title>Daftar Siswa</title>
	</head>
	<body>
	<h3 align="center">Daftar Siswa / Siswi Baru</h3>
	<hr width=43%>
		<table border="1" align="center">
			<form method="post" action="proses.php" enctype="multipart/form-data">
				<tr>
					<td>No. Induk</td>
					<td>=</td>
					<td><input type="text" name="no_induk" placeholder="Masukkan No. Induk" required></td>
				</tr>
				<tr>
					<td>Nama Siswa</td>
					<td>=</td>
					<td><input type="text" name="nama" placeholder="Masukkan Nama" required></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>=</td>
					<td><textarea name="alamat" required placeholder="alamat" ></textarea></td>
				</tr>
				<tr>
					<td>Hobi</td>
					<td>=</td>
					<td><input type="text" name="hobi" placeholder="Masukkan Hobi Anda" required></td>
				</tr>
				<tr>
					<td>Foto</td>
					<td>=</td>
					<td><input type="file" name="foto"></td>
       		    </tr>
       		    <tr>
					<td colspan="3" align="center"> <input type="submit" name="simpan" required> </td>
			</form>
		</table>
		<hr width="43%">
		<center>
			<a href="data.php">Lihat Tabel</a>
		</center>
	</body>
</html>