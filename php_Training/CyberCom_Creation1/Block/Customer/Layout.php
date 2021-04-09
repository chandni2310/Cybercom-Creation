<?php 
namespace Block\Customer;
\Mage::loadFileByClassName('Block\Core\Template');


class Layout extends \Block\Core\Template{
	protected $children =  [];

	public function __construct(){
		parent :: __construct();
		//$this->setController($controller);
		$this->setTemplate('./View/customer/layout.php');
		$this->prepareChildren();

	}


	public function prepareChildren(){
		$this->addChild(\Mage::getBlock('Block\Customer\Layout\Content'), 'content');
		$this->addChild(\Mage::getBlock('Block\Customer\Layout\Header'), 'header');
		$this->addChild(\Mage::getBlock('Block\Customer\Layout\Footer'), 'footer');
		$this->addChild(\Mage::getBlock('Block\Customer\Layout\Left'), 'left');



	}

}



 ?>