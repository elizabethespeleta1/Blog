<?php

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

	<!-- indicates what your about to see -->
	<h1> Create Blog Post </h1>

	<!-- method is sending data -->
	<!-- action is putting a path from form to create-post -->
	<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
	<!--form it'll take info and send it to the table -->

	<div class="container">

	<!-- first div is for title -->
	<div class="row">
		<!--label indicates  it is -->
		<label for="title">Title: </label>
		<!--input is for text usually for one line -->
		<input type="text" name="title"/>
	</div>

	<!--second div if for post -->
		<label for="post">Post: </label>
		<!--text area is for allows us to type a lot of text -->
		<textarea name="post"></textarea>
	
	<div>
		<!--the button tag makes a button -->
		<button id="submit" type="submit">Submit</button>
		
	</div>

	</div>

</form>