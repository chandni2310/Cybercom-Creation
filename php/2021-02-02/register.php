<?php 
require 'core.inc.php';

if(!(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))){
	//echo 'register';
	if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password_again']) && isset($_POST['firstname']) && isset($_POST['surname'])) {
		$username=$_POST['username'];
		$password=$_POST['password'];
		$password_again=$_POST['password_again'];
		$firstname=$_POST['firstname'];
		$surname=$_POST['surname'];

		if(!empty($username) && !empty($password) && !empty($password_again) && !empty($firstname) && !empty($surname)){
			if($password !=$password_again){
				echo 'password dose not match';
			} else{
				$query = "SELECT `username` FROM `users1` WHERE `username`='$username'";
					$query_run = mysqli_query($conn,$query);
					if (mysqli_num_rows($query_run) == 1) {
						echo 'The username '.$username.' already exists.';
					} else{
						$query = "INSERT INTO `users1`(`id`,`username`,`password`,`firstname`,`lastname`) VALUES (NULL,'$username','$password','$firstname','$surname')";
						$result = mysqli_query($conn,$query);
						//echo $query;
						if ($result) {
							header('Location: register_success.php');
						} else {
							echo "Sorry we couldn\'t register you at this time, Try again later.";
						}
					}
					}
			}

		} else{
			echo 'fill all the details';
		}
	


	?>

<form action="register.php" method="post">
				Username:<br><input type="text" name="username" value="<?php if (isset($username)) { echo $username; }?>"><br>
				Password:<br><input type="password" name="password" value="<?php if (isset($password)) { echo $password; }?>"><br>
				Password again:<br><input type="password" name="password_again" value=""><br>
				First Name:<br><input type="text" name="firstname" value="<?php if (isset($firstname)) { echo $firstname; }?>"><br>
				Surname:<br><input type="text" name="surname" value="<?php if (isset($surname)) { echo $surname; }?>"><br>
				
				<input type="submit" name="submit">
			</form>





<?php

} else{
	echo 'already logged in';


}




?>