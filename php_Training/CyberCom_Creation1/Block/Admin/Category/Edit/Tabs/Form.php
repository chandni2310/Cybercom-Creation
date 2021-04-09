<?php 
namespace Block\Admin\Category\Edit\Tabs;
\Mage::loadFileByClassName('Block\Core\Edit');


class Form extends \Block\Core\Edit{

	protected $category = [];
	protected $categoryOptions = [];

	public function __construct(){
		parent::__construct();
		$this->setTemplate('./View/admin/category/edit/tabs/form.php');
	}

	public function getParentOptions(){

		/*$data = new Model_Category();
		$categories = $data->fetchAll();
		return $categories;*/
		if($this->categoryOptions){
			return $this->categoryOptions;
		}
		$query = "SELECT `categoryId`,`name` FROM `{$this->getTableRow()->getTableName()}`";
		$options = $this->getTableRow()->getAdapter()->fetchPairs($query);

		$query = "SELECT `categoryId`,`pathId` FROM `{$this->getTableRow()->getTableName()}`";
		$this->categoryOptions = $this->getTableRow()->getAdapter()->fetchPairs($query);

		if($this->categoryOptions){
			foreach ($this->categoryOptions as $categoryId => &$pathId) {
				$pathIds = explode("=",$pathId);
				foreach ($pathIds as $key => &$id) {
					if(array_key_exists($id,$options)){
						$id = $options[$id];
					}
				}
				$pathId = implode("=>",$pathIds);
				//print_r($pathId);

			}

		}
		return $this->categoryOptions;
	}



	


}

 ?>