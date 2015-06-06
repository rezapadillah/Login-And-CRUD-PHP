<?php
	define('dbhost', 'localhost');
	define('dbuser', 'root');
	define('dbpass', '2008juno');
	define('dbname', 'bestcamp');

	$Connection = @mysql_connect(dbhost,dbuser,dbpass) or die ("Tidak Dapat Terkoneksi Ke Database");
	if($Connection) @mysql_select_db(dbname) or die ("Database Tidak Di Temukan");
?>