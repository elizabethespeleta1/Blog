<!-- indicates what your about to see -->
<h1> Create Blog Post </h1>

<form>
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
		<button type="submit">Submit</button>
	</div>
</form>