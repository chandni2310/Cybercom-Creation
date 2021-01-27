<?php  
echo '<h3> For each loop</h3><br>';
$food=array('Unhealthy'=>array('ice-cream','Pizza'),'Healthy'=>array('Salad','Vegetables'));

foreach ($food as $element => $inner_element) {
	echo '<strong>'.$element.'</strong><br>';
	foreach ($inner_element as $item) {
		echo $item.'<br>';
	}
	
}

?>