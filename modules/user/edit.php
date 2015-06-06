<?php
	$id = $_GET['id'];

	if($_POST){
		$username 		  = $_POST['username'];
		$password 		  = $_POST['password'];
		$password_confirm = $_POST['password_confirm'];
		$Error 	 		  = false;
		$UpdatePassword   = '';

		if(!empty($password) || !empty($password_confirm)){
			if($password!=$password_confirm){
				$Error = true;
				$Pesan['password_confirm'] = "Password Konfirmasi Tidak Sama!";
			}else{
				$password       = md5($password);
				$UpdatePassword = "password='".$password."',";
			}
		}

		if(empty($username)){
			$Error = true;
			$Pesan['username'] = "Username Tidak Boleh Kosong!";
		}

		$Perintah = "UPDATE admin SET ".$UpdatePassword." username='".$username."' WHERE id='".$id."' LIMIT 1";

		if(!$Error){
			$Hasil = mysql_query($Perintah) or die (mysql_error());
		}

		if($Hasil){
			echo "Username <strong>$username</strong> Berhasil Di Ubah!";
		}else{
			echo "Username <strong>$username</strong> Gagal Di Ubah!<br><br>".implode("<br>", $Pesan)."";
		}
	}
	
	$Resultuser = "SELECT * FROM admin WHERE id='".$id."'";
	$ReusltHasil = mysql_query($Resultuser);
	$Data = mysql_fetch_array($ReusltHasil);
?>

<form method="POST" accept-charset="utf-8">
	<label for="username">username :</label>
	<input type="text" name="username" placeholder="Nama username" id="username" value="<?php echo $Data['username']; ?>"><br>
	<label for="password">Password :</label>
	<input type="password" name="password" placeholder="Password Anda" id="password"><br>
	<label for="password_confirm">Password(Konfirmasi)</label>
	<input type="password" name="password_confirm" id="password_confirm" placeholder="Password Anda"><br class="clear">
	<button type="submit">Simpan</button>
</form>