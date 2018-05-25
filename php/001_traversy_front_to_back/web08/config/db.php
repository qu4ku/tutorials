<?php
	//create connection
	$conn = mysqli_connect('localhost', 'root', 'admin', 'php_blog');

	if(mysqli_connect_errno()){
		echo 'Failed to connect to My'.'<br>';
	} else {
		// echo 'good'.'<br>';
		// all good.
	}
?>