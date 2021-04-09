<?php 
namespace Model\Cart;

class Address extends \Model\Core\Table{
	protected $cart = null;
	protected $cartId = null;
	protected $customer = null;
	protected $customerShippingAddress = null;
	protected $customerBillingAddress = null;
	protected $items = null;

	 public function __construct(){
        parent::__construct();
        $this->setTableName('cartaddress');
        $this->setPrimaryKey('cartAddressId');
    }

    public function setCart(\Model\Cart $cart){
		$this->cart = $cart;
		return $this;
	}

	public function getCart() {
		$session = \Mage::getModel('Model\Admin\Session');
		$cart = \Mage::getModel('Model\Cart');		
		$customerId = $session->customerId;
		if(!$customerId) {
			return false;
		}

		if($customerId) {
			$query = "SELECT * FROM `cart` WHERE customerId = {$customerId}";
			$cart->fetchRow($query);
			$this->setCart($cart);
			return $this->cart;
		}
	}

	public function setCustomerBillingAddress(\Model\Customer\Address $customerBillingAddress){
		$this->customerBillingAddress = $customerBillingAddress;
		return $this;
	}

	public function getCustomerBillingAddress(){
		$query = "SELECT * FROM `customer_address` WHERE customerId = {$this->customerId} AND addressType='billing'";
		$customerBillingAddress = \Mage::getModel('Model\CustomerAddress');
		$customerBillingAddress->fetchRow($query);
		$this->setCustomerBillingAddress($customerBillingAddress);
		return $this->customerBillingAddress;
	}

	public function setCustomerShippingAddress(\Model\Customer\Address $customerShippingAddress){
		$this->customerShippingAddress = $customerShippingAddress;
		return $this;
	}

	

	public function getCustomerShippingAddress(){
		$query = "SELECT * FROM `customer_address` WHERE customerId = {$this->customerId} AND addressType='shipping'";
		$customerShippingAddress = \Mage::getModel('Model\CustomerAddress');
		$customerShippingAddress->fetchRow($query);
		$this->setCustomerShippingAddress($customerShippingAddress);
		return $this->customerShippingAddress;
	}

    


}



?>