<?php if(empty($_GET["produklm"])){ ?>
<select class="indexproduk" onchange="location = this.options[this.selectedIndex].value;">
 <option>- Pilih Produk -</option>
 <option value="?page=produk&produklm=domain">domain</option>
 <option value="?page=produk&produklm=hosting">hosting</option>
</select>
<?php } ?><br>

<?php
	$produklm = $_GET['produklm'];
		switch($produklm){
			case 'domain':
				include "domain.php";
				break;

			case 'hosting':
				include "hosting.php";
				break;
		}
?>

<style type="text/css" media="screen">
	label{
		font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	}
	.indexproduk{
		padding: 5px 10px;
		margin-top: 50px;
		margin-left: 50px;
		padding: 10px 45px;
	}
</style>