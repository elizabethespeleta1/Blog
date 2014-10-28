<?php
//this is a controller, this is where the user interacts with the controller in order to modify anything in the model

//in the () this is the path to the file we want included
require_once(__DIR__ . "/../model/database.php");

//in this connection variable, theres class or object that accesses info on our mysqli server
$connection = new mysqli($host, $username, $password);

if($connection->connect_error){
	die("error: " . "$connection->connect_error");
}

$exists = $connection->select_db($database);

if(!$exists){
	$query = $connection->query("CREATE DATABASE $database");

if($query){
	echo "successfully executed DATABASE:" . $database;
}
}
else{
	echo "Database already exists";
}

$connection->close();

