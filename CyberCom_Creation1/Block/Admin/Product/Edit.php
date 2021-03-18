<?php
namespace Block\Admin\Product;
\Mage::loadFileByClassName('Block\Core\Edit'); 


class Edit  extends \Block\Core\Edit{
	protected $product = [];

	public function __construct(){
		parent :: __construct();
		//$this->setTemplate('./View/core/edit.php');
		$this->setTabClassName(\Mage::getBlock('Block\Admin\Product\Edit\Tab'));
	}

	

	
	
	/*public function setProduct($product = null){
		if(!$product){
			$product = \Mage::getModel('Model\Product');
			$product = $product->fetchAll();
		}


		$this->product=$product;
		return $this;

	}

	public function getProduct(){
		if(!$this->product){
			$this->setProduct();
		}
		
		return $this->product;
	}*/

	


	}

 ?>