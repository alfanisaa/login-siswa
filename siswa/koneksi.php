<?php
 
$host="localhost";
$username="root";
$password="";
$database="rpl_12";

$connect=mysqli_connect($host,$username,$password,$database);
	if($connect) {
	//	echo "SELAMAT!";
		}else{
		echo "connect gagal!!!";
		}
?>