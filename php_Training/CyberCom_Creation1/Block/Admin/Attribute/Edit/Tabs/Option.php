<?php 
namespace Block\Admin\Attribute\Edit\Tabs;
\Mage::loadFileByClassName('Block\Core\Edit');

class Option extends \Block\Core\Edit{

	protected $option = [];
	protected $attribute = [];

	public function __construct(){
		parent::__construct();
		$this->setTemplate('./View/admin/attribute/edit/tabs/option.php');
	}


	



	public function setOption($option = null){
		if($option){
			$this->option = $option;
			return $this;
		}

		$option = \Mage::getModel('Model\Attribute\Option');
		/*if($id = $this->getRequest()->getGet('optionId')){
			$option = $option ->load($id);
		}*/

		$this->option = $option;
		return $this;


		

	}

	public function getOption(){
		if(!$this->option){
			$this->setOption();
		}
		
		return $this->option;
	}

	public function setAttribute($attribute = null){
		if($attribute){
			$this->attribute = $attribute;
			return $this;
		}

		$attribute = \Mage::getModel('Model\Attribute');
		if($id = $this->getRequest()->getGet('attributeId')){
			$attribute = $attribute ->load($id);
		}

		$this->attribute = $attribute;
		return $this;


		

	}

	public function getAttribute(){
		if(!$this->attribute){
			$this->setAttribute();
		}
		
		return $this->attribute;
	}



}

 ?>