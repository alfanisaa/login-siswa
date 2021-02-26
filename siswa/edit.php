<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - DATA SISWA</title>
</head>
<body>

    <center>
	<h2>CRUD DATA SISWA</h2>
	<br/>
	<h3>EDIT DATA SISWA</h3>
	</center>

	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$query = "SELECT*FROM siswa where no_induk='$id'";
	$data = mysqli_query($connect,$query);
	$data = mysqli_fetch_array($data);
		?>
		<form method="post" action="update.php" enctype="multipart/form-data">
			<table align="center" border="1px">
				<tr>			
					<td>id</td>
					<td>
						<input type="hidden" name="no_induk_old" value="<?php echo $data['no_induk']; ?>">
						<input type="text" name="no_induk" value="<?php echo $data['no_induk']; ?>">
					</td>
				</tr>
				<tr>
					<td>nama</td>
					<td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
				</tr>
				<tr>
					<td>alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"></td>
				</tr>
				<tr>
					<td>hobi</td>
					<td><input type="text" name="hobi" value="<?php echo $data['hobi']; ?>"></td>
				</tr>
				<tr>
					<td>foto lama</td>
					<td><img src="images/<?php echo $data['foto']?>" width="60px" height="60px"></td>
				</tr>
				<tr>
					<td>foto baru</td>
					<td><input type="file" name="foto"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="simpan" name="simpan"></td>
				</tr>		
			</table>
            <hr width="50%">
            <center>
			<a href="data.php">KEMBALI</a>
			</center>
		</form>
		<?php 
	?>
</body>
</html>
