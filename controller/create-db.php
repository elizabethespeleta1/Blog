<?php
//this is a controller, this is where the user interacts with the controller in order to modify anything in the model

//in the () this is the path to the file we want included
require_once(__DIR__ . "/../model/database.php");

//in this connection variable, theres class or object that accesses info on our mysqli server
$connection = new mysqli($host, $username, $password);

//this is where we check if theres a connection error
if($connection->connect_error){

//there is an error and were killing the program& were echoing whats wrong with it
	die("error: " . "$connection->connect_error");
}

//this is gonna access the database
$exists = $connection->select_db($database);

//*note the ! means its false
// this is creating a database if it doesnt exist& running a query& there is sql language in the ()
if(!$exists){
	$query = $connection->query("CREATE DATABASE $database");

//this is outputting a message
if($query){
	echo "successfully executed DATABASE:" . $database;
}
}

//if this runs this means a database already exists
else{
	echo "Database already exists";
}

//we are closing the connection
$connection->close();

