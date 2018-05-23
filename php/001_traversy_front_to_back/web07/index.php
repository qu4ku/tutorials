<?php 

	$path = 'dir0/dir1/myfile.php';
	$file = '1.txt';

	// Return filename
	// echo basename($path);

	// Return filename without extension
	// echo basename($path, '.php');

	// Return the dirname from path
	// echo dirname($path);

	// check if exists
	// echo file_exists('1.txt');

	// absolute path
	// echo realpath('1.txt');

	// echo is_file($file);

	// check if writable

	// echo is_writable($file);
	// echo is_readable($file);

	// echo filesize($file);
	// mkdir('testdir');
	// rmdir('testdir');

	// copy('file1', 'file2');

	// rename('file2', 'file3');

	// // Delete a file
	// unlink('file');

	// echo file_get_contents($file);

	// echo file_put_contents($file, 'Goodbye World');

	// Open file for reading

	// $handle = fopen($file, 'r');

	// $data = fread($handle, filesize($file));

	// echo $data;

	// open file for writing
	$handle = fopen($file, 'w');
	$txt = 'some txt';
	fwrite($handle, $txt);
	fclose();

?>