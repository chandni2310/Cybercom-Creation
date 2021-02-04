<?php  



if(isset($_POST['submit'])) {

if(isset($_POST['username']) && isset($_POST['password'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];
	

	if(!empty($username) && !empty($password)){
		$sql="select id from users1 where username='$username' and password='$password'";
		if($result=mysqli_query($conn,$sql)){
			//echo 'query ';
			$rows=mysqli_num_rows($result);

			if($rows==0){
				echo 'Invalid username or password';
			} else{
				//echo 'ok';
				if($rows>0){
					while($data=mysqli_fetch_assoc($result)){
						$id=$data['id'];
						$name=$data['firstname'];
					}
					$_SESSION['user_id']=$id;
					$_SESSION['name']=$name;
					header('Location: log.php');
				}

			}

		} 

	} else {
		echo 'Enter yr username and password';
	}
}
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Login form </title>
</head>
<body>
	<form action="<?php $_SERVER['SCRIPT_NAME'] ?>" method="POST">
		Username: <input type="text" name="username"> 
		<br>
		Password: <input type="password" name="password">
		<br>
		<input type="submit" name="submit">
		
	</form>

</body>
</html>