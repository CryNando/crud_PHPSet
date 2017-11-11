<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8"/>
		<title>crud_PHPSet</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	</head>
	
	<body>
	<?php 

		require 'admin_menu.php'; 

		try{
			$user = "root";
			$pass = "";

			$conn = new PDO("mysql:host=localhost;dbname=crud_PHPSet", $user, $pass);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$query = "SELECT * FROM user;";
			$clients = $conn->query($query);

			echo "<div class='show-clients-container'>";
			echo "<h3>--- Clients ---</h3><br/>";
			while ($cli = $clients->fetch(PDO::FETCH_ASSOC)) {
				echo "<p>First Name: ".$cli['firstname']."</p>";
				echo "<p>Last Name: ".$cli['lastname']."</p>";
				echo "<p>Username: ".$cli['username']."</p>";
				echo "<p>Birthday: ".$cli['birthday']."</p>";
				echo "<p>CPF: ".$cli['cpf']."</p>";
				echo "<p>Phone: ".$cli['phone']."</p>";
				echo "<p>Email: ".$cli['email']."</p>";
				echo "<p>Street: ".$cli['street']."</p>";
				echo "<p>Number: ".$cli['number']."</p>";
				echo "<p>Complement: ".$cli['complement']."</p>";
				echo "<p>City: ".$cli['city']."</p>";
				echo "<p>CEP: ".$cli['cep']."</p>";
				echo "<p>Country: ".$cli['country']."</p><br/><br/>";
			}
			echo "</div>";

		} catch (PDOException $e) {
			echo $e->getMessage();
			die();
		}


	?>	
	</body>
	

</html>
