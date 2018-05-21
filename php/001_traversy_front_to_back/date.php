<?php
	
	echo date('d');
	echo '<br>';
	echo date('m');
	echo '<br>';
	echo date('Y/m/d');		
	echo '<br>';
	echo date('h');		
	echo '<br>';
	date_default_timezone_set('America/New_York');
	$timestamp = mktime(10, 14, 54, 9, 10, 1981);
	echo date('Y/m/d h:i:sa', $timestamp);
	echo '<br>';

?>