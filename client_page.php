<?php session_start() ?>
<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8"/>
		<title>crud_PHPSet</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	</head>
	<body>
	<div id="sidebar-wrapper">
		<ul class="sidebar-nav">
			<li>
				<a href="index.html">Logout</a>
			</li>
		</ul>
	</div>
	<?php 
		try {
		
			$cpf = $_SESSION['cpf'];
		
			$user = "root";
			$pass = "";

			$conn = new PDO("mysql:host=localhost;dbname=crud_PHPSet", $user, $pass);
	                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$query = "SELECT * FROM user where cpf ='".$cpf."'";
			$res = $conn->query($query);

			$cli = $res->fetch(PDO::FETCH_ASSOC);

			// show content in the FORM
		?>
		
		<div class="register-container row justify-content-center">
			<div class="register-user text-center col-md-4">
				<form class="register-form" method="POST" action="registerUser.php">
				<input type="text" class="form-control" name="firstname" placeholder="First Name"  value="<?php echo $cli['firstname']; ?>" >
				<input type="text" class="form-control" name="lastname" placeholder="Last Name" value="<?php echo $cli['lastname']; ?>"/>
				<input type="text" class="form-control" name="user" placeholder="User" value="<?php echo $cli['user']; ?>" />
					<input type="password" class="form-control" name="password" placeholder="Password" />
					<select class="form-control" name="type">
						<option value="" disabled selected> Type </option>
						<?php if ($cli['type'] == 1) { ?>
							<option value="1" selected> Manager </option>
							<option value="0"> User </option>
						<?php } else { ?>
							<option value="1"> Manager </option>
							<option value="0" selected> User </option>
						<?php } ?>
					</select>	
					<input type="text" class="form-control" name="birthday" placeholder="Birthday" value="<?php echo $cli['birthday']; ?>"/>
					<input type="text" class="form-control" name="cpf" placeholder="CPF" value="<?php echo $cli['cpf']; ?>"/>
					<input type="text" class="form-control" name="phone"placeholder="Phone" value="<?php echo $cli['phone']; ?>"/>
					<input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $cli['email']; ?>"/>   					
					<input type="text" class="form-control" name="street"placeholder="Street" value="<?php echo $cli['street']; ?>"/>
					<input type="text" class="form-control" name="number" placeholder="Number" value="<?php echo $cli['number']; ?>"/>
					<input type="text" class="form-control" name="complement" placeholder="Address Complement" value="<?php echo $cli['complement']; ?>"/>
					<input type="text" class="form-control" name="city" placeholder="City" value="<?php echo $cli['city']; ?>"/>  
					<input type="text" class="form-control" name="cep"placeholder="Cep" value="<?php echo $cli['cep']; ?>"/>
					<input type="text" class="form-control" name="country" placeholder="Country" value="<?php echo $cli['country']; ?>"/> 
					<button class="btn btn-lg btn-primary btn-block" type="submit">OK</button>  
				</form>
			</div>
			
		</div>

		<?php

		} catch (PDOException $e) {
			$e->getMessage();
			die();
		}
	?>		
	</body>
</html>
