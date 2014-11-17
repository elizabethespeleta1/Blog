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


//* your doing this so you don't have to repeat alot of the code

	//this file needs to be public needs to accessed in any file
	// the variables are global variables
	//database in the () relate to the database
	//with the info we store the info within the global variables
	public function __construct($host, $username, $password, $database){
		//in the constructer you can access the variables by using this code
		$this->host = $host;
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;
	}

	//in this function your gonna open a connection and use
	public function openConnection(){

	}

	//when your going to close the function
	public function closeConnection(){

	}

	//this string can be located in a variable or an actual string 
	//but it will be a variable in the end
	public function query($string){

	}
}

