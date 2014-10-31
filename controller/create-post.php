<?php

	//require so we have access to variables in database.php
	// used info to create a new mysqli
	require_once(__DIR__ . "/../model/database.php");

	$connection = new mysqli($host,$username,$password,$database);


	//filer_input it validates and sanitizes the inputs
	//post in the () means is info posting somewhere
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

	echo "<p>Title: $title</p>";
	echo "<p>Post: $post</p>";

	$connection->close();