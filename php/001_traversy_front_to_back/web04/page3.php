<?php 

	session_start();
	unset($_SESSION['name']);
	$name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
	$email = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Sessions</title>
</head>
<body>
<h1>Hello <?php echo $name; ?></h1>
</body>
</html>