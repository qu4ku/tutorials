<?php
	$msg = '';
	$msgClass = '';
	// Check for submit
	if(filter_has_var(INPUT_POST, 'submit')){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		if(!empty($email) && !empty($name) && !empty($message)) {
			// Passed
			// Check Email
			if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
				// Failed
				$msg = 'Please use valide email';
				$msgClass = 'alert-danger';
			} else {
				// email passed
				$toEmail = 'info@destetik.com';
				$subject = 'Contact Request From '.$name;
				$body = '<h2>Contact Request</h2>
				<h4>Name</h4><p>'.$name.'</p>
				<h4>Email</h4><p>'.$email.'</p>
				<h4>Message</h4><p>'.$message.'</p>';

				$headers = "MIME-Version: 1.0"."\r\n";
				$headers .= "Content-Type:text/html"."\r\n";
				$headers .= "From: " .$name. "<" .$email. ">"."\r\n";

				if(mail($toEmail, $subject, $body, $headers)){
					$msg = 'Your email has been sent';
					$msgClass = 'alert-success';
				} else {
					$msg = 'Your email has failed';
					$msgClass = 'alert-danger';
				}

			}
		} else {
			// Failed
			$msg = "Please fill in all fileds";
			$msgClass = 'alert-danger';
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact Us</title>
	<link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand">My website</a>
			</div>
		</div>
	</nav>

	<div class="container">
		<?php if($msg != ''): ?>
			<div class="alert <?php echo $msgClass; ?>"><?php echo $msg ?></div>
		<?php endif; ?>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class=form-control" value="<?php echo isset($_POST['name']) ? $name : '' ?>">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class=form-control" value="<?php echo isset($_POST['email']) ? $email : '' ?>">
			</div>
			<div class="form-group">
				<label>Name</label>
				<textarea type="text" name="message" class=form-control" value=""><?php echo isset($_POST['message']) ? $message : '' ?></textarea>
			</div>
			<br>
			<button type="submit" name="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
	
</body>
</html>