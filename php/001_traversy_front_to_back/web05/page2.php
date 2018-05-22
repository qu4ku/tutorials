<?php
	if(isset($_COOKIE['username'])){
		echo 'User '.$_COOKIE['username'].'is set<br>';
	} else {
		echo 'User is not set.';
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP COOKIES</title>
</head>
<body>

</body>
</html>