<?php 
namespace Model;

class Config extends \Model\Core\Table{
	public function __construct(){
        parent::__construct();
        $this->setTableName('config');
        $this->setPrimaryKey('configId');
    }
}

?>