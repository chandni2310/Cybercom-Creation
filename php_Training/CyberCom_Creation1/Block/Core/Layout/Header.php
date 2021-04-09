<?php 
namespace Block\Core\Layout;
//require_once './Model/Core/Url.php';
\Mage::loadFileByClassName('Block\Core\Template');
\Mage::loadFileByClassName('Model\Core\Url');



class Header extends \Block\Core\Template{
	public function __construct(){
		parent :: __construct();
		$this->setTemplate('./View/core/layout/header.php');
	}
}
 ?>