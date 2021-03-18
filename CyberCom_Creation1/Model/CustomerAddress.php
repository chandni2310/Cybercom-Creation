<?php
namespace Model;
\Mage::loadFileByClassName('Model\Core\Table');
\Mage::loadFileByClassName('Model\Core\Adapter');

class CustomerAddress extends Core\Table{

    public function __construct(){
        parent::__construct();
        $this->setTableName('customer_address');
        $this->setPrimaryKey('addressId');
    }
}

?>