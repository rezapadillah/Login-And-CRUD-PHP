<?php
	if($_POST){
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$tanggal_beli = $_POST['tanggal_beli'];
		$alamat = $_POST['alamat'];
		$kota = $_POST['kota'];
		$no_telp = $_POST['no_telp'];
		$paket = $_POST['paket'];

		if(!empty($nama) || !empty($email) || !empty($tanggal_beli) || !empty($alamat) || !empty($kota) || !empty($no_telp) || !empty($paket)){
			$Query = "INSERT INTO hosting VALUES('$id','$nama','$email','$tanggal_beli','$alamat','$kota','$no_telp','$paket')" or die (mysql_error());
			$Result = mysql_query($Query);
			if($Result){
				$PesanHosting = "Berhasil";
			}
		}else{
			$PesanHosting = "Gagal";
		}
	}
?>

<select class="topselect" onchange="location = this.options[this.selectedIndex].value;" disabled>
 <option>Daftar Untuk Membeli Paket Hosting</option>
</select>
<form method="post" accept-charset="utf-8">
	<label for="nama">Nama</label>
	<td>:</td>
	<input type="text" name="nama" placeholder="Nama" id="nama"><br>
	<label for="email">Email</label>
	<td>:</td>
	<input type="text" name="nama" placeholder="Nama" id="nama"><br>
	<label for="tanggal">Tanggal</label>
	<td>:</td>
	<input type="date" name="tanggal_beli" id="tanggal"><br>
	<label for="alamat">Alamat</label>
	<td>:</td>
	<input type="text" name="alamat" placeholder="Alamat" id="alamat"><br>
	<label for="kota">Kota</label>
	<td>:</td>
	<input type="text" name="kota" placeholder="Kota" id="kota"><br>
	<label for="no_telp">Nomor Telepon</label>
	<td>:</td>
	<input type="text" name="no_telp" placeholder="Nomor Telepon" id="no_telp"><br><br>
	<label for="paket">Paket Internet</label>
	<td>:</td>
	<select  name="paket" id="paket">
		<option>- Pilih Paket -</option>
		<option value="512 K">512 K</option>
		<option value="1024 MB">1024 MB</option>
		<option value="2048 MB">2048 MB</option>
	</select><br><br>
	<button type="submit">Register</button><br>
	<?php echo $PesanHosting;?>
</form>

<style type="text/css" media="screen">
	form{
		font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		padding-left: 30px;
	}
    label{
    	width: 130px;
    	float: left;
    	margin-top: 15px;
    }
    input{
    	margin-top: 15px;
    	padding: 5px 10px;
    	border: 1px solid #ccc;
    }
    input:focus{
    	border:1px solid #428BCA;
    	outline: none;
    }
    button{
    	cursor: pointer;
    }
    .topselect{
    	margin-left: 30px;
    	width: 330px;
    }
</style>