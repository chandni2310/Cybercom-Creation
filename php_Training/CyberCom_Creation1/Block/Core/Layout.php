<?php 
namespace Block\Core;
\Mage::loadFileByClassName('Block\Core\Template');
\Mage::loadFileByClassName('Block\Core\Layout\Message');


class Layout extends Template{


	public function __construct(){
		parent :: __construct();
		//$this->setController($controller);
		$this->setTemplate('./View/core/layout/oneColumn.php');
		$this->prepareChildren();

	}


	public function prepareChildren(){
		$this->addChild(\Mage::getBlock('Block\Core\Layout\Content'), 'content');
		$this->addChild(\Mage::getBlock('Block\Core\Layout\Header'), 'header');
		$this->addChild(\Mage::getBlock('Block\Core\Layout\Footer'), 'footer');
		$this->addChild(\Mage::getBlock('Block\Core\Layout\Left'), 'left');



	}

	public function getContent(){
		return $this->getChild('content');

	}

	public function getHeader(){
		return $this->getChild('header');
		
	}

	public function getFooter(){
		return $this->getChild('footer');
		
	}

	public function getLeft(){
		return $this->getChild('left');
		
	}



	
}

 ?>