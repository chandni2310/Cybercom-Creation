<?php 
namespace Model\Core;
//require_once './Model/Core/Adapter.php';
\Mage::loadFileByClassName('Model\Core\Adapter');

class Table{

	protected $adapter = null;
    protected $primaryKey = null;
    protected $tableName = null;
    protected $data = [];

    public function __construct(){
        $this->setAdapter();

    }

    public function setAdapter($adapter = null)
    {
        if(!$adapter){
            $adapter = \Mage::getModel('Model\Core\Adapter'); 
        }
        $this->adapter = $adapter;
        return $this;
    }

    public function getAdapter()
    {
        if(!$this->adapter){
            $this->setAdapter();
        }
        return $this->adapter;
    }

    public function setTableName($tableName){
    	$this->tableName=$tableName;
    	return $this;
    }

    public function setPrimaryKey($primaryKey){
    	$this->primaryKey=$primaryKey;
    	return $this;
    }


    public function getPrimaryKey(){
        return $this->primaryKey;
    }

    public function getTableName(){
        return $this->tableName;
    }

    public function setData(array $data){  
        $this->data = array_merge($this->data, $data); 
        return $this;
    }
   
    
    public function getData( $data = null){   
        return $this->data;
    }

    public function __set($key, $value){
        $this->data[$key] = $value;
        return $this;
    }
    
    public function __get($key){
        //if key does not exist,...return false
        if(!array_key_exists($key, $this->data)){
            return null;
        }
        return $this->data[$key];
    }    

    public function save(){
       /* $id=$this->datagetPrimaryKey();
        print_r($id);
        die();*/

        
        if((!array_key_exists($this->primaryKey, $this->data))){

        $sql = "INSERT INTO `{$this->getTableName()}`("; 
        $sql .= implode(",", array_keys($this->data)) . ') VALUES (';            
        $sql .= "'" . implode("','", array_values($this->data)) . "')";
        
        $id=$this->getAdapter()->insert($sql);
        $this->load($id);
        return $this;
        /*if(!$result)
            return false;
        return $result;*/
        
    }
   // unset($this->data['productId']);
     $sql = "UPDATE `{$this->getTableName()}` SET ";            
    foreach ($this->data as $key => $value) {
      $sql.= $key.'='."'$value'" .',';
    }
    $sql = substr($sql, 0, -1);
    $sql .= " WHERE `{$this->getPrimaryKey()}`='".$this->data[$this->getPrimaryKey()]."'";
    
    $result=$this->getAdapter()->update($sql);
    $id = $this->data[$this->getPrimaryKey()];
    $this->load($id);
    return $this;

    

       /* if(!$result){
            return false;
        }
        return $result;
           */

        }


        public function delete($query = null){
            if(!$query){
            $query = "DELETE FROM `{$this->getTableName()}` WHERE `{$this->getPrimaryKey()}` = '{$this->data[$this->getPrimaryKey()]}'";
        }
        $result=$this->getAdapter()->delete($query);
        if(!$result){
            return false;
        }
        return true;
           



        }


    public function load($id){
        //will fetch record and will save to data and return this
        $id = (int)$id;
        $query = "SELECT * FROM `{$this->getTableName()}` WHERE `{$this->getPrimaryKey()}` = '$id'";
        return $this->fetchRow($query);
    }

    public function fetchRow($query)
    {
        $row = $this->getAdapter()->fetchRow($query);
        if(!$row){
            return false;
        }
        //$this->setData($row);
        $this->data = $row;
        return $this;
    }

    public function fetchAll($query = null){
        if(!$query){
        $query="select * from `{$this->getTableName()}`";
        }

        $rows=$this->getAdapter()->fetchAll($query);
        if(!$rows){
            return false;
        }
        foreach($rows as $key => &$value){
            $row = new $this;
            $value=$row->setData($value);
        }
        return $rows;
    }

    





}



 ?>