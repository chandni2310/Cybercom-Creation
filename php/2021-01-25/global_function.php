<?php 

$user_ip=$_SERVER['REMOTE_ADDR'];
//echo 'The ip is '. $user_ip;
//global $user_ip;

function echo_ip(){
	//global $user_ip;
	global $user_ip;

	echo 'The ip is '. $user_ip;
}
echo_ip();


?>