<?php 

require 'connection.php';
$prefix=$fname=$lname=$phone=$email=$password=$c_password=$info=$tnc='';
$prefix_err=$fname_err=$lname_err=$phone_err=$email_err=$password_err=$c_password_err=$info_err=$tnc_err='';



	if(isset($_POST['submit'])){
		//echo $_POST['prefix'];

		if(empty($_POST['prefix'])){
			$prefix_err="it is required";
		} else{
			$prefix=$_POST['prefix'];
		}

		if(empty($_POST['fname'])){

		$fname_err='Name is required';
	} else {
		$fname=input_data($_POST['fname']);
		if(!preg_match("/^[a-zA-Z ]*$/",$fname)) {
			$fname_err="only characters are allowed";
		}
	}

	if(empty($_POST['lname'])){

		$lname_err='Name is required';
	} else {
		$lname=input_data($_POST['lname']);
		if(!preg_match("/^[a-zA-Z ]*$/",$lname)) {
			$lname_err="only characters are allowed";
		}
	}




	if(empty($_POST['email'])) {
		$email_err="Email is required";
	} else {
		$email=input_data($_POST['email']);
		if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
			$email_err="Not proper email format";
		}
	}

	if(empty($_POST['phone'])) {
		$phone_err="phone no is required";
	} else {
		$phone=input_data($_POST['phone']);
		if(!preg_match("/^[0-9]*$/",$phone)) {
			$phone_err="must contain digits";

		}
		if(strlen($phone)!=10){
			$phone_err="Must be of 10 digits";
		}
	}

	if(empty($_POST['password'])){
		$password_err='enter yr password';
	} else{
		$password=md5($_POST['password']);

	}

	if(empty($_POST['c_password'])){
		$c_password_err='enter yr password again';
	} else {
		$c_password=input_data($_POST['c_password']);
		if($c_password!=$password){
			$c_password_errpassworeErr="password must be same";
		}

	}

	if(empty($_POST['info'])){
		$info_err="it it required";
	} else{
		$info=input_data($_POST['info']);
	}

	if(empty($_POST['tnc'])){
		$tnc_err='it is required';
	}


	if($prefix_err=='' && $fname_err=='' && $lname_err=='' && $phone_err=='' && $email_err=='' && $password_err=='' && $c_password_err=='' && $info_err=='' && $tnc_err==''){
		echo 'all';

		$query= "SELECT `Email` FROM `user` WHERE `Email`='$email'";
		$query_run = mysqli_query($conn,$query);
					if (mysqli_num_rows($query_run) == 1) {
						echo 'The email '.$email.' already exists.';
					} else{
						
						$query = "INSERT INTO `user`(`Prefix`,`FirstName`,`LastName`,`Mobile`,`Email`,`PasswordHash`,`Information`,`CreatedAt`) VALUES ('$prefix','$fname','$lname','$phone','$email','$password','$info',NOW())";
						$result = mysqli_query($conn,$query);
						//echo $query;
						if ($result) {
							header('Location: blogpost.php');
						} else {
							echo "Sorry we couldn\'t register you at this time, Try again later.";
						}
					
					} 
	}






	








	}



	function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
}  






 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Register page</title>
</head>
<body>
	<div class="register_form" align="center">
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
			<table>
				<tr>
					<td>Prefix</td>
					<td>
						<select name="prefix">
							<option value="select"></option>
							<option  value="MR">Mr</option>
							<option value="MISS">Miss</option>
						</select>
						<span id="prefix_err" class="error"> <?php echo $prefix_err; ?></span>
					</td>
				</tr>
				<tr>
					<td>First Name</td>
					<td><input type="text" name="fname" value="<?php if(isset($fname)){echo $fname;} ?>">
					<span id="fname_err" class="error"> <?php echo $fname_err; ?></span></td>
				</tr>
				<tr>
					<td>Last Name</td>
					<td><input type="text" name="lname" value="<?php if(isset($lname)){echo $lname;} ?>">
					<span id="lname_err" class="error"><?php echo $lname_err; ?></span></td>

				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email"  value="<?php if(isset($email)){echo $email;} ?>">
						<span id="email_err" class="error"><?php echo $email_err; ?></span></td>

				</tr>
				<tr>
					<td>Mobile Number</td>
					<td><input type="phone" name="phone" value="<?php if(isset($phone)){echo $phone;} ?>">
						<span id="phone_err" class="error"><?php echo $phone_err; ?></span></td>
				</tr>
				<tr>
				<td>Password</td>
				<td><input type="password" name="password" >
					<span id="password_err" class="error"><?php echo $password_err; ?></span></td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="password" name="c_password">
						<span id="cpassword_err" class="error"><?php echo $c_password_err; ?></span></td>
				</tr>
				<tr>
					<td>Information</td>
					<td><textarea name="info" rows="4" cols="20" value="<?php if(isset($info)){echo $info;} ?>"></textarea>
						<span id="info_err" class="error"><?php echo $info_err; ?></span></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="checkbox" name="tnc" > I accept Terms and Conditions
						<span id="tnc_err" class="error"><?php echo $tnc_err; ?></span></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="submit"></td>
				</tr>
			</table>
		</form>
	</div>

</body>
</html>


<?php 




 ?>