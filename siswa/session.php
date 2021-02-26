<?php
	session_start();
	if(empty($_SESSION['id_user']))
	{

?>
	<script >
			alert("Silakan Login Terlebih Dahulu");
			document.location="index.php";
	</script>
<?php
	}
?>