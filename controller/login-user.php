<?php
	//need to require the config file because thats where the database object is made 
	require_once(__DIR__ . "/../model/config.php");
	//need the variable for username and need to filter the input and store input
	//input post is the method for posting
	//need to filter and sanitize info going in
	$username = filter_input (INPUT_POST, "username", FILTER_SANITIZE_STRING);
	//need the variable for password and need to filter the input and store input
	//input post is the method for posting
	//need to filter and sanitize info going in
	$password = filter_input (INPUT_POST, "password", FILTER_SANITIZE_STRING);
	//making a query so you select the proper user
	//using session variable because thats where the database connection is being stored
	//running a query on the database
	//retrieving  info from database using select
	//selecting salt password from the users table
	//selecting from the username
	$query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE username = '$username'");

	//to check if theres info stored in query
	//since array the info get put has specific properties
	//num_rows tells how many rows we got from the database and checking if its one

	if($query->num_rows == 1){
		//making a variable to get the array of info thats in query
		//fetch array is Fetching a result row as an associative array (( and can fetch a numeric array))
		$row = $query->fetch_array();
			//to check variable  password  =  password stored in the database
			// === checks checks te value and type
			if($row["password"] === crypt($password, $row["salt"])){
				echo "<p>Login Successful!</p>";
			}
			//if the password is invalid
			else{
				echo "<p>Invalid username and password</p>";
			}

	}
	//if the query fails or retrieve username
	else{
		echo "<p> Invalid username and password </p>";
	}