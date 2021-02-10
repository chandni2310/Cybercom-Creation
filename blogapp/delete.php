<?php 
$id=$_POST['delete_id'];


$conn=mysqli_connect('localhost','root','','php_exam');


$sql=mysqli_query($conn,"DELETE FROM category WHERE id='$id'");
	

?>