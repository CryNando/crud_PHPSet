<?php
	// Developed by Rogerio T. H   rogeriotakashi@hotmail.com
	// Using XAMPP (Apache + mysql)
	// Database default user and pass from mysql
	// To Do List:
	// Encrypt password
	// Redirect user biased on his access level
function checkUser() {


	try {
		$user = "root";
		$pass = "";


		// Get Username and Password from method POST
		$username= $_POST['username'];
		$password= $_POST['password'];



		// Connection
	    $dbh = new PDO('mysql:host=localhost;dbname=crud_PHPSet', $user, $pass);
	    //$query = "SELECT COUNT(*) from user where user='".$username."' AND password='".$password."'";
	    $query = "SELECT * FROM user where user='".$username."' AND password='".$password."'";
	    $result = $dbh->query($query);



	    // Redirection
	    if($result->rowCount() > 0) {
		    //echo "User Connected! Redirect user to his userpage";
		    $user = $result->fetch(PDO::FETCH_ASSOC);
		    return $user['type'];
	    }

	    // Closing Connection
	    $dbh = null;
	    return -1;

	} catch (PDOException $e) {
	    print "Error!: " . $e->getMessage() . "<br/>";
	    die();
	    return -1;
	}
}
?>
