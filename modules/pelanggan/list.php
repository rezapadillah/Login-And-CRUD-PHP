<?php
	$Query = mysql_query("SELECT * FROM pelanggan");
?>

<a href="?page=pelanggan&aksi=add" class="add-pel"><i class="fa fa-plus-square-o"></i>&nbsp;&nbsp;Tambah Pelanggan</a>
<br class="clear">
<table class="list-pel">
	<tr>
		<th>#</th>
		<th>Nama Pelanggan</th>
		<th>Perusahaan</th>
		<th>Tingkat Pelanggan</th>
		<th>NPWP Perusahaan</th>
		<th>Alamat</th>
		<th>Bulanan</th>
		<th>Aksi</th>
	</tr>

<?php
	$nomor=0;
	while($Data = mysql_fetch_array($Query)){
	$nomor++;
?>

	<tr>
		<td><?=$nomor;?></td>
		<td><?=$Data['nama_plg'];?></td>
		<td><?=$Data['nama_perusahaan_plg'];?></td>
		<td><?=$Data['group_perusahaan_plg'];?></td>
		<td><?=$Data['npwp_perusahaan_plg'];?></td>
		<td><?=$Data['alamat_plg'];?></td>
		<td><?=$Data['bulanan'];?></td>
		<td><a href="?page=pelanggan&aksi=edit&id_plg=<?php echo $Data['id_plg'];?>" class="aksi-list-pel"><i class="fa fa-pencil-square-o"></i></a> | <a href="?page=pelanggan&aksi=delete&id_plg=<?php echo $Data['id_plg'];?>" class="aksi-list-pel" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini !');"><i class="fa fa-trash-o"></i></a></td>
	</tr>

<?php
	}
?>
</table>

<style type="text/css" media="screen">
	.list-pel{
		border-collapse: collapse;;
		font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		margin-left: 10px;
		margin-top: 15px;
	}
	.list-pel th{
		padding: 10px 10px;
		border: 1px solid #e0dbdb;
		background: #3498DB;
		color: #fff;
	}
	.list-pel td{
		padding: 10px 10px;
		border: 1px solid #e0dbdb;
	}
	.aksi-list-pel{
		font-size: 20px;
		color: #000;
		font-weight: bold;
	}
	.aksi-list-pel:hover{
		transition:0.6s;
		text-shadow: 0 1px #000;
	}
	.add-pel{
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
	.add-pel:hover{
		background: #E6E6E6;
		transition:0.6s;
	}
	.clear{
		clear: both;
	}
	.fa-plus-square-o{
		font-size: 20px;
	}
	tr:hover{
		background: #66ade8;
		color: #fff;
		cursor: pointer;
	}
</style>