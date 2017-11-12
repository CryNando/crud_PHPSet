<?php
		try{
			$user = "root";
			$pass = "";

			$conn = new PDO("mysql:host=localhost;dbname=crud_PHPSet", $user, $pass);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			$sql = "CREATE TABLE user
			(firstname varchar(30) NOT NULL, 
			 lastname varchar(30) NOT NULL, 
			 username varchar(16) NOT NULL, 
			 password varchar(16) NOT NULL, 
			 type int NOT NULL, 
			 birthday varchar(16) NOT NULL, 
			 cpf varchar(16) NOT NULL, 
			 phone varchar(16) NOT NULL, 
			 email varchar(50) NOT NULL, 
			 street varchar(100) NOT NULL, 
			 number int NOT NULL, 
			 complement varchar(50), 
			 city varchar(50) NOT NULL,
			 cep varchar(16) NOT NULL,
			 country varchar(30) NOT NULL, 
			 PRIMARY KEY(cpf))";
			 $conn -> exec($sql);
			 
			 echo("TABLE CREATED SUCCESSFULLY");

		}catch (PDOException $e) {
			echo $e->getMessage();
			die();
		}

?>