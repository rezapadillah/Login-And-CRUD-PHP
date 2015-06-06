<?php
	if(isset($_POST["addpelanggan"])){
		$id_plg               = $_POST["id_plg"];
		$tanggal              = $_POST["tanggal"];
		$no_form_plg          = $_POST["no_form_plg"];
		$nama_plg             = $_POST["nama_plg"];
		$jenis_kelamin_plg    = $_POST["jenis_kelamin_plg"];
		$nama_perusahaan_plg  = $_POST["nama_perusahaan_plg"];
		$jabatan_plg          = $_POST["jabatan_plg"];
		$tingkat_plg          = $_POST["tingkat_plg"];
		$group_perusahaan_plg = $_POST["group_perusahaan_plg"];
		$npwp_perusahaan_plg  = $_POST["npwp_perusahaan_plg"];
		$bulanan			  = $_POST["bulanan"];
		$alamat_plg           = $_POST["alamat_plg"];
		$kota_provinsi_plg 	  = $_POST["kota_provinsi_plg"];
		$kode_pos_plg         = $_POST["kode_pos_plg"];
		$no_telp_plg          = $_POST["no_telp_plg"];
		$email                = $_POST["email"];
		$no_fax_plg           = $_POST["no_fax_plg"];
		$website              = $_POST["website"];


		if(!empty($tanggal) || !empty($nama_plg) || !empty($nama_perusahaan_plg) || !empty($tingkat_plg) || !empty($group_perusahaan_plg) || !empty($npwp_perusahaan_plg) || !empty($alamat_plg) || !empty($kota_provinsi_plg) || !empty($no_telp_plg) || !empty($no_fax_plg) || !empty($no_form_plg) || !empty($jenis_kelamin_plg) || !empty($jabatan_plg) || !empty($kode_pos_plg) || !empty($email) || !empty($website))
		{
		$Perintah = "INSERT INTO pelanggan VALUES('$id_plg','$tanggal','$nama_plg','$nama_perusahaan_plg','$tingkat_plg','$group_perusahaan_plg','$npwp_perusahaan_plg','$bulanan','$alamat_plg','$kota_provinsi_plg','$no_telp_plg','$no_fax_plg','$no_form_plg','$jenis_kelamin_plg','$jabatan_plg','$kode_pos_plg','$email','$website')" or die (mysql_error());
		$Result = mysql_query($Perintah);
		
		if($Result){
			$Pesan = "<p class=error-record>Data Berhasil Di Tambahkan</p>";
		}else
			$Pesan = "<p class=error-record>Data Gagal Di Tambahkan</p>";
	}else{
		$Pesan = "<p class=error-record>Data Harus Di Isi Dengan Lengkap !</p>";
	}
}	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Form Add Pelanggan</title>
	<link rel="stylesheet" href="fw/css/font-awesome.css">
</head>
<body>
	<form action="" method="POST" name="fValidate">
	<table border="1" class="form-add">
	
	<tr>
		<td>
			<label for="Tanggal"> Tanggal&nbsp;<i class="danger-notif-form">*)</i> </label>
			: &nbsp;<input type="date" name="tanggal" placeholder="" id="Tanggal">
		</td>
		<td>
			<label for="no_form_plg"> No. Form&nbsp;<i class="danger-notif-form">*)</i> </label>
			: &nbsp;<input type="number" name="no_form_plg" placeholder="No. Form" id="no_form_plg">
		</td>
	</tr><br>
	<tr>
		<td>
			<label for="nama_plg"> Nama&nbsp;<i class="danger-notif-form">*)</i></label>
			: &nbsp;<input type="text" name="nama_plg" placeholder="Nama Pelanggan" id="nama_plg">
		</td>
		<td>
			<label for="jenis_kelamin_plg"> Jenis Kelamin&nbsp;<i class="danger-notif-form">*)</i> </label>
			: &nbsp;<select name="jenis_kelamin_plg">
				<option>&laquo; Pilih Jenis Kelamin &raquo;</option>
				<option value="Laki-laki">Laki-laki</option>
				<option value="Perempuan">Perempuan</option>
			</select>
		</td>
	</tr><br>
	<tr>
		<td>
			<label for="nama_perusahaan_plg"> Nama Perusahaan/Institusi&nbsp;<i class="danger-notif-form">*)</i> </label>
			: &nbsp;<input type="text" name="nama_perusahaan_plg" placeholder="Nama Perusahaan" id="nama_perusahaan_plg">
		</td>
		<td>
			<label for="Jabatan"> Jabatan&nbsp;<i class="danger-notif-form">*)</i> </label>
			: &nbsp;<input type="text" name="jabatan_plg" placeholder="Jabatan" id="Jabatan">
		</td>
	</tr><br>
	<tr>
		<td>
			<label for="Tingkat"> Tingkat&nbsp;<i class="danger-notif-form">*)</i> </label>
			: &nbsp;<select name="tingkat_plg">
				<option>&laquo; Pilih Tingkat &raquo;</option>
				<option value="Kantor Pusat">Kantor Pusat</option>
				<option value="Kantor Cabang">Kantor Cabang</option>
			</select>
		</td>
		<td>
			<label for="group perusahaan"> Group Perusahaan&nbsp;<i class="danger-notif-form">*)</i> </label>
			: &nbsp;<input type="text" name="group_perusahaan_plg"  id="group perusahaan" placeholder="Nama Group Perusahaan">
		</td>
	</tr>	
	<tr>
		
	</tr>
	<tr>
		<td>
			<label for="npwp_perusahaan"> NPWP Perusahaan&nbsp;<i class="danger-notif-form">*)</i> </label>
			: &nbsp;<input type="text" name="npwp_perusahaan_plg"  id="npwp_perusahaan" placeholder="NPWP Perusahaan">
		</td>

		<td>
			<label for="bulanan">Bulanan&nbsp;<i class="danger-notif-form">*)</i> </label>
			: &nbsp;<input type="text" name="bulanan"  id="bulanan" placeholder="Bulanan">
		</td>
	</tr>
	<tr>
		<td>
			<label for="alamat_plg"> Alamat</label>
			: &nbsp;<input type="text" name="alamat_plg"  id="alamat_plg" placeholder="Alamat Pelanggan">
		</td>
		<td>
			<label for="kota_provinsi_plg">Kota / Provinsi&nbsp;<i class="danger-notif-form">*)</i> </label>
			: &nbsp;<input type="text" name="kota_provinsi_plg" placeholder="Kota Atau Provinsi" id="kota_provinsi_plg">
		</td>
	</tr>
	<tr>
		<td>
			<label for="no_telp">No. Telp&nbsp;<i class="danger-notif-form">*)</i> </label>
			: &nbsp;<input type="text" name="no_telp_plg" placeholder="Nomor Telepon" id="no_telp">
		</td>
		<td>
			<label for="kode_pos_plg"> Kode Pos&nbsp;<i class="danger-notif-form">*)</i> </label>
			: &nbsp;<input type="text" name="kode_pos_plg" placeholder="Kode Pos" id="kode_pos_plg">
		</td>
	</tr>
	<tr>
		
		<td>
			<label for="email_plg">Email&nbsp;<i class="danger-notif-form">*)</i> </label>
			: &nbsp;<input type="text" name="email" placeholder="Email" id="email_plg">
		</td>

		<td>
			<label for="no_fax_plg">No. Fax&nbsp;<i class="danger-notif-form">*)</i> </label>
			: &nbsp;<input type="text" name="no_fax_plg" placeholder="Nomor Fax" id="no_fax_plg">
		</td>
	</tr>
	<tr>
		<td>
			<label for="website_plg">Website&nbsp;<i class="danger-notif-form">*)</i> </label>
			: &nbsp;<input type="text" name="website" placeholder="Website" id="website_plg">
		</td>
		<td>
			<h4 class="notif-diisi"><i class="danger-notif">*)</i> Bintang Wajib Di Isi Tidak Boleh Kosong</h4>
		</td>
	</tr>
	</table>
	<button type="submit" name="addpelanggan" class="submit-pel"><i class="fa fa-download"></i>&nbsp;Insert</button>
	<button type="reset" class="submit-pelbatal"><i class="fa fa-undo"></i>&nbsp;Reset</button>
	<a href="?page=pelanggan" class="view-pel"><i class="fa fa-eye"></i>&nbsp;Lihat Data Pelanggan</a><?php echo $Pesan;?>
</form>

</body>
</html>


<style type="text/css" media="screen">
	.form-add{
		font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		margin-left: 150px;
		padding: 10px;
		border: 1px solid #ccc;
		margin-top: -35px;
	}
	.form-add label{
		cursor: pointer;
		float: left;	
		margin-left: 10px;
		padding: 5px 5px;
		width: 250px;
	}
	.form-add tr{
		margin-top: 100px;
		margin-left: 100px;
		padding: 100px;
	}
	.form-add tr td{
		border: 1px solid #ccc;
		border-collapse: collapse;
		text-align: left;
		padding: 5px 5px;

	}
	.form-add input{
		padding: 5px 5px;
	}
	.form-add input[type="radio"]{
		margin-top: 10px;
	}
	.submit-pel{
		color: #fff;
		background-color: #5cb85c;
		border: 1px solid #4cae4c;
		outline: none;
		padding: 10px 15px;
		font-size: 16px;
		cursor: pointer;
		border-radius: 2px;
		margin-left: 150px;
		margin-top: 15px;
	}
	.submit-pel:hover{
		background: #449D44;
		transition:0.6s;
	}
	.submit-pelbatal{
		color: #fff;
		background-color: #d9534f;
		border: 1px solid #d43f3a;
		outline: none;
		padding: 10px 15px;
		font-size: 16px;
		cursor: pointer;
		border-radius: 2px;
		margin-left: 10px;
	}
	.submit-pelbatal:hover{
		background: #C9302C;
		transition:0.6s;
	}
	.error-record{
		font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		color: #fff;
		background-color: #ec971f;
		border: 1px solid #d58512;
		outline: none;
		padding: 9px 15px;
		font-size: 16px;
		cursor: pointer;
		border-radius: 2px;
		width: 250px;
		text-align: center;
		float: right;
		margin-right: 506px;
	}
	.error-record:hover{
		background: #F0AD4E;
		transition:0.6s;
	}
	.view-pel{
		color: #fff;
		background-color: #31b0d5;
		border: 1px solid #269abc;
		outline: none;
		padding: 9px 15px;
		font-size: 16px;
		cursor: pointer;
		border-radius: 2px;
		font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		text-decoration: none;
		margin-left: 10px;	
	}
	.view-pel:hover{
		background: #269abc;
		transition:0.6s;
	}
	.danger-notif-form{
		color: red;
		font-size: 15px;
		font-weight: bold;
	}
	.td-notif{
		border: none;
	}
	.notif-diisi{
		font-size: 10px;
		margin-left: 10px;
		color: red;
		font-weight: bold;
	}
	.danger-notif-form{
		color: red;
		font-size: 15px;
		font-weight: bold;
	}
</style>