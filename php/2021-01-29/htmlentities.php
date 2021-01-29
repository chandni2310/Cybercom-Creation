<?php
if(isset($_GET['day'])&& isset($_GET['month']) && isset($_GET['year'])) {
	$day=htmlentities($_GET['day']);
	$month=htmlentities($_GET['month']);
	$year=htmlentities($_GET['year']);

	if(!empty($day) && !empty($month) && !empty($year)) {
		echo 'It is ' .$day.' '.$month.' '.$year;
	} else {
		echo 'Fill all details first';
	}


}  


?>

<form action="htmlentities.php" method="GET">
	<label>DAY:</label><br>
	<input type="text" name="day"><br><br>
	<label>MONTH:</label><br>
	<input type="text" name="month"><br><br>
	<label>YEAR:</label><br>
	<input type="text" name="year"><br><br>
	<input type="submit" name="submit" value="SUBMIT">



</form>