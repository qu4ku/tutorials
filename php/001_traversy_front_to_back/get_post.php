<?php
	if(isset($_GET['name'])){
		$name = htmlentities($_GET['name']);
		echo $name;
	}

	if(isset($_POST['name'])){
		$name = htmlentities($_POST['name']);
		print_r($_POST);
		// echo $name;
	}

	echo $_SERVER['QUERY_STRING'];
?>

<html>
<head>
	<title>My Website</title>
</head>

<body>
	<form action="get_post.php" method="GET">
		<div>
			<label>Name</label><br>
			<input type="text" name="name">
		</div>
		<div>
			<label>Email</label><br>
			<input type="text" name="email">
		</div>
		<input type="submit" value="Submit">
	</form>
</body>
</html>