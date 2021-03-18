<?php
namespace Model;
\Mage::loadFileByClassName('Model\Core\Table');
\Mage::loadFileByClassName('Model\Core\Adapter');

class CmsPage extends \Model\Core\Table{
    public function __construct(){
        parent::__construct();
        $this->setTableName('cms_page');
        $this->setPrimaryKey('pageId');
    }


   
}

?>