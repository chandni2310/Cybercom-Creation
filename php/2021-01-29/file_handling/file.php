<?php 
$f_write=fopen('name1.txt','w');

fwrite($f_write,'Chandni Parikh '."\n");
fwrite($f_write,'Harshil Parikh');

fclose($f_write);
echo 'File closed';



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1><center>File handling</center></h1>

</body>
</html>