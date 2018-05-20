<?php
	for($i=0; $i < 10; $i++){
		echo $i;
		echo '<br>';
		echo "Number $i";
		echo '<br>';
	}

	$j = 0;

	while($j < 10) {
		echo $j;
		$j++;
		echo '<br>';
	}

	$people = ['brad', 'kamil', 'stef'];

	foreach($people as $person){
		echo $person;
		echo '<br>';
	}
?>