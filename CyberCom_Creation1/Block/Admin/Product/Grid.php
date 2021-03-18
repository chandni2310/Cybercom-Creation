<?php 
namespace Block\Admin\Product;
\Mage::loadFileByClassName('Block\Core\Template');

class Grid extends \Block\Core\Template{

	protected $products = [];

	public function __construct(){
		parent ::__construct();
		//$this->setController($controller);
		$this->setTemplate('./View/admin/product/product.php');
		$this->setProducts();

	}


	
	public function setProducts($products = null){
		if(!$products){
			$product = \Mage::getModel('Model\Product');
			$products = $product->fetchAll();
		}


		$this->products=$products;
		return $this;

	}

	public function getProducts(){
		
		return $this->products;
	}

	
}


 ?>