<?php  

$filename='final_name.txt';
$handle=fopen($filename,'r');
$size=filesize($filename);

$info=fread($handle,$size);
$info_array=explode(',',$info);

foreach ($info_array as $f_name) {
	# code...
	echo $f_name.'<br>';
}

$result=implode('-',$info_array);
echo $result;



?>