<?php
  require_once(__DIR__ . "/../model/config.php")
?>

	<!-- this is just to label our page-->
	<h1>Login</h1>

	<!-- method is post because this is how we send the info-->
	<!-- -->
	<form method="post" action="<?php echo $path . "controller/login-user.php" ?>">

	<div>
			<!-- the label is for the username-->
			<label for="username"> Username:</label>
			<input type="text" name="username" />
		</div>

		<div>
			<!-- the label is for the password-->
			<label for="password"> Password:</label>
			<!-- this unput is different so the password doesn't show text-->
			<input type="password" name="password" />
		</div>

		<div>
			<button type="submit">Submit</button>
		</div>

	 </form>