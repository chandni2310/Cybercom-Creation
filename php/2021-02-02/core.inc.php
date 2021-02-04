<?php 

include 'connect.inc.php';
session_start(); 
$current_file=$_SERVER['SCRIPT_NAME'];
//$http_referer=$_SERVER['HTTP_REFERER'];


function get_data($conn,$field){
	//global $conn;
	$query = "SELECT `$field` FROM `users1` WHERE `id` = '".$_SESSION['user_id']."'";
		$query_run = mysqli_query($conn,$query);
		if ($query_run) {
			$query_result = mysqli_fetch_array($query_run);
			return $query_result[$field];

		}
		else{
			echo 'error';
		}
		//global $query_result;
		//return $query_result;
	
}




?>