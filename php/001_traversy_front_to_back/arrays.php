<?php 
	# Indexed
	$people = array('kevin', 'martin', 'kamil');
	// echo $people[1];
	$ids = array(23, 45, 320);
	// echo $ids[2];
	$cars = ['toyota', 'nissan', 'mercedes'];
	// echo $cars[1];
	$cars[3] = 'chevy';
	// echo $cars[3];
	$cars[] = 'bmw';
	// echo $cars[4];
	// echo count($cars)
	// print_r($cars)
	// var_dump($cars)
	$people = array('brad' => 34, 'kamil' => 40);
	// print_r($people);

	$cars = array(
		array('Honda', 20, 10),
		array('Toyota', 25, 10),
		array('Hyundai', 30, 10),
	);
	echo $cars[1][0]
?>