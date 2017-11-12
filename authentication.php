<?php

if(!isset($_SESSION)){
    session_start();
}

function checkUser() {


	try {
		$user = "root";
		$pass = "";


		// Get Username and Password from method POST
		$username= $_POST['username'];
		$password= $_POST['password'];



		// Connection
	    $dbh = new PDO('mysql:host=localhost;dbname=crud_PHPSet', $user, $pass);
	    //$query = "SELECT COUNT(*) from user where username='".$username."' AND password='".$password."'";
	    $query = "SELECT * FROM user where username='".$username."' AND password='".$password."'";
	    $result = $dbh->query($query);


	    // Redirection
	    if($result->rowCount() > 0) {
		    //echo "User Connected! Redirect user to his userpage";
		    $user = $result->fetch(PDO::FETCH_ASSOC);
		    $_SESSION['username'] = $user['username'];
		    $_SESSION['cpf'] = $user['cpf'];
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
