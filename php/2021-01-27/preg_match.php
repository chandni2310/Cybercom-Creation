<?php 
function has_space($str1) {
	if(preg_match('/ /',$str1)){
		return true;
	}
	else{
		return false;
	}
}

//$str='NoSpace';
$str='It has space';

if(has_space($str)){
	echo 'Has space';
}
else {
	echo 'Has no space';
}




?>