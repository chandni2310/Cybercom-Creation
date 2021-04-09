<?php
namespace Block\Admin\Product\Edit\Tabs;
\Mage::loadFileByClassName('Block\Core\Edit');

class GroupPrice extends \Block\Core\Edit{

	protected $product = [];

	public function __construct(){
		parent::__construct();
		$this->setTemplate('./View/admin/product/edit/tabs/groupPrice.php');
	}

	/*public function setProduct($product = null){
		if($product){
			$this->product = $product;
			return $this;
		}

		$product = \Mage::getModel('Model\Product');
		if($id = $this->getRequest()->getGet('productId')){
			$product = $product->load($id);
		}

		$this->product = $product;
		return $this;


		

	}

	public function getProduct(){
		if(!$this->product){
			$this->setProduct();
		}
		
		return $this->product;
	}
*/
	public function getCustomerGroups(){
		$query ="SELECT cg.*, pgp.productId, pgp.entityId, pgp.price as groupPrice,
		if(p.price IS NULL,	'{$this->getTableRow()->price}',p.price) as price
		FROM `customer_group` `cg`
		LEFT JOIN `product_group_price` `pgp`
			ON `pgp`.`customerGroupId` = `cg`.`groupId`
				AND `pgp`.`productId` = '{$this->getTableRow()->productId}'
		LEFT JOIN `product` `p`
			ON `pgp`.`productId` = `p`.`productId`

		";
		
		$customerGroups = \Mage::getModel('Model\CustomerGroup');
		$customerGroups = $customerGroups->fetchAll($query);
		return $customerGroups;
	}


}

 ?>