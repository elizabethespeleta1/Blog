<?php
//this is a controller, this is where the user interacts with the controller in order to modify anything in the model

//in the () this is the path to the file we want included
require_once(__DIR__ . "/../model/config.php");

//*note we created a table within the database, 
//the id has 11 values within the integers (type int) id cant be NULL(empty)
//the max characters for this varchar is 255, the title cant be null either
//the post info is gonna have text, and its not null
//the primary key is set to id, this is how tables are connected to each other
$query = $connection->query("CREATE TABLE posts ("
	. "id int(11) NOT NULL AUTO_INCREMENT,"
	. "title varchar(255) NOT NULL,"
	. "post text NOT NULL,"
	. "PRIMARY KEY (id))");

//if this is true its been successfully created
//*note you can only create a table once
//else-> not true / table already exists
if($query){
	echo "succesfully create table: posts";
}
else{
	echo "<p>$connection->error</p>";
}

//we are closing the connection
//$connection->close();

