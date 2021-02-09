<?php  

function divide($n1,$n2){
	if($n2==0){
		throw new Exception("can not divide by zero");
		

	} else{
		return $n1/$n2;
	}

}

echo divide(10,0);



?>