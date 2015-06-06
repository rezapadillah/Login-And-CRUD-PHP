<?php
	include "include/config.php";
	$id_plg = $_GET['id_plg'];

	$Perintah = "DELETE FROM pelanggan WHERE id_plg='$id_plg'";
	$Result = mysql_query($Perintah);

	if($Result){
		echo "Berhasil";
	}else{
		echo "Gagal !";
	}

	include "list.php";
?>