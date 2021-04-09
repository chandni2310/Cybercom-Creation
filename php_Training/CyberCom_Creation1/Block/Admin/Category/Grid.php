<?php
namespace Block\Admin\Category; 
\Mage::loadFileByClassName('Block\Core\Template');
\Mage::loadFileByClassName('Model\Core\Url');


class Grid extends \Block\Core\Template{

	protected $category = [];
	protected $categoryOptions = [];

	public function __construct(){
		parent::__construct();
		//$this->setController($controller);
		$this->setTemplate('./View/admin/category/category.php');
		$this->setCategory();
	}


	
	public function setCategory($category = null){
		if(!$category){
			$query = "SELECT * FROM `categories` ORDER BY `pathId` ASC";
			$category = \Mage::getModel('Model\Category');
			$category = $category->fetchAll($query);
		}


		$this->category=$category;
		return $this;

	}

	public function getCategory(){
		
		return $this->category;
	}

	public function getName($category){
		//return $category->name;
		$categoryModel = \Mage::getModel('Model\Category');

		if(!$this->categoryOptions){
		$query = "SELECT `categoryId`,`name` FROM `{$categoryModel->getTableName()}`";
		$this->categoryOptions = $categoryModel->getAdapter()->fetchPairs($query);

		}

		$pathIds = explode("=",$category->pathId);
			foreach ($pathIds as $key => &$id) {
				if(array_key_exists($id,$this->categoryOptions)){
					$id = $this->categoryOptions[$id];
				}
			}
		$name = implode("=>",$pathIds);
		return $name;

	}

	

}


 ?>