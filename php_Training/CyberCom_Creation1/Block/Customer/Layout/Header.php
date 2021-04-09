<?php
namespace Block\Customer\Layout;
\Mage::loadFileByClassName('Block\Core\Template'); 

class Header extends \Block\Core\Template{
	public function __construct(){
		parent::__construct();
		$this->setTemplate('./View/customer/layout/header.php');
	}

	public function getParentCategories(){
		$categories = \Mage::getModel('Model\Category');
		$query = "SELECT name FROM `categories` WHERE `parentId` = 0";
		$parentCategories = $categories->fetchAll($query);
		return $parentCategories;
	}

}

 ?>
