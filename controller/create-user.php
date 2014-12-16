<?php
	//this is going to be for creating a user
	//requiring the config file
	require_once(__DIR__ . "/../model/config.php");

	//we are creating a variable named email
	//were filtering an input and getting it from the post method
	//getting it by the name email
	//sanitizing the input email
	$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

	//were filtering an input and getting it from the post method
	//getting it by the name username
	//sanitizing the input username by string 
	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);

	//were filtering an input and getting it from the post method
	//getting it by the name password
	//sanitizing the input password by string 
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

	// using $5$ 5000 times
	//uniqid generates a random number
	$salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";
	
	//using password n salt to create a crypt password
	$hashedPassword = crypt($password, $salt);

	//creating a query variable
	//using the session because it has a connection and this connection  is a connection to our database 
	//we are querying
	//were inserting in the users table  and setting info *space needs to be after set
	$query = $_SESSION["connection"]->query("INSERT INTO users SET "
		//were setting the email username hashedPassword and salt
		//
		. "email = '$email',"
		. "username = '$username',"
		. "password = '$hashedPassword',"
		. "salt = '$salt'");

	if($query){
		echo "successfully created user: $username";
	}
	else{
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}