<?php
	include "koneksi.php";
	$id_user = $_POST['id_user'];
	$password = $_POST['password'];

$login = mysqli_query($connect, "SELECT * FROM user WHERE id_user = '$id_user' AND password='$password'");
$row=mysqli_fetch_array($login);

if ($row['id_user'] == $id_user AND $row['password'] == $password )
{
	session_start();
	$_SESSION['id_user'] = $row['id_user'];
	$_SESSION['[password'] = $row['password'];
?>
	<script language="JavaScript">
			alert('Akses Diterima');
			document.location="data.php";
	</script>
<?php	
}else
{
	?>
	<script languange="JavaScript">
			alert('ID atau Password tidak sesuai, Silahkan diulang kembali!');
			document.location="index.php";
	</script>
	<?php
}
?>
