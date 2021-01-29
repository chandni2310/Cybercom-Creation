<?php  
/*
$filename='delete.txt';

if(@unlink($filename)) {
	echo 'File '.$filename.' has been deleted';
} else {
	echo 'File not exists';
}
*/

$file='rename.txt';
$random=rand(1000,9999);

if(rename($file,$random.'.txt')) {
	echo 'File '.$file.' has been renamed to <strong> ' .$random.'.txt </strong>';
} else {
	echo 'Error';
}



?>