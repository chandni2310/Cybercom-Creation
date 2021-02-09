<?php  

class Example{

	public function __construct($name){
		//echo 'How are you<br>';
		$this->Display($name);
	}

	public function Display($name){
		echo 'Hello!! '.$name;
	}

}

$chandni=new Example('chandni');
//$chandni->Display();



?>