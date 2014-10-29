
<?php
//view is probably where you'll get info from the model or have html code
//* note __DIR__ concatinates

// it has inserted code from header and putting it in index php
	require_once(__DIR__ . "/view/header.php");
//it has inserted code from footer and putting it in index php
	require_once(__DIR__ . "/view/footer.php");
	require_once(__DIR__ . "/view/navigation.php");
	require_once(__DIR__ . "/controller/create-db.php");
?>

<!-- separating everything helps make it easier to maintain our code-->