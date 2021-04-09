<?php 
namespace Model\Config;

class Group extends \Model\Core\Table{
	//protected $groupId = null;
	public function __construct(){
        parent::__construct();
        $this->setTableName('config_group');
        $this->setPrimaryKey('groupId');
    }

    public function getConfig(){
    if(!$this->groupId){
      return false;
    }
    $query = "SELECT * FROM `config` 
    WHERE `groupId` = '{$this->groupId}'";

    $options = \Mage::getModel('Model\Config')->fetchAll($query);
    return $options;
   }
}

?>