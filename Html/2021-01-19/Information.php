
	<?php
	if(isset($_POST['submit'])){
		$firstname=$_POST['fname'];
		$lastname=$_POST['lname'];
		$day=$_POST['dob-day'];
		$month=$_POST['dob-month'];
		$year=$_POST['dob-year'];
		$gender=$_POST['gender'];
		$email=$_POST['email'];
		$add=$_POST['address'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		$phone=$_POST['phone'];


		echo"Form details:";
		echo"<table border='1'>
		<tr>
		<td>First name</td>
		<td>Last name</td>
		<td>Date of Birth</td>
		<td>Gender</td>
		<td>Email</td>
		<td>City</td>
		<td>State</td>
		<td>Phone</td>
		</tr>";

		echo"<tr>";
		echo "<td>" . $firstname . "</td>";
		echo "<td>" . $lastname . "</td>";
		echo "<td>" . $day. "</td>";
		echo "<td>" . $gender. "</td>";
		echo "<td>" . $email. "</td>";
		echo "<td>" . $city. "</td>";
		echo "<td>" . $state. "</td>";
		echo "<td>" . $phone. "</td>";

		echo"</table>";







	}

	?>

