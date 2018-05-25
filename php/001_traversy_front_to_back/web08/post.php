<?php
	require('config/db.php');
	require('config/config.php');

	// get id 
	$id = mysqli_real_escape_string($conn, $_GET['id']);

	$query = 'SELECT * FROM posts WHERE id='.$id;

	// get the results
	$results = mysqli_query($conn, $query);

	// fetch data 
	$post = mysqli_fetch_assoc($results);
	// var_dump($posts);
	// free result
	mysqli_free_result($results);

	// close connectoin
	mysqli_close($conn);


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Blog</title>
	<link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
</head>

<body>
	<div class="container">
		
		<h1><?php echo $post['title']; ?></h1>
		<small>Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
		<p><?php echo $post['body']; ?></p>
		<a class="btn btn-default" href="<?php echo ROOT_URL ?>">BACK</a>
	</div>
</body>
</html>