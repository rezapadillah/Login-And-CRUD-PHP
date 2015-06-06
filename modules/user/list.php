<?php
	$Query = mysql_query("SELECT * FROM admin");
?>
	<a href="?page=user&aksi=add" class="add-admin"><i class="fa fa-plus-square-o"></i>&nbsp;&nbsp;Tambah User</a><br><br><br><br>
	<table class="list-admin">
		<tr>
			<th>#</th>
			<th>Username</th>
			<th>Password Enkripsi MD5</th>
			<th>Aksi</th>

		</tr>
<?php
	$nomor=0;
	while($Data = mysql_fetch_array($Query)){
	$nomor++;	
?>
		<tr>
			<td><?=$nomor;?></td>
			<td><?=$Data['username'];?></td>
			<td><?=$Data['password'];?></td>
			<td><a href="?page=user&aksi=edit&id=<?=$Data['id'];?>" class="aksi-list-admin"><i class="fa fa-pencil-square-o"></i></a>|<a href="?page=user&aksi=delete&id=<?=$Data['id'];?>" onclick="return confirm('Apakah Yakin Ingin Menghapus User Ini')" class="aksi-list-admin"><i class="fa fa-trash-o"></i></a></td>
		</tr>
<?php
	}
?>

	</table>


<style type="text/css" media="screen">
	.list-admin{
		border-collapse: collapse;;
		font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		margin-left: 10px;
		margin-top: 15px;
	}
	.list-admin th{
		padding: 10px 10px;
		border: 1px solid #e0dbdb;
		background: #3498DB;
		color: #fff;
	}
	.list-admin td{
		padding: 10px 10px;
		border: 1px solid #e0dbdb;
	}
	.add-admin{
		text-decoration: none;
		color: #333;
		background-color: #fff;
		border: 1px solid #ccc;
		padding: 10px 10px;
		margin-top: 25px;
		border-radius: 2px;
		font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		float: left;
		margin-left: 10px;
	}
	.add-admin:hover{
		background: #E6E6E6;
		transition:0.6s;
	} 	
	.aksi-list-admin{
		font-size: 20px;
		color: #000;
		font-weight: bold;
	}
	.aksi-list-admin:hover{
		transition:0.6s;
		text-shadow: 0 1px #000;
	}
	tr:hover{
		background: #66ade8;
		color: #fff;
		cursor: pointer;
	}
</style>