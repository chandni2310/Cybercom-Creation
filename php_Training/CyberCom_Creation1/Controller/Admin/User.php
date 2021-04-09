<?php
namespace Controller\Admin;

class User extends \Controller\Core\Admin{

	public function testAction(){

		$product = \Mage::getModel('Model\Product');
		$query = "SELECT * FROM `product` WHERE productId='7' ORDER BY 'productId' ASC";
		$product = $product->fetchRow($query); 
		$product->sku = '102';
		$product->name = 'Hello';
		echo '<pre>';
		print_r($product);
	}
}

?>