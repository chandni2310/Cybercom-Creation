<?php 
namespace Block\Customer\Header\Category;
\Mage::loadFileByClassName('Block\Core\Template');

class Grid extends \Block\Core\Template{

	public function __construct(){
		parent :: __construct();
		$this->setTemplate('./View/customer/header/category/grid.php');

	}



	public function getParentCategories(){
		$categories = \Mage::getModel('Model\Category');
		$query = "SELECT name FROM `categories` WHERE `parentId` = 0";
		$parentCategories = $categories->fetchAll($query);
		return $parentCategories;
	}


}



 ?>