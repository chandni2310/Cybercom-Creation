<?php
//Array is used to store different types of value in a single variable
$month=array('january','february','march','april');
echo '<h3>Arrays</h3>';
echo '<br>';
echo $month[2];
echo '<br>';
//print_r is used to print all elements of array;
print_r($month);
echo '<br>';
$month[4]='may';
print_r($month);
echo '<br>';


//Associative array
echo '<h3> Associative Arrays</h3>';
echo '<br>';
$cars=array('swift'=>20,'alto'=>25,'audi'=>45);
echo $cars['swift'];
echo '<br>';
print_r($cars);
echo '<br>';
$cars['wagnar']=12;
print_r($cars);
echo '<br>';



//Multidimensional array -->array inside array
echo '<h3> Multidimensional Arrays</h3>';
echo '<br>';

$food=array('Unhealthy'=>array('ice-cream','Pizza'),'Healthy'=>array('Salad','Vegetables'));

print_r($food);
echo '<br>';
echo $food['Unhealthy'][1];



?>