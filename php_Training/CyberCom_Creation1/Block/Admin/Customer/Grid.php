<?php 
namespace Block\Admin\Customer;
\Mage::loadFileByClassName('Block\Core\Template');
\Mage::loadFileByClassName('Model\Core\Url');



class Grid extends \Block\Core\Template{
	

	protected $customer = [];
	public function __construct(){
		parent:: __construct();
		//$this->setController($controller);
		$this->setTemplate('./View/admin/customer/customer.php');
		$this->setCustomer();
	}


	
	public function setCustomer($customer = null){
		if(!$customer){
			$customer = \Mage::getModel('Model\Customer');
			$query = "SELECT `c`.`customerId`, `c`.`firstName`, `c`.`lastName`, `c`.`email`,`c`.`mobile`, `c`.`status`, `c`.`createdDate`,`cg`.`name` 
			FROM `customer` `c` 
			LEFT JOIN `customer_group` `cg` ON `c`.`groupId` = `cg`.`groupId`
			/*LEFT JOIN `customer_address` `ca` ON `c`.`customerId` = `ca`.`customerId`
			WHERE `ca`.`addressType` = 'billing'*/";
			$customer = $customer->fetchAll($query);
			

			/*$customer = $customer->fetchAll("SELECT * FROM customer INNER JOIN customer_address ON customer.groupId = customer_group.groupId");*/
		}


		$this->customer=$customer;
		return $this;

	}

	public function getCustomer(){
		
		return $this->customer;
	}

	
}


 


 ?>