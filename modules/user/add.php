<?php
	if(isset($_POST['adduser'])){
		$id       = $_POST['id'];
		$username = $_POST['username'];
		$password = md5($_POST['password']);

		$Perintah = "INSERT INTO admin VALUES('$id','$username','$password')" or die (mysql_error());
		$Result = mysql_query($Perintah) or die (mysql_error());
		if($Result){
			echo "Berhasil";
		}else{
			echo "Gagal";
		}
	}
?>

<form method="POST" accept-charset="utf-8">
	<label for="username">username :</label>
	<input type="text" name="username" placeholder="Nama username" id="username"><br>
	<label for="password">Password :</label>
	<input type="password" name="password" placeholder="Password Anda" id="password"><br>
	<button type="submit" name="adduser">Simpan</button>
</form>