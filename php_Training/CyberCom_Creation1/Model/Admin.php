<?php
namespace Model;
\Mage::loadFileByClassName('Model\Core\Table');
\Mage::loadFileByClassName('Model\Core\Adapter');

class Admin extends \Model\Core\Table{
    public function __construct(){
        parent::__construct();
        $this->setTableName('admin');
        $this->setPrimaryKey('adminId');
    }


    
               

        

}

?>