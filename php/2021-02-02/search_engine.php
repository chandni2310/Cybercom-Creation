<?php  

require 'connect.inc.php';

if(isset($_POST['submit'])){
	$search=$_POST['search'];
	if(!empty($search)){
		$sql="select name from names where name like'%".mysqli_real_escape_string($conn,$search)."%' ";
		if($result=mysqli_query($conn,$sql)){
			if($row=mysqli_num_rows($result)>0){
				while($info=mysqli_fetch_assoc($result)){
					echo $info['name']."<br>";
				}
			}
			else {
				echo 'no mathcing data';
			}
		} else{
			echo mysqli_erro($conn);
		}
	} else {
		echo 'Enter value';
	}
}






?>


<!DOCTYPE html>
<html>
<head>
	<title>Search Engine</title>
</head>
<body>
	<form action="search_engine.php" method="POST">
		<input type="text" name="search" >
		<br><br>
		<input type="submit" name="submit">
	</form>

</body>
</html>