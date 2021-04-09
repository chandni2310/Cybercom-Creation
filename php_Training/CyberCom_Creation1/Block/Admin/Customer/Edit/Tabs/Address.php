<?php 
namespace Block\Admin\Customer\Edit\Tabs;
\Mage::loadFileByClassName('Block\Core\Edit');

class Address extends \Block\Core\Edit{

	
	
	protected $billingAddress = [];
	protected $shippingAddress = [];

	public function __construct(){
		parent::__construct();
		$this->setTemplate('./View/admin/customer/edit/tabs/address.php');
	}


	



	public function setBillingAddress($billingAddress = null){
		if($billingAddress){
			$this->$billingAddress = $billingAddress;
			return $this;
		}

		$this->billingAddress = \Mage::getModel('Model\CustomerAddress');
		
		if($id = $this->getRequest()->getGet('addressId')){
			$billingAddress = $billingAddress ->load($id);
		}

		$this->$billingAddress = $billingAddress;
		return $this;


		

	}

	public function getBillingAddress(){
		if(!$this->billingAddress){
			$this->setBillingAddress();
		}
		
		return $this->billingAddress;
	}

	public function setShippingAddress($shippingAddress = null){
		if($shippingAddress){
			$this->$shippingAddress = $shippingAddress;
			return $this;
		}

		$this->shippingAddress = \Mage::getModel('Model\CustomerAddress');
		if($id = $this->getRequest()->getGet('addressId')){
			$shippingAddress = $shippingAddress ->load($id);
		}

		$this->$shippingAddress = $shippingAddress;
		return $this;


		

	}

	public function getShippingAddress(){
		if(!$this->shippingAddress){
			$this->setShippingAddress();
		}
		
		return $this->shippingAddress;
	}


}

 ?>