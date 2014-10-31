<?php

	//require so we have access to variables in database.php
	// used info to create a new mysqli
	require_once(__DIR__ . "/../model/database.php");

	$connection = new mysqli($host,$username,$password,$database);


	//filer_input it validates and sanitizes the inputs
	//post in the () means is info posting somewhere
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

	// this query is to insert things into our table
	$query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post' ");

	//this is to check if the query works or not
	if($query){
		echo "<p>Successfully inserted post: $title </p>";
	}
	else{
		echo "<p> connection->error </p>";
	}

	$connection->close();