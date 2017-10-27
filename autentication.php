<?php
	// Developed by Rogerio T. H   rogeriotakashi@hotmail.com
	// Using XAMPP (Apache + mysql)
	// Database default user and pass from mysql
	// To Do List:
	// Encrypt password
	// Redirect user biased on his access level
	// CRUD functions
try {
	$user = "root";
	$pass = "";


	// Get Username and Password from method POST
	$username= $_POST['username'];
	$password= $_POST['password'];



	// Connection
    $dbh = new PDO('mysql:host=localhost;dbname=dbProjetoPHP', $user, $pass);
    $query = "SELECT COUNT(*) from usuarios where username='".$username."' AND password='".$password."'";
    $result = $dbh->query($query);



    // Redirection
    if($result->rowCount() > 0)
    	echo "User Connected! Redirect user to his userpage";
    else
    	echo "User Not Found";


    // Closing Connection
    $dbh = null;

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>