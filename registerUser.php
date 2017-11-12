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
			$output= "User Updated!";

		}else {			
			$sql = "INSERT INTO user VALUES ('".$firstname."','".$lastname."','".$username."','".$password."','".$type."','".$birthday."','".$cpf."','".$phone."','".$email."','".$street."', '".$number."', '".$complement."','".$city."','".$cep."', '".$country."')";
			$conn->exec($sql);
			$output= "User Added!";
		}
	}
		
	catch(PDOException $e){
		echo $e->getMessage();
		die();
	}

?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8"/>
		<title>crud_PHPSet</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	</head>
	<body>
		<div class="container">
			<div class="text-center">
			<h2 class=""><?php echo $output ?></h2>
			<?php 
				$back_link = "";
				if ($type == 1) 
					$back_link = "register_or_update.php";
				else
					$back_link = "client_page.php";
				
			?> 
				<a href="<?php echo $back_link; ?>" class="btn btn-info" role="button">Voltar</a>
			</div>
		</div>
	</body>
</html>
