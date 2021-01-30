<?php 

if (isset($_POST['contact_name']) && isset($_POST['contact_email']) && isset($_POST['message'])) {
		$contact_name = $_POST['contact_name'];
		$email = $_POST['contact_email'];
		$message = $_POST['message'];

		if (!empty($contact_name) && !empty($email) && !empty($message)) {
			if (strlen($contact_name) > 25 || strlen($email) > 50 || strlen($message) > 1000) {
				echo 'Sorry, you exceeded the length';
			} else {
			$sendTo = 'harshilparikh1234@gmail.com';
$subject = 'Form submitted';
$body = $contact_name."\n".$message;
$header = 'From: '.$email;

			if (@mail($sendTo, $subject, $body,$header)) {
					echo "Thanks for submitting the form";
			} else {
				echo 'Error occured';
			}
		}} else {
			echo 'Pls fill all the fields';
		}
}


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = 'POST'>
		Name :<input type="text" name="contact_name"><br><br>
		Email :<input type="text" name="contact_email"><br><br>
		Message :<textarea name="message" rows="4" cols="20"></textarea><br><br>
		<input type="submit" name="submit" value="SUBMIT">
	</form>

</body>
</html>