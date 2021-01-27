<?php  
//strpos()--> it takes 3 argument last one is offset which indicates index from where to start and it is optional
$str1="today is a sunny day";
echo strpos($str1, 'sunny');
echo '<br>';

$offset=0;
$find='is';
$find_len=strlen($find);
$str="This is a string. and it is example of a string position";

while($string_pos=strpos($str,$find,$offset)) {
	echo '<strong>'.$find.'</strong> found at position '.$string_pos.'<br>';
	$offset=$string_pos+$offset;
}




?>