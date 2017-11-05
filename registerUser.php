<?php
	try{
		$user = "root";
		$pass = "";
		
		$firstname= $_POST['firstname'];
		$lastname= $_POST['lastname'];
		$user = $_POST['user'];
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
		
		$conn = new PDO("mysql:host=localhost;dbname=crud_phpset", $user, $pass);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
		
		$query = "SELECT COUNT(*) from user where cpf='".$cpf."'";
		$result = $conn->query($query);
		
		$sql = "";
		
		if($result->rowcount() > 0){
			$sql = "UPDATE user SET firstname = '".$firstname."', lastname = '".$lastname."' , user = '".$user."', password = '".$password."' ,  type= '".$type."', birthday = '".$birthday."' , phone = '".$phone."', email = '".$email."', cpf = '".$cpf."', street = '".$street."', number = '".$number."', complement = '".$complement."', city = '".$city."', cep = '".$cep."', country = '".$country."' WHERE cpf = '".$cpf."'";
			$conn->exec(sql);
		}else {			
			$sql = "INSERT INTO user VALUES ('".$firstname."','".$lastname."','".$user."','".$password."','".$type."','".$birthday."','".$cpf."','".$phone."','".$email."','".$cpf."','".$street."', '".$number."', '".$complement."','".$city."','".$cep."', '".$country."')";
			$conn->exec($sql);
		}
	}
		
	catch(PDOException $e){
		echo $e->getMessage();
		die();
	}

?>