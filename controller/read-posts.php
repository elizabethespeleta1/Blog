<?php
	//connect to the directory
	require_once(__DIR__ . "/../model/config.php");
	//using the query variable to select from the posts table
	$query = "SELECT * FROM posts";
	//result gets posts from the database
	$result = $_SESSION["connection"]->query("$query");

	//this if statement makes it so you can actually post your posts on your page
	if($result){
		while($row = mysqli_fetch_array($result)){

			//making a div named post
			echo "<div class = 'posts'>";

			// were using h2 so the title is larger and were grabbing from the row the title is in
			echo "<h2 class='titledoe'>" . $row['title'] . "</h2>";

			// this is for space
			echo "<br />";

			//this is grabbing from the row our posts are in
			echo "<p>" . $row['post'] . "</p>";

			//this is for space at the bottom
			echo "<br/>";
			
			echo "<p> Posted on: " . $row['DateTime'] . "</p>";


			// this is closing the div
			echo "</div>";
		}
	}