<?php
require_once(__DIR__ . "/../model/database.php");

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

