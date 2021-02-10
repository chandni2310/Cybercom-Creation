<?php 
session_start();
require 'connection.php';
if(isset($_POST['submit'])) {

if(isset($_POST['email']) && isset($_POST['password'])) {
	$email=$_POST['email'];
	$passwords=$_POST['password'];
	echo $password=md5($passwords);
	

	if(!empty($email) && !empty($password)){
		$sql="select id from user where email='$email'";
		if($result=mysqli_query($conn,$sql)){
			echo 'query ';
			$rows=mysqli_num_rows($result);

			if($rows==0){
				echo 'Invalid username or password';
			} else{
				echo 'ok';
				if($rows>0){
					while($data=mysqli_fetch_assoc($result)){
						$id=$data['id'];
						$name=$data['FirstName'];
					}
					$_SESSION['user_id']=$id;
					$_SESSION['name']=$name;
					header('Location: blogpost.php');	
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
	<title>Login Page</title>
</head>
<body>
	<div class="content">
		<h2>LOGIN</h2>
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" >
		Email<br>
		<input type="email" name="email" id="email">
		<span id="email_err" clas="error"></span><br>
		Password<br>
		<input type="password" name="password" id="password">
		<span id="email_err" clas="error"></span><br>

		<input type="submit" name="submit" value="LOGIN"> 
		<a href="register.php"><input type="button" name="REGISTER" value="REGISTER"></a>
	</form>

	</div>

</body>
</html>