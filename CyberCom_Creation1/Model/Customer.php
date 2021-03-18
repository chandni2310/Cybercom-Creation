<?php
namespace Model;
\Mage::loadFileByClassName('Model\Core\Table');
\Mage::loadFileByClassName('Model\Core\Adapter');

class Customer extends Core\Table{

    public function __construct(){
        parent::__construct();
        $this->setTableName('customer');
        $this->setPrimaryKey('customerId');
    }
}

?>