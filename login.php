<?php
	session_start();
	include "include/config.php";
	if(isset($_POST["login"])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$Query = "SELECT * FROM admin WHERE username='".$username."' LIMIT 1";
		$Result = mysql_query($Query);
		if(mysql_num_rows($Result)>0){
			$Object = mysql_fetch_object($Result);
			if(md5($password) == $Object->password){
				$_SESSION["logged"] = true;
				$_SESSION["username"] = $username;
				header("Location:index.php");
			}else{
				$PesanLogin = "<p class=not-login>Username Atau Password Salah !</p>";
			}
		}else{
			$PesanLogin = "<p class=not-login>Username <b>$username</b> Not Found !</p>";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login Page</title>
	<link rel="icon" href="assets/img/favicon.ico">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/fw/css/font-awesome.css">
</head>
<body class="body-login">
	<section class="content">
	<div class="header-login">
		<img src="assets/img/exit.png" class="exit">
		<p class="title-login">login page bestcamp multimedia</p>
	</div>
		<form action="" method="POST" accept-charset="utf-8" class="form-login">
			<label for="username">Username :</label>&nbsp;
			<input type="text" name="username" placeholder="username" id="username"><br>
			<label for="password">Password &nbsp;:</label>&nbsp;
			<input type="password" name="password" placeholder="password"><br><br>
			<button type="submit" name="login"><i class="fa fa-sign-in"></i>&nbsp;Login</button><br>
			<?php
				echo @$PesanLogin;
			?>
		</form>
	</section>
	<footer>
		<img src="assets/img/bestcamp.png" class="logo">
		<p class="copyright">Copyright &copy; 2014 PT. Bestcamp Multimedia</p>
	</footer>
</body>
</html>