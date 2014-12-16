<?php
	//this allows us to get info from config 
	require_once(__DIR__ . "/../model/config.php");
	//require because we need the function in login-verify to check if user is logged in or not
 	require_once(__DIR__ . "/../controller/login-verify.php");

 	//if statement will run the function authenticateUser
 	if(!authenticateUser()){
  		//header is going to take a string and the string is a location
  		header("Location: " . $path . "index.php");
  		//stop the page from loading
  		die();
  }

?>

<nav>
	<ul>
		<li>
			<!-- path comes from the require tag at the top of the page --> 
			<!-- path is what links all our project files -->
			<!-- the php code echos the path and a string -->
			<a href="<?php echo $path . "post.php" ?>">Blog Post Form</a> 
		</li>
	</ul>
</nav>