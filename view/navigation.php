<?php
	//this allows us to get info from config 
	require_once(__DIR__ . "/../model/config.php");

?>

<nav>
<ul>
<li> 
<!-- the php code echos the path and a string -->
<a href="<?php echo $path . "post.php" ?>">Blog Post Form</a> 
</li>
</ul>
</nav>