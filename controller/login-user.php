<?php
	//need to require the config file because thats where the database object is made 
	require_once(__DIR__ . "/../model/config.php");
	//need the variable for username and need to filter the input and store input
	//input post is the method for posting
	//need to filter and sanitize info going in
	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
	//need the variable for password and need to filter the input and store input
	//input post is the method for posting
	//need to filter and sanitize info going in
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
	//making a query so you select the proper user
	//using session variable because thats where the database connection is being stored
	//running a query on the database
	//retrieving  info from database using select
	//selecting salt password from the users table
	//selecting from the username
	$query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE username ='$username'");