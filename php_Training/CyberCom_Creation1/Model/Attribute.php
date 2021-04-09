<?php
namespace Model;
\Mage::loadFileByClassName('Model\Core\Table');
\Mage::loadFileByClassName('Model\Core\Adapter');

class Attribute extends Core\Table{
    public function __construct(){
        parent::__construct();
        $this->setTableName('attribute');
        $this->setPrimaryKey('attributeId');
    }


    
   public function getBackendTypeOption(){
   	return [
   		'varchar'=>'Varchar',
   		'int'=>'Int',
   		'decimal'=>'Decimal',
   		'text'=>'Text'
   	];


   }

   public function getInputTypeOption(){
   	return [
   		'text'=>'Text',
   		'textarea'=>'Text Area',
   		'select'=>'Select',
   		'checkbox'=>'Checkbox',
   		'radio'=>'Radio'
   	];
   	
   }

   public function getEntityTypeOptions(){
    return [
      'product'=>'Product',
      'category'=>'Category'
    ];
   }


   public function getOptions(){
    if(!$this->attributeId){
      return false;
    }
    $query = "SELECT * FROM `attribute_option` 
    WHERE `attributeId` = '{$this->attributeId}'
    ORDER BY `sortOrder` ASC";

    $options = \Mage::getModel('Model\Attribute\Option')->fetchAll($query);
    return $options;
   }


   

        

}

?>