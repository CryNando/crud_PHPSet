<?php

	try{
		$user = "root";
		$pass = "";
		
		$firstname= $_POST['firstname'];
		$lastname= $_POST['lastname'];
		$username = $_POST['user'];
		$password = $_POST['password'];
		$type = $_POST['type'];
		$birthday= $_POST['birthday'];
		$cpf= $_POST['cpf'];
		$phone= $_POST['phone'];
		$email= $_POST['email'];
		$street= $_POST['street'];
		$number= $_POST['number'];
		$complement= $_POST['complement'];
		$city= $_POST['city'];
		$cep= $_POST['cep'];
		$country= $_POST['country'];
		
		$conn = new PDO("mysql:host=localhost;dbname=crud_PHPSet", $user, $pass);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
		
		$query = "SELECT * FROM user where cpf='".$cpf."'";
		$result = $conn->query($query);
		
		$sql = "";
		
		if($result->rowCount() > 0){
			$sql = "UPDATE user SET
			firstname = '".$firstname."',
			lastname = '".$lastname."',
			username = '".$username."',
			password = '".$password."',
			type = '".$type."',
			birthday = '".$birthday."',
			phone = '".$phone."',
			email = '".$email."', 
			street = '".$street."',
			number = '".$number."',
			complement = '".$complement."',
			city = '".$city."',
			cep = '".$cep."',
			country = '".$country."'
			WHERE cpf = '".$cpf."'";
			$conn->exec($sql);
		}else {			
			$sql = "INSERT INTO user VALUES ('".$firstname."','".$lastname."','".$username."','".$password."','".$type."','".$birthday."','".$cpf."','".$phone."','".$email."','".$street."', '".$number."', '".$complement."','".$city."','".$cep."', '".$country."')";
			$conn->exec($sql);
		}
	}
		
	catch(PDOException $e){
		echo $e->getMessage();
		die();
	}

?>
