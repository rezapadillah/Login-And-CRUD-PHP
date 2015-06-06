<?php
	$id = $_GET['id'];
	$Perintah = "DELETE FROM admin WHERE id='$id'";
	$Result = mysql_query($Perintah) or die (mysql_error());
	if($Result){
		echo "Berhasil !";
	}else{
		echo "Gagal";
	}
	include "list.php";
?>