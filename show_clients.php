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
			echo "<table class='table'>";
			echo "<thead>";
			echo "<tr>";
			echo "<th>Firstname</th>";
			echo "<th>Lastname</th>";
			echo "<th>Username</th>";
			echo "<th>Birthday</th>";
			echo "<th>CPF</th>";
			echo "<th>Phone</th>";
			echo "<th>Email</th>";
			echo "<th>Street</th>";
			echo "<th>Number</th>";
			echo "<th>Complement</th>";
			echo "<th>City</th>";
			echo "<th>CEP</th>";
			echo "<th>Country</th>";
			echo "</tr>";
			echo "</thead><tbody>";

			while ($cli = $clients->fetch(PDO::FETCH_ASSOC)) {
				echo "<tr>";
				echo "<td>".$cli['firstname']."</td>";
				echo "<td>".$cli['lastname']."</td>";
				echo "<td>".$cli['username']."</td>";
				echo "<td>".$cli['birthday']."</td>";
				echo "<td>".$cli['cpf']."</td>";
				echo "<td>".$cli['phone']."</td>";
				echo "<td>".$cli['email']."</td>";
				echo "<td>".$cli['street']."</td>";
				echo "<td>".$cli['number']."</td>";
				echo "<td>".$cli['complement']."</td>";
				echo "<td>".$cli['city']."</td>";
				echo "<td>".$cli['cep']."</td>";
				echo "<td>".$cli['country']."</td></tr>";
			}
			echo "</div>";

		} catch (PDOException $e) {
			echo $e->getMessage();
			die();
		}


	?>	
	</body>
	

</html>
