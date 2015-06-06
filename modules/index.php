<?php
	$page = $_GET['page'];
		switch($page){
			default:
			include "modules/pelanggan/index.php";
			break;

			case 'user':
			include "modules/user/index.php";
			break;

			case 'produk':
			include "modules/produk/index.php";
			break;
	}
?>