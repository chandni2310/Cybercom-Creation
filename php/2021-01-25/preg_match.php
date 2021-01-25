<?php 
//preg_match() i used to fnd substring from a given string.-->It returns 1 if string is found else return 0.

$s1 = 'Today is monday';
if(preg_match('/day/', $s1)) {
	echo "Match found";

} else {
	echo "Match not found";
}


?>