<?php 
 
//$num=1;
//$num=2;
$num=5;

 switch ($num) {
 	case 1:
 		echo 'value is one';
 		break;

 	case 2:
 		echo 'value is two';
 		break;
 	
 	default:
 		echo 'not a number';
 		break;
 }



echo '<br>';
 $day='Sunday';

 switch ($day) {
 	case 'Sunday':
 	case 'Saturday':
 		echo 'It is weekend';
 		break;

 	default:
 		echo 'It is a working day';
 		break;
 }


?>