<?php 
	if(isset($_POST['submit'])){
		echo 123;
		session_start();
		$_SESSION['name'] = htmlentities($_POST['name']);
		$_SESSION['email'] = htmlentities($_POST['email']);

		header('Location: page2.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Sessions</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class=form-control" value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>">
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="text" name="email" class=form-control" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
		</div>
		<br>
		<button type="submit" name="submit" class="btn btn-primary">Submit</button>
	</form>

</body>
</html>