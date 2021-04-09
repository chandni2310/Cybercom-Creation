<?php 
namespace Model;
\Mage::loadFileByClassName('Model\Core\Adapter');
\Mage::loadFileByClassName('Model\Core\Table');

class ProductMedia extends Core\Table{
	public function __construct(){
        parent::__construct();
        $this->setTableName('productmedia');
        $this->setPrimaryKey('imageId');
    }

    public function deleteImage($id){
    	$productMedia = \Mage::getModel('Model\ProductMedia');
    	$productMedia = $productMedia->getAdapter()->fetchAll("SELECT * FROM `{$this->getTableName()}` WHERE `{$this->getPrimaryKey()}` IN ($id)");
    	echo '<pre>';
    	foreach ($productMedia as $key =>$value) {
    		$imageName = ($value['image']);
    		unlink('Image/Product/'.$imageName);
    	}


    }

    public function saveImage($productId, $thumbId, $smallId, $baseId){
        $sql = "UPDATE `{$this->getTableName()}` SET ";
        if (!empty($smallId)) {
            $sql .= "`small` =  if(`{$this->getPrimaryKey()}` ={$smallId}, 1, 0), ";

        }
        if (!empty($thumbId)) {
            $sql .= "`thumb` = if(`{$this->getPrimaryKey()}`={$thumbId}, 1, 0), ";
        }
        if (!empty($baseId)) {
            $sql .= "`base` = if(`{$this->getPrimaryKey()}`={$baseId}, 1, 0)";
        }

        $sql .= " WHERE `productId`='{$productId}'";
        $result = $this->getAdapter()->update($sql);

    }

    

}


 ?>