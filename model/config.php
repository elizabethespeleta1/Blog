<?php
//is the path to all our project files
	$path = "/blog/";

//this code isnt in database anymore because i refactored my code
// this is where you store info
//* note you dont need a closing tag when there is only php

//you are storing database server information here
$host = "localhost";
$username = "root";
$password = "root";
$database = "blog_db";

//this is a database object
//this new object is going to be stored in connection
//in connection you have acccesed to the functions in database
//this Database object helps query on the database
$connection = new Database($host, $username, $password, $database);