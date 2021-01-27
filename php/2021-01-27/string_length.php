<?php  
//str_length is used to get number of characters present in a string
$str="Hello how are you?";
$len=strlen($str);
echo $len;
echo '<br>';

for($i=0;$i<$len;$i++) {
	echo $str[$i].'<br>';
}






?>