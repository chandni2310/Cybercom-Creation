<?php 
namespace Block\Template;
\Mage::loadFileByClassName('Block\Core\Template');


class Left extends \Block\Core\Template{
	public function __construct(){
		parent :: __construct();

		//$this->setController($controller);
		$this->setTemplate('./View/admin/left.php');
		

	}

}


 ?>