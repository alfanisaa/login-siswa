<?php 

	include "data.php";

	if(isset($_POST['simpan']))
		{
			$no_induk=$_POST["no_induk"];
			$nama=$_POST["nama"];
			$alamat=$_POST["alamat"];
			$hobi=$_POST["hobi"];
			//mengambil data foto
			$foto=$_FILES["foto"]['name'];
			$tmp=$_FILES["foto"]['tmp_name'];

			//Rename nama fotonya dengan menambahkan tanggal dan jam upload
			$fotobaru = date("dmYHis").$foto;

			//Set patch folder tempat menyimpan fotonya
			$path="images/".$fotobaru;

			//proses upload
			if(move_uploaded_file($tmp, $path)){
			
			$query="INSERT INTO siswa values('$no_induk','$nama','$alamat','$hobi','$fotobaru')";
			$hasil = mysqli_query($connect, $query);
			
			if($hasil){
				header("location:data.php");
			}else{
					echo"<br>Berhasil Menyimpan!";
				}
			}else{
					echo"<br>Gagal Menyimpan!";
				}
			}
?>