<?php
	//filer_input it validates and sanitizes the inputs
	//post in the () means is info posting somewhere
	$title = filer_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	$post = filer_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

	echo "<p>Title: $title</p>";
	echo "<p>Post: $post</p>";