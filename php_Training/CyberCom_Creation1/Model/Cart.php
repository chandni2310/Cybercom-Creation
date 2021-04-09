<?php 
namespace Model;

class Cart extends Core\Table{
	protected $customer = null;
	 public function __construct(){
        parent::__construct();
        $this->setTableName('cart');
        $this->setPrimaryKey('cartId');
    }

    public function setCustomer(\Model\Customer $customer){
		$this->customer = $customer;
		return $this;
	}

	public function getCustomer(){
		if($this->customer) {
			return $this->customer;
		}
		if(!$this->customerId){
			return false;
		}
		$customer = \Mage::getModel('Model\Customer')->load($this->customerId);
		$this->setCustomer($customer);
		return $this->customer;
	}

	public function setItems( $items){
		$this->items = $items;
		return $this;
	}

	public function getItems(){
		if(!$this->cartId) {
			return false;
		}
		$query = "SELECT * FROM `cartitem` WHERE cartId = '{$this->cartId}'";
		$items = \Mage::getModel('Model\Cart\Item')->fetchAll($query);
		$this->setItems($items);
		return $this->items;
	}

	public function setBillingAddress($billingAddress){
		$this->billingAddress = $billingAddress;
		return $this;
	}

	public function getBillingAddress(){
		if(!$this->cartId){
			return false;
		}
		$query = "SELECT * FROM `cartaddress` WHERE cartId='{$this->cartId}' AND addressType = 'billing'";
		$billingAddress = \Mage::getModel('Model\Cart\Address')->fetchRow($query);
		$this->setBillingAddress($billingAddress);
		return $this->billingAddress;
	}

	public function setShippingAddress($shippingAddress){
		$this->shippingAddress = $shippingAddress;
		return $this;
	}

	public function getShippingAddress(){
		if(!$this->cartId){
			return false;
		}
		$query = "SELECT * FROM `cartaddress` WHERE cartId='{$this->cartId}' AND addressType = 'shipping'";
		$shippingAddress = \Mage::getModel('Model\Cart\Address')->fetchRow($query);
		$this->setShippingAddress($shippingAddress);
		return $this->shippingAddress;
	}

	public function addToCartItem($product, $quantity = 1, $addMode = false)
    {
        if (!$this->cartId) {
            throw new \Exception('No Cart Id');
        }

        $item = \Mage::getModel('Model\Cart\Item');

       	$query = "SELECT *FROM `cartitem` WHERE `productId` = '{$product->productId}' and `cartId` = '{$this->cartId}'
         ";

        $item = $item->fetchRow($query);

        if ($item) {

            $item->quantity = $item->quantity + $quantity;
            $item->save();
            return $this;
        }
        $item = \Mage::getModel('Model\Cart\Item');
        $item->cartId = $this->cartId;
        $item->productId = $product->productId;
        $item->basePrice = $product->price;
        $item->quantity = $quantity;
        $item->discount = $product->discount * $quantity;
        $item->createdDate = date('Y-m-d H:i:s');
        $item->save();

        return $this;
    }



}



?>