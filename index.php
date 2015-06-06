<?php
	session_start();
	include "include/config.php";
	if(isset($_GET['logout'])){
		unset($_SESSION["logged"], $_SESSION["username"]);
	}
	if(!isset($_SESSION['logged'])) header("Location:login.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo Lintas Maya</title>
	<link rel="icon" href="assets/img/favicon.ico">
	<link rel="stylesheet" href="assets/css/fw/css/font-awesome.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="body-index">
	<header>
		<h6>Selamat Datang <b><?=$_SESSION['username'];?></b>&nbsp;| <a href="?logout">Logout</a></h6> 
	<nav>
			<ul>
				<li><a href="?page=produk"><i class="fa fa-shopping-cart"></i>&nbsp;Produk</a>
				<ul class="dd-bawah">
				<div class="clear"></div>
					<li><a href="?page=produk&produklm=hosting">Web Hosting</a></li>
					<li><a href="?page=produk&produklm=domain">Domain</a></li>
				</ul>
				</li>
				<li><a href="?page=pelanggan"><i class="fa fa-shopping-cart"></i>&nbsp;Pelanggan</a></li>
				<li><a href="?page=user"><i class="fa fa-group"></i>&nbsp;User / Admin</a></li>
			</ul>
		</nav>
	</header>

	<section class="content-index">
		<?php
			include "modules/index.php";
		?>
	</section>

</body>
</html>