<!DOCTYPE html>

<html>
	<head>
		<title>crud_PHPSet</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	</head>
	
	</body>
	<?php require 'admin_menu.php'; ?>
		<div class="register-container row justify-content-center">
			<div class="register-user text-center col-md-4">
				<form class="register-form" method="POST" action="registerUser.php">
					<input type="text" class="form-control" name="firstname"placeholder="First Name"/>
					<input type="text" class="form-control" name="lastname" placeholder="Last Name"/>
					<input type="text" class="form-control" name="user" placeholder="User" />
					<input type="password" class="form-control" name="password" placeholder="Password" />
					<select class="form-control" name="type">
						<option value="" disabled selected> Type </option>
						<option value="1"> Manager </option>
						<option value="0"> User </option>
					</select>	
					<input type="text" class="form-control" name="birthday" placeholder="Birthday"/>
					<input type="text" class="form-control" name="cpf" placeholder="CPF"/>
					<input type="text" class="form-control" name="phone"placeholder="Phone"/>
					<input type="text" class="form-control" name="email" placeholder="Email"/>   					
					<input type="text" class="form-control" name="street"placeholder="Street"/>
					<input type="text" class="form-control" name="number" placeholder="Number"/>
					<input type="text" class="form-control" name="complement" placeholder="Address Complement"/>
					<input type="text" class="form-control" name="city" placeholder="City"/>  
					<input type="text" class="form-control" name="cep"placeholder="Cep"/>
					<input type="text" class="form-control" name="country" placeholder="Country"/> 
					<button class="btn btn-lg btn-primary btn-block" type="submit">OK</button>  
				</form>
			</div>
			
		</div>
	
	</body>
	
	

</html>
