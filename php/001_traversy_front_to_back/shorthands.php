<?php
	function br(){
		echo '<br><br>';
	}

	$loggedIn = true;

	if($loggedIn){
		echo 'You are logged in';
	} else {
		echo 'You are NOT logged in';
	}
	br();

	echo ($loggedIn) ? 'You are logged in' : 'You are not logged in';
	br();

	$age = 20;
	$score = 15;

	echo 'Your score is: '.($score > 10 ? ($age > 10 ? 'Average' : 'Exceptional') : ($age > 10 ? 'Horrible' : 'Average'));

	br();


	$loggedIn = false;

	$ar = [1, 2, 3, 4, 4, 6];
?>

<div>
	<?php if($loggedIn) { ?>
		<h1>Welcome User</h1>
	<?php } else { ?>
		<h1>You need to log in sir.</h1>
	<?php } ?>
</div>

<div>
	<?php foreach($ar as $a): ?>
		<?php echo $a; ?>
	<?php endforeach; ?>
	
</div>