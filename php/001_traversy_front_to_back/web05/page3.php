<?php
	$user = ['name' => 'Brad', 'email' => 'test@test.com', 'age' => 35];

	$user = serialize($user);
	
	setcookie('user', $user, time() + 6000);

	$user = $_COOKIE['user'];
	$user = unserialize($user);
	echo $user['name']; 
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