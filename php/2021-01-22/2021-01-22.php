<?php
//echo command
echo "Hello world ";
echo "<br>";

//we can even put html tags inside echo, but it is not a good practice to do so
echo "<strong> Hello Hi </strong>";
echo "<br>";
print("Helloo!!");
echo "<br>";
$txt="hello PHP";
echo "<br>";

//Error reporting
/*error_reporting(0);
error_reporting('E_ALL');
ini_set('error_reporting', 'E_ALL');
*/

//variables in PHP
$a='Hello PHP';
$b=23;

echo $a;
echo "<br>";
echo $b;
echo "<br>";

//Concatenation
echo "The value of var a is".$a." "."The value of var b is ".$b;

echo "<br>";

//if-else statements
$text='something';
if($text=='something'){
	echo 'True';
}
else{
	echo 'False';
}



?>

<!--Embedding PHP inside html tag-->
<input type="text" name="name" value="<?php echo $txt; ?>">