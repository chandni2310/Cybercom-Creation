<?php 

namespace Model\Attribute;
\Mage::loadFileByClassName('Model\Core\Table');
\Mage::loadFileByClassName('Model\Core\Adapter');

class Option extends \Model\Core\Table{
    public function __construct(){
        parent::__construct();
        $this->setTableName('attribute_option');
        $this->setPrimaryKey('optionId');
    }

     public function deleteOptions($options)
    {
        $condition = implode(',', $options);
        $query = "DELETE FROM `attribute_option` WHERE `{$this->getPrimaryKey()}` IN ({$condition})";
        return $this->getAdapter()->update($query);
    }
 }

 ?>