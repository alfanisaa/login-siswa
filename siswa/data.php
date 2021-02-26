<?php
	include "session.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - DATA SISWA</title>
</head>
<body>
	
	<h2>CRUD DATA </h2>
	<br/>
	<a href="input.php">+ TAMBAH SISWA
	</a>
	<br>
	<a href="logout.php">+ Logout</a>

	</br>
	</br>
	<table border="1">
		<tr>
			<th>no induk</th>
			<th>nama</th>
			<th>alamat</th>
			<th>hobi</th>
			<th>foto</th>
			<th>opsi</th>
		</tr>
		<?php 
		include 'koneksi.php';

		$no = 1;
		$data = mysqli_query($connect,"select*from siswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['no_induk']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td><?php echo $d['hobi']; ?></td>
				<td><img src="images/<?php echo $d['foto']?>" width="60" height="60"></td> 
				<td>
					<a href="edit.php?id=<?php echo $d['no_induk'] ?>">Edit</a>
					<a href="delete.php?id=<?php echo $d['no_induk'] ?>">Hapus</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
	</center>
</body>
</html>

