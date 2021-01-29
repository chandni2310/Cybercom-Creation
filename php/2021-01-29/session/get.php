<?php  
session_start();
/*if (isset($_SESSION['f_name'])) {
//echo 'the value of session is '.$_SESSION['name'];
echo 'the value of session is '.$_SESSION['f_name'];

} else {
	echo 'Pls log in to continue';
}*/

echo 'The value of session is '.$_SESSION['f_name'].' and birth year is  '.$_SESSION['byear'];

?>