<?php  

$directory='ListFolder';
if($handle=opendir($directory.'/')) {
	echo 'Looking into '.$directory.'<br>';
}
while($file=readdir($handle)) {
	if($file!='.' && $file!='..') {
	echo '<a href="'.$directory.'/'.$file.'">'.$file.'</a><br>';
}
}


?>