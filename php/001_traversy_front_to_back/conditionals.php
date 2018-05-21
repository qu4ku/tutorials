<?php
	
	$num = '5';

	if ($num === 5){
		echo '5 passed.';
	} else {
		echo "didn't pass<br>";
	}

	$favCol = 'black';

	switch($favCol){
		case 'red':
			echo 'Your fav col is red';
			break;
		case 'blue':
			echo 'Your fav col is blue';
			break;
		case 'green':
			echo 'Your fav col is green';
			break;
		default:
			echo 'youu fav col is something else';
			break;

	}
?>