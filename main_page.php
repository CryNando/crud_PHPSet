<?php if(!isset($_SESSION)){
    session_start();
} ?>
<!DOCTYPE html>
<html>
<head>
	<title>crud_PHPSet</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="withBG">
	<?php 
		require 'authentication.php';

		$check = checkUser();

		if ($check == 1) {
			include 'admin_menu.php';
			echo "<div class='welcome'>";
			echo "<p>Welcome to CRUD_PHPSET. Click in menu and select desired option<p/>";
			echo "<p>Add/Update when you want add or alter clients data</p>";
			echo "<p>Show Clients when you want see all clients registered</p>";
			echo "</div>";
		}
		elseif ($check == 0) 
			require 'client_page.php';
			
		else {
			echo "<p>User not found!</p>"; // or user/password incorrect ...
			// maybe create a button to go back to Login page?
		}
		
	?>
	
</body>
</html>
