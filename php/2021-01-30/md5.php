<?php  

/*
$string='Chandni';
$string_hash=md5($string);
echo $string_hash;
*/

if(isset($_POST['user_password']) && !empty($_POST['user_password'])) {
	$user_password=md5($_POST['user_password']);

	$filename='hash.txt';
	$handle=fopen($filename,'r');
	$data=fread($handle,filesize($filename));

	

	if($user_password==$data) {
		echo 'Password match';
	} else{
		echo 'Password dose not match';
	}

} else {
	echo 'Pls enter your password';
}




?>

<form action="md5.php" method="POST">
	<label>Enter your Password:</label><br>
	<input type="text" name="user_password"><br><br>
	<input type="submit" name="" value="SUBMIT">


</form>