<!DOCTYPE html>
<html>
<head>
	<title>User Form</title>
	<style type="text/css">
		input, textarea,select {
			background-color:LightGreen;

		}
		td {
			background-color:DeepSkyBlue;
		}
		
		table{
			width: 50%;
			height: 90%;
		}
		.error{
			color: red;
			font-size: 20px;
		}
	</style>
	<script type="text/javascript" src="form_1.js"></script>

</head>
<body>

	<?php

	$nameErr=$passwordErr=$addressErr=$gamesErr=$genderErr=$ageErr="";
	$name=$password=$address=$gender=$age="";
	

	if($_SERVER['REQUEST_METHOD']=='POST') {

	if(empty($_POST['name'])){

		$nameErr='Name is required';
	} else {
		$name=input_data($_POST['name']);
		if(!preg_match("/^[a-zA-Z ]*$/",$name)) {
			$nameErr="only characters are allowed";
		}
	}

	if(empty($_POST['password'])){
		$passwordErr='enter yr password';
	} else{
		$password=input_data($_POST['password']);
	}

	if(empty($_POST['address'])){
		$addressErr='enter yr address';
	} else{
		$address=input_data($_POST['address']);
	}


	if(empty($_POST['games'])) {
	$gamesErr='select games';
}


   if(empty($_POST['gender'])) {
		$genderErr="Gender is required";
	} else {
		$gender=input_data($_POST['gender']);
	}

	if(empty($_POST['age'])) {
		$ageErr="Select yr age";
	} else{
		$age=input_data($_POST['age']);
	}


}

function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
}  

?>


<div class="container">








	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" onsubmit="return (validate());"  name="user_form">
	<table border="1" align="center">
		<tr>
			<td colspan="2" style="color:red; background-color: LemonChiffon"><center><h2>User Form</h2></center></td>
		</tr>
		<tr>
			<td>Enter Name</td>
			<td><input type="text" name="name" id="name" pattern="[A-Za-z].{2,}" title="Name must contain charaters">
				<span id="err_fname" class="error">*<?php echo $nameErr;?></span></td>
		</tr>
		<tr>
			<td>Enter Password</td>
			<td><input type="password" name="password" id="password">
				<span id="err_fname" class="error">*<?php echo $passwordErr;?></span></td>
		</tr>
		<tr>
			<td>Enter Address</td>
			<td><textarea name="address" id="address" rows="4" cols="25"></textarea>
				<span id="err_fname" class="error">*<?php echo $addressErr;?></span></td>
		</tr>
		<tr>
			<td>Select Game</td>
			<td>
				<input type="checkbox" name="games[]" value="hockey" id="hockey"><label>Hockey</label><br>
				<input type="checkbox" name="games[]" value="football" id="football"><label>Football</label><br>
				<input type="checkbox" name="games[]" value="badminton" id="badminton"><label>Badminton</label><br>
				<input type="checkbox" name="games[]" value="cricket" id="cricket"><label>Cricket</label>
				<span id="err_fname" class="error">*<?php echo $gamesErr;?></span>
			</td>
		</tr>
		<tr>
			<td>Gender</td>
					<td><input type="radio" name="gender" id="male" value="male">Male <input type="radio" name="gender" id="female" value="female"> Female
					<br><span id="err_gender" class="error">* <?php echo $genderErr;?></span>
				 </td>
		</tr>
		<tr>
			<td>Select your age</td>
			<td><select name="age" id="age">
				<option value="select">select</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
			</select>
			<span id="err_fname" class="error">*<?php echo $ageErr;?></span></td>
		</tr>
		<tr>
			<td colspan="2"><center><input type="file" name="myfile"></center></td>
		</tr>
		<tr>
			<td colspan="2"><center><input type="reset" name="reset" value="RESET"> <input type="submit" name="submit" value="SUBMIT"></center></td>
		</tr>
	</table>
</form>
</div>

<?php 
if(isset($_POST['submit'])) {
	if($nameErr==""&& $passwordErr=="" && $addressErr=="" && $genderErr=="" &&$gamesErr=="" && $ageErr=="") {
		echo "<h2><b>Form submitted successfully!! <b><h2>";

		echo "<h3>Details<h3>";

		echo "First Name: ".$name;
		echo "<br>";
		echo "Password: ".$password;
		echo "<br>";
		echo "Address: ".$address;
		echo "<br>";
        
        echo 'Games selected are:<br>';
		foreach($_POST['games'] as $games) {
		
		echo '<p>'.$games.'</p>';
		
	}

	    echo "Gender: ".$gender;
		echo "<br>";

		echo "Age: ".$age;
		echo "<br>";
	}
	else {
	echo 'Fill all the details';
}
}




?>

</body>
</html>