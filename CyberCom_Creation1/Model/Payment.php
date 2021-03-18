<?php
namespace Model;
\Mage::loadFileByClassName('Model\Core\Table');
\Mage::loadFileByClassName('Model\Core\Adapter');

class Payment extends Core\Table{
    public function __construct(){
        parent::__construct();
        $this->setTableName('payment');
        $this->setPrimaryKey('methodId');
    }

       

}

?>