<?php 
//Logical operators AND--&&, OR--||

//$num=754;
$num=999.99;

$upper=1000;
$lower=500; 

if($num>=$lower && $num<=$upper){
	echo "Valid in range";
}
else{
	echo 'Number must be between'.$lower.' and'.$upper ;
}

?>