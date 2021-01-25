<?php 
//Basic function

function myName() {
	echo 'Name is Chandni<br>';
	
}

myName();

//Function with arguments

function add($n1,$n2){
	echo $n1+$n2;
	echo '<br>';

}
add(10,20);

function displayDate($day, $month, $year){
	echo 'The date is '.$day.' /'.$month.'/ '.$year.'<br>';
}

displayDate(25,'January',2021);
displayDate(23,'October',1999);


//function with return value
function addition($n1,$n2){
	$result=$n1+$n2;
	return $result;
}

function div($n1,$n2){
	$result=$n1/$n2;
	return $result;
}

$final_result=div(addition(10,10), addition(5,5));
echo $final_result;





?>