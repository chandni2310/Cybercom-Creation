<?php  
$name=$_FILES['file']['name'];
$size=$_FILES['file']['size'];
$type=$_FILES['file']['type'];

$tmp_name=$_FILES['file']['tmp_name'];

if(isset($name)) {
	echo 'OK';
}



?>

<form method="POST" action="upload.php" enctype="multipart/form-data">
	<input type="file" name="file" ><br><br>
	<input type="submit" value="SUBMIT">
</form>