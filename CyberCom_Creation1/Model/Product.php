<?php
namespace Model;
\Mage::loadFileByClassName('Model\Core\Table');
\Mage::loadFileByClassName('Model\Core\Adapter');

class Product extends Core\Table{
    public function __construct(){
        parent::__construct();
        $this->setTableName('product');
        $this->setPrimaryKey('productId');
    }


    public function addColumn($productData){
    	//print_r($productData);
    	foreach ($productData as $key=>$value) {
    		
    	$query = "ALTER TABLE `product` ADD {$key} varchar(60)";
        $this->getAdapter()->update($query);
    	}

    }


    
               

        

}

?>