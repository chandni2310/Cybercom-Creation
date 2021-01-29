<?php 
$filename='name2.txt';

if(file_exists($filename)) {
	echo 'File already exits';
} else {
	$handle=fopen($filename,'w');
	fwrite($handle,'Hello');
	fclose($handle);
}




?>