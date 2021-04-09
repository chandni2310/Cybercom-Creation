<?php 
namespace Model\Core;
class Adapter{



	 public $config=['server'=>'localhost',
	 				 'username'=>'root',
	 				 'password'=>'',
	 				 'database'=>'cybercom_creation'
	 ];

	 private $connect=null;
	 public function connection(){
	 	$connect=mysqli_connect($this->config['server'],$this->config['username'],$this->config['password'],$this->config['database']);
	 	$this->setConnect($connect);
	 }

	 public function getConnect(){
	 	return $this->connect;
	 }

	 public function setConnect( \mysqli $connect){
	 	$this->connect=$connect;
	 	return $this;
	 }

	 public function isConnected(){
	 	if(!$this->getConnect()){
	 		return false;
	 	}
	 	return true;
	 }
	  

	 public function fectchAll($query){
	 	if(!$this->isConnected()){
	 		$this->connection();
	 	}
	 	$result=$this->getConnect()->query($query);
	 	return $result;
	 }


	 public function insert($query)
    {
        if (!$this->isConnected()) {
            $this->connection();
        }
        $result = $this->getConnect()->query($query);

        if (!$result) {
            return false;
        }
        return $this->getConnect()->insert_id;
        //return true;
    }

    public function update($query) {
        if(!$this->isConnected()) {
            $this->connection();
        }
        if(!$this->getConnect()->query($query)) {
            return false;
        }
        return true;
    }

     public function delete($query) {
        if(!$this->isConnected()) {
            $this->connection();
        }
        if(!$this->getConnect()->query($query)) {
            return false;
        }
        return true;
    }

    public function fetchRow($sql) {
        if (!$this->isConnected()) {
            $this->connection();
        }

        $result = $this->getConnect()->query($sql);
        if (!$result || $result->num_rows === 0) return false;
        return $result->fetch_assoc();
    }

     public function fetchAll($sql) {
         if (!$this->isConnected()) {
            $this->connection();
        }
        $result = $this->getConnect()->query($sql);
        if (!$result) return false;
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function fetchPairs($query){
         if (!$this->isConnected()) {
            $this->connection();
        }
        $result = $this->getConnect()->query($query);
        //return $result->fetch_all(MYSQLI_ASSOC);
        $rows = $result->fetch_all();
        if(!$rows){
            return $rows;
        }
        $columns = array_column($rows,'0');
        $values = array_column($rows,'1');

        return array_combine($columns, $values);


    }

    public function fetchOne($query){
        if (!$this->isConnected()) {
            $this->connection();
        }
        $result = $this->getConnect()->query($query);
        return $result->num_rows;
    

    }

}

/*echo '<pre>';

$adapter=Mage::getModel('Model_Core_Adapter');
$query='select * from product where `productId`=1';
$product=$adapter->fetchRow($query);
print_r($product);*/



 ?>