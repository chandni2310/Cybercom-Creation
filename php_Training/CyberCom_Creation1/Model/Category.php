<?php
namespace Model;
\Mage::loadFileByClassName('Model\Core\Table');
\Mage::loadFileByClassName('Model\Core\Adapter');

class Category extends Core\Table{


    public function __construct(){
        parent::__construct();
        $this->setTableName('categories');
        $this->setPrimaryKey('categoryId');
    }

    public function updatePathId(){
    	if(!$this->parentId){
			$pathId = $this->categoryId;
			
		} else{
			$parent = \Mage::getModel('Model\Category');
			$parent = $parent->load($this->parentId);
			if(!$parent){
				throw new Exception("unable to load parent");
				
			}
			$pathId = $parent->pathId.'='.$this->categoryId;

		}
		$this->pathId = $pathId;
		return $this->save();

    }

    public function updateChildrenpathIds($categoryPathId, $parentId = null){
    	$categoryPathId = $categoryPathId."=";
		$query = "SELECT * FROM `categories` WHERE `pathId` LIKE '{$categoryPathId}%' ORDER BY `pathId` ASC";
		$categories = $this->fetchAll($query);
		/*echo '<pre>';
		print_r($categories);
*/
		if($categories){
			foreach ($categories as  $row) {
                $row = \Mage::getModel('Model\Category')->load($row->categoryId);

                if($parentId){
                    $row->parentId = $parentId;
                }

				$row->updatePathId();
			}
		}
    }

    


   
}

?>