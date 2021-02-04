<?php  

require 'connect.inc.php';
require 'core.inc.php';


if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
	echo 'You are logged in. <a href="logout.php">Log out</a><br>';
	echo get_data($conn,'firstname');

} else{
include 'loginform.php';
}
//echo  $current_file;





?>