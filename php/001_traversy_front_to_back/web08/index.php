<?php
	require('config/db.php');
	require('config/config.php');

	$query = 'SELECT * FROM posts';

	// get the results
	$results = mysqli_query($conn, $query);

	// fetch data 
	$posts = mysqli_fetch_all($results, MYSQLI_ASSOC);
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
		<h1>Posts</h1>	
		<?php foreach($posts as $post): ?>
			<div class="well">
				<h3><?php echo $post['title']; ?></h3>
				<small>Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
				<p><?php echo $post['body']; ?></p>
				<a class="btn btn-default" href="post.php?id=<?php echo $post['id']; ?>">Read More</a>
			</div>
		<?php endforeach; ?>
	</div>
</body>
</html>