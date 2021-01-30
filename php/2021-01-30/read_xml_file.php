<?php  
 $xml = simplexml_load_file('example.xml');

//echo $xml->producer[1]->name.' is '.$xml->producer[1]->age;

foreach ($xml->producer as $x) {
	//echo $x->name.' is '.$x->age.'<br>';
	# code...
	echo $x->name.' ('.$x->age.')'.'<br>';
	foreach ($x->show as $show) {
		echo $show->showname.' releasesd on '.$show->showdate.'<br>';
		# code...
	}
}

?>