<form action="upper_lower_case.php" method="GET">
	<label>Enter your name:</label><br>
	<input type="text" name="f_name"><br><br>
	<input type="submit" name="submit" value="SUBMIT">
	
</form>


<?php  
if(isset($_GET['f_name']) && !empty($_GET['f_name'])) {
	$name=$_GET['f_name'];
	$name_lower=strtolower($name);

	if($name_lower=='chandni'){
		echo 'You are the best!!!'.$name;
	}

}


?>

