<!DOCTYPE html>
<html>
<head>
	<title>User form 4</title>
	<link rel="stylesheet" type="text/css" href="form_4.css">
</head>
<body>
	<div class="container" align="center">
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
			<div class="header">CONTACT US</div>
			<div class="box">
				<div><input type="text" name="name" id="name" placeholder="Name..."><span class="error">*<br><label id="nameErr"></label></span></div>
				<div><input type="text" name="email" id="email" placeholder="Email...">
				<span class="error">*<br><label id="emailErr"></label></span></div>
				<div><input type="text" name="subject" id="subject" placeholder="Subject...">
				<span class="error">*<br><label id="subjectErr"></label></span></div>
				<div><textarea class="textarea" type="text" name="message" id="message" placeholder="Message..."></textarea>
					<span class="error">*<br><label id="messageErr"></label></span></div>
		
			</div>	
			<div><button class="btn-send" name="send" id="send" onclick="return validate()">SEND MESSAGE</button></div>
		
			
	
	
	</form>
</div>
	<script type="text/javascript" src="form_4.js"></script>


<?php

if($_SERVER['REQUEST_METHOD']=='POST') {


	if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];

		echo "<h3><center>Submitted Successfully</center></h3>";
		echo "<br>";

		if ($name !== '' && $email !== '' && $subject !== '' && $message !== '') {

			echo 'Name: '.$name;
			echo "<br>";
			echo 'Email: '.$email;
			echo "<br>";
			echo 'Subject: '.$subject;
			echo "<br>";
			echo 'Message: '.$message;
			echo "<br>";
		} else {
			echo '<p>No empty values allowed';
		}
	} else{
		echo '<div>Please enter values</div>';
	}



	$conn=mysqli_connect('localhost','root','','cybercom_creation');

if(!$conn){
	die('Error'.mysqli_connect_error());
} else {
	echo 'Connected successfully';
	echo "<br>";
}


 $sql = "INSERT INTO form4  VALUES (NULL,'$name',  
            '$email','$subject','$message')";

  if(mysqli_query($conn,$sql)) {
  	echo "Added data successfully<br>";
  } else {
  	echo 'Error'.mysqli_error($conn);
  	echo "<br>";
  }

}


?>	
</body>
</html>