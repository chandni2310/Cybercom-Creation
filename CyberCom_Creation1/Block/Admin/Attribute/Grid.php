<?php 
namespace Block\Admin\Attribute;
\Mage::loadFileByClassName('Block\Core\Template');
\Mage::loadFileByClassName('Model\Core\Url');

class Grid extends \Block\Core\Template{

	protected $attribute = [];

	public function __construct(){
		parent :: __construct();
		//$this->setController($controller);
		$this->setTemplate('./View/admin/attribute/attribute.php');
		$this->setAttribute();
	}


	
	public function setAttribute($attribute = null){
		if(!$attribute){
			$attribute = \Mage::getModel('Model\Attribute');
			$attribute = $attribute->fetchAll();
		}


		$this->attribute = $attribute;
		return $this;

	}

	public function getAttribute(){
		
		return $this->attribute;
	}
	
}


 ?>