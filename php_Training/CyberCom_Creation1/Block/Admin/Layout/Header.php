<?php
namespace Block\Admin\Layout;
\Mage::loadFileByClassName('Block\Core\Layout\Header'); 
\Mage::loadFileByClassName('Block\Core\Template');
\Mage::loadFileByClassName('Model\Core\Url');

class Header extends \Block\Core\Template{
	public function __construct(){
		parent::__construct();
		$this->setTemplate('./View/admin/layout/header.php');
	}
}

 ?>
