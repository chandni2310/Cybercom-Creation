<?php 
if(isset($_POST['name'])) {
	$name=$_POST['name'];
	if (!empty($name)) {
		$handle=fopen('final_name.txt','a');
		fwrite($handle, $name."\n");
		fclose($handle);

		$count=1;
		echo 'Names in file are <br>' ;
		$read=file('final_name.txt');
		$r_count=count($read);

		foreach ($read as $fname ) {
			echo trim($fname);
			if($count<$r_count) {
				echo ', ';
			}
			$count++;
			# code...
		}
	//echo 'ok';

	}
	else {
		echo 'Pls enter your name';
	}
}



?>

<form action="append_file.php" method="POST">
	<label>Name:</label><br>
	<input type="text" name="name"><br><br>
	<input type="submit" name="" value="SUBMIT">
</form>