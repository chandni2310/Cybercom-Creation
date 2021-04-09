<?php 
namespace Block\Template;
\Mage::loadFileByClassName('Block\Core\Template');


class Header extends \Block\Core\Template{
	public function __construct(){
		parent :: __construct();

		$this->setTemplate('./View/admin/header.php');
		

	}

}


 ?>