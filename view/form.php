<?php
  require_once(__DIR__ . "/../model/config.php")
?>
	<!-- indicates what your about to see -->
	<h1> Create Blog Post </h1>

	<!-- method is sending data -->
	<!-- action is putting a path from form to create-post -->
	<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
	<!--form it'll take info and send it to the table -->

	<!-- first div is for title -->
	<div>
		<!--label indicates what it is -->
		<label for="title">Title: </label>
		<!--input is for text usually for one line -->
		<input type="text" name="title"/>
	</div>

	<!--second div if for post -->
	<div>
		<label for="post">Post: </label>
		<!--text area is for allows us to type a lot of text -->
		<textarea name="post"></textarea>
	</div>

	<div>
		<!--the button tag makes a button -->
		<button type="submit">Submit</button>
	</div>
</form>