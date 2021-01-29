<?php  
$name=$_FILES['file']['name'];
$size=$_FILES['file']['size'];
$type=$_FILES['file']['type'];

$tmp_name=$_FILES['file']['tmp_name'];
$extension=strtolower(substr($name,strpos($name,'.')+1));
$max_size=2048000;
//die();



if(isset($name)) {
	if(!empty($name)) {
		//restricting file type and file size
		if(($extension=='jpg' || $extension=='jpeg') && $type=='image/jpeg' && $size<=$max_size){
		$location='uploads/';
		if(move_uploaded_file($tmp_name,$location.$name)) {
			echo 'File uploaded';
		}
	}
	else {
		echo 'only jpg or jpeg files are allowed and max file size should be 2MB or leess than that';
	}
	}
}



?>

<form method="POST" action="upload.php" enctype="multipart/form-data">
	<input type="file" name="file" ><br><br>
	<input type="submit" value="SUBMIT">
</form>