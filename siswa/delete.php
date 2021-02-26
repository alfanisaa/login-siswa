<?php
include "data.php";
if(isset($_GET["id"]))
{
	$id=$_GET["id"];

	$query="DELETE FROM siswa WHERE no_induk=$id";
	$hasil = mysqli_query(mysqli_connect("localhost","root","","rpl_12"), $query);
}
?>