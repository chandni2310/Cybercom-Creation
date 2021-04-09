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

     public function getBillingAddress()
    {
        $address = \Mage::getModel('Model\CustomerAddress');

        if (!$this->customerId) {
            return false;
        }
        
        $query = "SELECT * FROM `{$address->getTableName()}` WHERE `customerId` = '{$this->customerId}' and `addressType` = 'billing'";

        return $address->fetchRow($query);
    }

    public function getShippingAddress()
    {
        $address = \Mage::getModel('Model\CustomerAddress');

        if (!$this->customerId) {
            return false;
        }
        $query = "SELECT * FROM `{$address->getTableName()}` WHERE `customerId` = '{$this->customerId}' and `addressType` = 'shipping'";

        return $address->fetchRow($query);
    }
}

?>