<?php
namespace Model;
\Mage::loadFileByClassName('Model\Core\Table');
\Mage::loadFileByClassName('Model\Core\Adapter');

class Shipping extends \Model\Core\Table{
    public function __construct(){
        parent::__construct();
        $this->setTableName('shipping');
        $this->setPrimaryKey('shippingId');
    }


   
}

?>