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
<body>
	<?php 
		require 'authentication.php';

		$check = checkUser();

		if ($check == 1) {
			include 'admin_menu.php';
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
