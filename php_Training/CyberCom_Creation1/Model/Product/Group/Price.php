<?php
namespace Model\Product\Group;
\Mage::loadFileByClassName('Model\Core\Table');
\Mage::loadFileByClassName('Model\Core\Adapter');

class Price extends \Model\Core\Table{

    public function __construct(){
        parent::__construct();
        $this->setTableName('product_group_price');
        $this->setPrimaryKey('entityId');
    }
}

?>