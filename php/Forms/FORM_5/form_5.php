<!doctype html>
<html lang="en-US">
<head>

	<meta charset="utf-8">

	<title>Login</title>
	<style type="text/css">
		.error{
			color:red;
		}
	</style>

	<link rel="stylesheet" type="text/css" href="form_5.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	
</head>

<body>

	<?php  

$emailErr=$passwordErr="";
$email=$password="";

if($_SERVER['REQUEST_METHOD']=='POST'){

	

	
	
	if(empty($_POST['email'])) {
		$emailErr="Email is required";
	} else {
		$email=input_data($_POST['email']);
		if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
			$emailErr="Not proper email format";
		}
	}

	

	if(empty($_POST['password'])){
		$passwordErr='enter yr password';
	} else{
		$password=input_data($_POST['password']);
	}

	

  





}
function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
}  


?>








	


	<div id="login">

		<h2><i class="fa fa-lock" style="font-size:24px"></i>Sign In</h2>

		<form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>' method="POST"  onsubmit="return validate()">

			<fieldset>

				<p><label >E-mail address</label></p>
				<p><input type="email" id="email" name="email">
					<br><span id="err_email" class="error" ><?php echo $emailErr;?></span></p> 

				<p><label>Password</label></p>
				<p><input type="password" id="password"  name="password" >
					<br><span id="err_password" class="error" ><?php echo $passwordErr;?></span></p> 

				<p><input type="submit" name="submit" value="Sign In"></p>

			</fieldset>

		</form>

	</div> 

	<script type="text/javascript" src="form_5.js"></script>


	<?php 

	if(isset($_POST['submit'])) {
	if($emailErr=="" && $passwordErr=="" ) {
		echo "<h2><b>Form submitted successfully!! <b><h2>";

		echo "<h3>Details<h3>";

		
		echo "Email: ".$email;
		echo "<br>";
		echo "Password: ".$password;
		echo "<br>";

	} else {
		echo "<h3><b>Fill all the details of form</b></h3>";
	}
}





	?>

	

</body>	
</html>