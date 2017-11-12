<?php 

	$host = "localhost";
	$user = "root";
	$pass = "";

	try {
	
		$conn = new PDO("mysql:host=$host", $user, $pass);		
		$conn->exec("CREATE DATABASE crud_phpset");
		
		echo("DATABASE CREATED SUCCESSFULLY");

	} catch (PDOException $e) {
		$e->getMessage();
		die();
	}
	

?>
