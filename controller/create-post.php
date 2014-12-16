<?php

	//require so we have access to variables in database.php
	// used info to create a new mysqli
	require_once(__DIR__ . "/../model/config.php");

	//you created a connection to a database
	//$connection = new mysqli($host,$username,$password,$database);

	//filter_input it validates and sanitizes the inputs
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);

	//post in the () means is info posting somewhere
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

	//date gets todays date and stores it in variable date
	$date = new DateTime('today');

	//time sets the time zone
	$time = new DateTime('America/Los_Angeles');

	// this query is to insert things into our table
	$query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post' ");

	//this is to check if the query works or not
	if($query){
		echo "<p>Successfully inserted post: $title </p>";
		
		// where you display the date
		//capitals make a difference
		echo "Posted on: " . $date->format("M/D". " " . "d/Y") . " at " . $time->format("g:i");
	}
	else{
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}

	//$connection->close();