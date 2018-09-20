<?php
/* Connection settings that connect to database */
	$host = 'coob2.worcestercomputing.com';
	$dbname = 'dvkglyyn_FFA';
	$user = 'dvkglyyn_FFA';
	$pass = "_Z7k(:(6d2%w'W3k";
/* Database connection */
	try {
		$DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
	}
	catch(PDOException $e) {
		echo $e->getMessage();
	}
?>
