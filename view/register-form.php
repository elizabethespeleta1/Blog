<?php
  require_once(__DIR__ . "/../model/config.php")
?>

	<h1>Register</h1>

	<!-- method is a post because you want to sent a info to a certain php and the file will send it to th database-->
	<!-- the action calls a path variable-->
	<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
	<!-- this page is for users to register -->

		<!-- each div is a section-->
		<div>
			<!-- the label is for the email --> file
			<label for="email"> Email:</label>
			<input type="text" name="email" />
		</div>

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