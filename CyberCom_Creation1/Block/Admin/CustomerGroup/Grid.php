<?php 
namespace Block\Admin\CustomerGroup;
\Mage::loadFileByClassName('Block\Core\Template');
\Mage::loadFileByClassName('Model\Core\Url');


class Grid extends \Block\Core\Template{
	

	protected $customerGroup = [];
	public function __construct(){
		parent:: __construct();
		//$this->setController($controller);
		$this->setTemplate('./View/admin/customer_group/customer_group.php');
		$this->setCustomerGroup();
	}


	
	public function setCustomerGroup($customerGroup = null){
		if(!$customerGroup){
			$customerGroup = \Mage::getModel('Model\CustomerGroup');
			/*$customer = $customer->fetchAll("SELECT * FROM customer INNER JOIN customer_address ON customer.customerId = customer_address.addressId");*/
			$customerGroup = $customerGroup->fetchAll();
		}


		$this->customerGroup=$customerGroup;
		return $this;

	}

	public function getCustomerGroup(){
		
		return $this->customerGroup;
	}

	
}


 


 ?>