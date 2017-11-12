<?php
		try{
			$user = "root";
			$pass = "";

			$conn = new PDO("mysql:host=localhost;dbname=crud_PHPSet", $user, $pass);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			$sql = "INSERT INTO `user` 
			VALUES ('Admin','Admin','admin','admin',1,'11/11/1111','111.111.111-11','(11)1111-1111', 'admin@gmail.com', 'Admin Street' , 10, 'Nope', 'New York', '11111-111', 'USA')";

			 $conn -> exec($sql);
			 
			 echo("INSERTED SUCCESSFULLY");

		}catch (PDOException $e) {
			echo $e->getMessage();
			die();
		}

?>