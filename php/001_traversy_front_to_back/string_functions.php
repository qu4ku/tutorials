<?php
	function b(){
		echo '<br><br>';
	}
	$output = substr('ABCD', 1, 3);
	echo $output;
	echo '<br>';
	echo strlen('Hello World');
	b();
	echo strpos('Sring position', 'o');
	b();
	echo trim('Clean text     ');
	b();
	echo strtoupper('Hello w');
	b();
	echo strtolower('HOOOOLA!');
	b();
	echo ucwords('capitalize each world');
	b();
	echo str_replace('World', 'Everyone', 'Hello World!');
	b();
	echo is_string('Hello');
	b();
	$values = [true, false, null, 'abc', 22, '22', 22.4, '22.3', '', ' ', 0, '0'];

	foreach($values as $val) {
		if(is_string($val)){
			echo "{$val} is a string <br>";
		}

	}
	
	echo gzuncompress(gzcompress('this is a very long string'));


?>