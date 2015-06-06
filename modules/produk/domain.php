<?php
	if($_POST){
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$alamat = $_POST['alamat'];
		$kota = $_POST['kota'];
		$kode_pos = $_POST['kode_pos'];
		$no_telp = $_POST['no_telp'];

		if(!empty($nama) || !empty($email) || !empty($alamat) || !empty($kota) || !empty($kode_pos) || !empty($no_telp)){
			$Query = "INSERT INTO domain VALUES('$id','$nama','$email','$alamat','$kota','$kode_pos','$no_telp')" or die (mysql_error());
			$Result = mysql_query($Query);
			if($Result){
				$PesanDomain = "Berhasil";
			}
		}else{
			$PesanDomain = "Gagal";
		}
	}
?>


<select onchange="location = this.options[this.selectedIndex].value;" disabled>
 <option>Daftar Untuk Membeli Domain</option>
</select>
<form method="post" accept-charset="utf-8">
	<label for="nama">Nama</label>
	<td>:</td>
	<input type="text" name="nama" placeholder="Nama" id="nama"><br>
	<label for="email">Email</label>
	<td>:</td>
	<input type="email" name="email" placeholder="Email" id="email"><br>
	<label for="alamat">Alamat</label>
	<td>:</td>
	<input type="text" name="alamat" placeholder="Alamat" id="alamat"><br>
	<label for="kota">Kota</label>
	<td>:</td>
	<input type="text" name="kota" placeholder="Kota" id="kota"><br>
	<label for="kode_pos">Kode Pos</label>
	<td>:</td>
	<input type="text" name="kode_pos" placeholder="Kode Pos" id="kode_pos"><br>
	<label for="no_telp">Nomor Telepon</label>
	<td>:</td>
	<input type="text" name="no_telp" placeholder="Nomor Telepon" id="no_telp"><br><br>
	<button type="submit">Register</button><br>
	<?php echo $PesanDomain; ?>
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
    select{
    	margin-left: 30px;
    	width: 330px;
    }
</style>