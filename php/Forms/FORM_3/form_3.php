<!DOCTYPE html>
<html>
<head>
	<title>Form 3</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="form_3.css">
</head>
<body>

	<?php  

$fnameErr= $lnameErr= $dobErr=$genderErr=$countryErr=$emailErr=$phoneErr=$passwordErr=$cpasswordErr="";
$fname=$lname=$dob=$gender=$country=$email=$phone=$password=$cpassword="";


if($_SERVER['REQUEST_METHOD']=='POST'){

	if(empty($_POST['f_name'])){

		$fnameErr='Name is required';
	} else {
		$fname=input_data($_POST['f_name']);
		if(!preg_match("/^[a-zA-Z ]*$/",$fname)) {
			$fnameErr="only characters are allowed";
		}
	}


	if(empty($_POST['l_name'])){

		$lnameErr=' Last Name is required';
	} else {
		$lname=input_data($_POST['l_name']);
		if(!preg_match("/^[a-zA-Z ]*$/",$lname)) {
			$lnameErr="only characters are allowed";
		}
	}

	if(empty($_POST['dob_date']) && empty($_POST['dob_month']) && empty($_POST['dob_year'])) {
		$dobErr="Select yr birthate";
	} else{
		$dob=$_POST['dob_date'].'-'.$_POST['dob_month'].'-'.$_POST['dob_year'];
	}

	if(empty($_POST['gender'])) {
		$genderErr="Gender is required";
	} else {
		$gender=input_data($_POST['gender']);
	}

	if(empty($_POST['country'])) {
		$countryErr="Country is required";
	} else {
		$country=input_data($_POST['country']);
	}

	if(empty($_POST['email'])) {
		$emailErr="Email is required";
	} else {
		$email=input_data($_POST['email']);
		if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
			$emailErr="Not proper email format";
		}
	}

	if(empty($_POST['phone'])) {
		$phoneErr="phone no is required";
	} else {
		$phone=input_data($_POST['phone']);
		if(!preg_match("/^[0-9]*$/",$phone)) {
			$phoneErr="must contain digits";

		}
		if(strlen($phone)!=10){
			$phoneErr="Must be of 10 digits";
		}
	}

	if(empty($_POST['password'])){
		$passwordErr='enter yr password';
	} else{
		$password=input_data($_POST['password']);
	}

	if(empty($_POST['c_password'])){
		$cpasswordErr='enter yr password again';
	} else {
		$cpassword=input_data($_POST['c_password']);
		if($cpassword!=$password){
			$cpasswordErr="password must be same";
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




	<div class="container">
		<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" name="form_3" onsubmit="return validate()" >
			<table>
				<tr>
					<td colspan="2" class="hb">Sign Up</td>
				</tr>
				<tbody>
				<tr>
					<td>First Name</td>
					<td><input type="text" name="f_name" id="f_name" placeholder="Enter First Name">
						<br><span id="err_fname" class="error">*<?php echo $fnameErr;?></span>
					 </td>
				</tr>
				<tr>
					<td>Last Name</td>
					<td><input type="text" name="l_name" id="l_name" placeholder="Enter Last Name">
						<br><span id="err_lname" class="error">* <?php echo $lnameErr;?></span>
					</td>
				</tr>
				<tr>
					<td>Date of Birth</td>
					<td><select name="dob_date" id="dob_date">
						<option value="">Date</option>
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>
                        <select name="dob_month" id="dob_month">
                            <option value="">Month</option>
                            <option value="01">January</option>
                            <option value="02">February</option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                        <select name="dob_year" id="dob_year">
                            <option value="">Year</option>
                            <option value="2012">2020</option>
                            <option value="2011">2019</option>
                            <option value="2010">2018</option>
                            <option value="2009">2017</option>
                            <option value="2008">2016</option>
                            <option value="2007">2015</option>
                            <option value="2006">2014</option>
                            <option value="2005">2013</option>
                            <option value="2012">2012</option>
                            <option value="2011">2011</option>
                            <option value="2010">2010</option>
                            <option value="2009">2009</option>
                            <option value="2008">2008</option>
                            <option value="2007">2007</option>
                            <option value="2006">2006</option>
                            <option value="2005">2005</option>
                            <option value="2004">2004</option>
                            <option value="2003">2003</option>
                            <option value="2002">2002</option>
                            <option value="2001">2001</option>
                            <option value="2000">2000</option>
                            <option value="1999">1999</option>
                            <option value="1998">1998</option>
                            <option value="1997">1997</option>
                            <option value="1996">1996</option>
                            <option value="1995">1995</option>
                            <option value="1994">1994</option>
                            <option value="1993">1993</option>
                            <option value="1992">1992</option>
                            <option value="1991">1991</option>
                            <option value="1990">1990</option>
					</select>
					<br><span id="err_dob" class="error"> * <?php echo $dobErr;?></span>
				 </td>
				</tr>
				<tr>
					<td>Gender</td>
					<td><input type="radio" name="gender" id="male" value="male">Male <input type="radio" name="gender" id="female" value="female"> Female
					<br><span id="err_gender" class="error">* <?php echo $genderErr;?></span>
				 </td>
				</tr>
				<tr>
					<td>Country</td>
					<td><select name="country" id="country">
						<option value="">Country</option>
                        <option value="India">India</option>
                        <option value="China">China</option>
                        <option value="USA">USA</option>
                        <option value="Canada">Canada</option>
                        <option value="Japan">Japan</option>
                        
					</select>
				<br><span id="err_country" class="error"> * <?php echo $countryErr;?></span>
			 </td>

				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" id="email" placeholder="Enter Email">
						<br><span id="err_email" class="error">* <?php echo $emailErr;?></span>
					 </td>
				</tr>
				<tr>
					<td>Phone</td>
					<td><input type="tel" name="phone" id="phone" placeholder="Enter Phone">
						<br><span id="err_phone" class="error">* <?php echo $phoneErr;?></span>
					</td>
				</tr>
				<tr>
					<td>Enter Password</td>
					<td><input type="password" name="password" id="password">
						<br><span id="err_password" class="error">* <?php echo $passwordErr;?></span>
					 </td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="password" name="c_password" id="c_password">
						<br><span id="err_cpassword" class="error">* <?php echo $cpasswordErr;?></span></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="checkbox" name="tnc" id="tnc">I agree to terms and conditions.
						<br><span id="err_tnc" class="error"></span></td>
				</tr>
			</tbody>
				<tr>
					<td colspan="2" align="right" class="hb">
						<input type="submit" name="submit" value="SUBMIT" onsubmit="return validate()">
						<input type="reset" name="reset" value="RESET">
					</td>
				</tr>
			</table>
		</form>
	</div>

	<script type="text/javascript" src="form_3.js"></script>
	<?php  
if(isset($_POST['submit'])) {
	if($fnameErr==""&& $lnameErr=="" && $dobErr=="" && $genderErr=="" &&$countryErr=="" && $emailErr=="" &&$phoneErr=="" && $passwordErr=="" && $cpasswordErr=="") {
		echo "<h2><b>Form submitted successfully!! <b><h2>";

		echo "<h3>Details<h3>";

		echo "First Name: ".$fname;
		echo "<br>";
		echo "Last Name: ".$lname;
		echo "<br>";
		echo "Birth Date: ".$dob;
		echo "<br>";
		echo "Gender: ".$gender;
		echo "<br>";
		echo "Country: ".$country;
		echo "<br>";
		echo "Email: ".$email;
		echo "<br>";
		echo "Phone Number: ".$phone;
		echo "<br>";

	} else {
		echo "<h3><b>Fill all the details of form</b></h3>";
	}
}



?>


</body>
</html>

