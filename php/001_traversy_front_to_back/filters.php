<?php
	// Check for posted data
// if(filter_has_var(INPUT_POST, 'data')){
// 	echo 'Data Found';
// } else {
// 	echo 'No data';
// }

// if(filter_has_var(INPUT_POST, 'data')){
// 	$email = $_POST['data'];
// 	// Remove illegal chars
// 	$email = filter_var($email, FILTER_SANITIZE_EMAIL);
// 	echo $email.'<br>';
// 	if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)){
// 		echo 'Email is valid';
// 	} else {
// 		echo 'Email is not valid';
// 	}
// }

// echo '<br><br>';

// $num = 23;
// if(filter_var($num, FILTER_VALIDATE_INT)){
// 	echo "{$num} is a number.";
// }

// $filters = array(
// 	"data" => FILTER_VALIDATE_EMAIL,
// 	"data2" => array(
// 		"filter" => FILTER_VALIDATE_INT,
// 		"options" => array(
// 			"min_range" => 1,
// 			"max_range" => 100
// 		)
// 	)

// );

$arr = array(
	"name" => "brad traversy",
	"age" => "35",
	"email" => "brad@gmail.com"
);

$filters = array(
	"name" => array(
		"filter" => FILTER_CALLBACK,
		"options" => "ucwords"
	),
	"age" => array(
		"filter" => FILTER_VALIDATE_INT,
		"options" => array(
			"min_range" => 1,
			"max_range" => 120
	),
	"email" => FILTER_VALIDATE_EMAIL

	)
);

print_r(filter_var_array($arr, $filters));

// print_r(filter_input_array(INPUT_POST, $filters))
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	<input type="text" name="data">
	<input type="text" name="data2">
	<button type="submit">Submit</button>
</form>