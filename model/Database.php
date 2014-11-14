<?php
//making an object 
//this object is going to be associated with the database

class Database {
	//this variable is going to be for our connection
	//private means it can only be accessed here
	//public means other files cann accessed the info
	private $connection;
	//this variable is going to hold the host info
	private $host;
	//this is for the username
	private $username;
	// this ones for the password
	private $password;
	//for the database
	private $database;

}