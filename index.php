<!DOCTYPE html>
<html>
		<head>
			<title></title>
		</head>
	<body style="background-image: url(wall4.png)">
		
		<header class="imo">
			<div class="text">
				The Way I See It
			</div>

			<div class="textoh">
				In My Humble Opinion
			</div>
		</header>

		<div class="bar" style="background-image: url(wet.jpg)">
		</div>

		<div class="aboutme">
			<h1> about me </h1>
			
			<div class="stupiddetail">
			</div>
		</div>

	</body>
</html>
<?php
//view is probably where you'll get info from the model or have html code
//* note __DIR__ concatinates

	//gives access to the function in login-verify
	require_once(__DIR__ . "/controller/login-verify.php");

	// it has inserted code from header and putting it in index php
	require_once(__DIR__ . "/view/header.php");

	//if statement so navigation only displays when user is logged in
	if(authenticateUser()){

		//this allows the link to show up
		require_once(__DIR__ . "/view/navigation.php");
	}

	//require_once(__DIR__ . "/controller/create-db.php");

	//it has inserted code from footer and putting it in index php
	

	//this allows you to display posts from the database
	require_once(__DIR__ . "/controller/read-posts.php");
	require_once(__DIR__ . "/view/footer.php");
?>

<!-- separating everything helps make it easier to maintain our code-->