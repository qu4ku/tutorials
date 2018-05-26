<?php
	require('config/config.php');
	//create connection
	// $conn = mysqli_connect('localhost', 'root', 'admin', 'php_blog');
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	if(mysqli_connect_errno()){
		echo 'Failed to connect to My'.'<br>';
	} else {
		// echo 'good'.'<br>';
		// all good.
	}
?>