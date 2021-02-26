<a href="data.php">KEMBALI</a>
<?php 

	include "koneksi.php";

	if(isset($_POST['no_induk']))
		{
			$no_induk_old=$_POST["no_induk_old"];
			$no_induk=$_POST["no_induk"];
			$nama=$_POST["nama"];
			$alamat=$_POST["alamat"];
			$hobi=$_POST["hobi"];
			$foto=$_FILES["foto"]['name'];
			$tmp=$_FILES["foto"]['tmp_name'];
			//Rename nama fotonya dengan menambahkan tanggal dan jam upload
			$fotobaru = date("dmYHis").$foto;

			//Set patch folder tempat menyimpan fotonya
			$path="images/".$fotobaru;

			//proses upload
			if(move_uploaded_file($tmp, $path)){
			
			$query=("UPDATE siswa SET no_induk='$no_induk',nama='$nama',alamat='$alamat',hobi='$hobi',foto='$fotobaru' where no_induk='$no_induk_old'");
			$hasil = mysqli_query($connect, $query);
			
			if($hasil)
				{
					echo"<br>Berhasil Menyimpan!";
				}else
				{
					echo"<br>Gagal Menyimpan!";
				}
			}
			}
?>
