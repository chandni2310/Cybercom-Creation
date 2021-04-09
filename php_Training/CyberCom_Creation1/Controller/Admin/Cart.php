<?php 
namespace Controller\Admin;

class Cart extends \Controller\Core\Admin{

	public function __construct(){
		parent::__construct();
	}
	public function addToCartAction(){
		try {
			$productId = (int)$this->getRequest()->getGet('productId');
			$product = \Mage::getModel('Model\Product')->load($productId);
			if(!$product){
				throw new \Exception("Not valid Product");
				
			}
			$cart = $this->getCart();
			$cart->addToCartItem($product,1,true);
			$this->getMessage()->setSuccess("Item Added To Cart");
			
		} catch (\Exception $e) {
			$this->getMessage()->setFailure($e->getMessage());

			
		}
		$this->redirect('index');
		
	}

	public function updateAction(){
		try {
			$quantities = $this->getRequest()->getPost('quantity');
			$cart = $this->getCart();

			foreach ($quantities as $cartItemId => $quantity) {
				$cartItem  = \Mage::getModel('Model\Cart\Item')->load($cartItemId);
				$cartItem->quantity = $quantity;
				$cartItem->save();
				$this->getMessage()->setSuccess("Item successfully Updated");
			}
			
		} catch (\Exception $e) {
			$this->getMessage()->setFailure($e->getMessage());
			
		}
		$this->redirect('index');
	}

	public function getCart($customerId = null){
		$session = \Mage::getModel('Model\Admin\Session');
		if($customerId){
			$session->customerId = $customerId;
		} else{
			$customerId = $session->customerId;
			/*if(!$customerId){
				throw new \Exception("Pls select customer");
				
			}*/
		}
		$cart = \Mage::getModel('Model\Cart');
		$query = "SELECT * FROM `cart` WHERE customerId = '{$customerId}'";
		$cart = $cart->fetchRow($query);
		

		if($cart){

			return $cart;
		}

		$cart = \Mage::getModel('Model\Cart');
		$cart->createdDate = date('Y-m-d H:i:s' );
		$cart->customerId = $customerId;
		$cart->save();
		return $cart;
	}

	public function selectCustomerAction(){
		try {
			
            $customerId = (int) $this->getRequest()->getPost('customerId');
           	$grid = \Mage::getBlock('Block\Admin\Cart\Grid');
            if (!$customerId) {
                throw new \Exception('Customer ID is not valid');
            }
            $cart = $this->getCart($customerId);
            $grid->setCart($cart);
        } catch (\Exception $e) {
            $this->getMessage()->setFailure($e->getMessage());
        }
        $this->redirect('index');
	}

	public function indexAction(){
		$layout = $this->getLayout();
		$content = $layout->getChild('content');
		$grid = \Mage::getBlock('Block\Admin\Cart\Grid');
		$cart = $this->getCart();
		$grid->setCart($cart);	
		$content->addChild($grid,'grid');
		echo $layout->toHtml();
	}

	public function saveBillingAddressAction()
    {
        try {
            if (!$this->getRequest()->isPost()) {
                throw new \Exception('Invalid');
            }

            $billingData = $this->getRequest()->getPost('billing');

           
            $cart = $this->getCart();
            if ($cart->getBillingAddress()) {
                $cart->getBillingAddress()->setData($billingData)->save();
            } else {
                $address = \Mage::getModel('Model\Cart\Address');
                $address->setData($billingData);
                $address->cartId = $cart->cartId;
                $address->save();


            }

            if ($this->getRequest()->getPost('saveBillingInAddressBook')) {
                $customer = $cart->getCustomer();
                $customerAddress = $customer->getBillingAddress();
                if ($customerAddress) {
                    $customerAddress->setData($billingData);
                    $customerAddress->save();
                } else {
                    $customerAddress = \Mage::getModel('Model\CustomerAddress');
                    $cartAddress = $cart->getBillingAddress();
                    $customerAddress->zipcode = $cartAddress->zipcode;
                    $customerAddress->country = $cartAddress->country;
                    $customerAddress->state = $cartAddress->state;
                    $customerAddress->address = $cartAddress->address;
                    $customerAddress->city = $cartAddress->city;
                    $customerAddress->addressType = $cartAddress->addressType;
                    $customerAddress->customerId = $cart->customerId;
                    $customerAddress->save();
                }
            }


            
        } catch (\Exception $e) {
            $this->getMessage()->setFailure($e->getMessage());
        }
        $layout = $this->getLayout();
        $content = $layout->getChild('content');
        $grid = \Mage::getBlock('Block\Admin\Cart\Grid');
        $grid->setCart($this->getCart());

        $content->addChild($grid,'grid');
		echo $layout->toHtml();
    }



    public function saveShippingAddressAction()
    {
        try {
            if (!$this->getRequest()->isPost()) {
                throw new \Exception('Invalid Request.');
            }

            $shippingData = $this->getRequest()->getPost('shipping');

            $cart = $this->getCart();
           
            if(!$cart->getShippingAddress()){
                $address = \Mage::getModel('Model\Cart\Address');
                $address->setData($shippingData);
                $address->cartId = $cart->cartId;
                $address->save();

            }else{
                $cart->getShippingAddress()->setData($shippingData)->save();
            }


            if ($this->getRequest()->getPost('saveShippingAddressInAddressBook')) {
                $customer = $cart->getCustomer();
                $customerAddress = $customer->getShippingAddress();
                if ($customerAddress) {
                    $customerAddress->setData($shippingData);
                    $customerAddress->save();
                } else {
                    $customerAddress = \Mage::getModel('Model\CustomerAddress');
                    $cartAddress = $cart->getShippingAddress();
                    $customerAddress->customerId = $cart->customerId;
                    $customerAddress->zipcode = $cartAddress->zipcode;
                    $customerAddress->country = $cartAddress->country;
                    $customerAddress->state = $cartAddress->state;
                    $customerAddress->address = $cartAddress->address;
                    $customerAddress->city = $cartAddress->city;
                    $customerAddress->addressType = $cartAddress->addressType;
                    $customerAddress->save();
                }
            }


            if ($this->getRequest()->getPost('sameAsBillingAddress')) {
                if ($cart->getBillingAddress()) {

                    $shippingAddress  = $cart->getShippingAddress();
                    $billingAddress = $cart->getBillingAddress();

                    $shippingAddress->cartId = $cart->cartId;
                    $shippingAddress->zipcode = $billingAddress->zipcode;
                    $shippingAddress->country = $billingAddress->country;
                    $shippingAddress->state = $billingAddress->state;
                    $shippingAddress->address = $billingAddress->address;
                    $shippingAddress->city = $billingAddress->city;
                    $shippingAddress->save();
                } else {
                    $billingAddress = \Mage::getModel('Model\Cart\Address');
                    $shippingAddress = $cart->getShippingAddress();

                    $billingAddress->cartId = $cart->cartId;
                    $billingAddress->zipcode = $shippingAddress->zipcode;
                    $billingAddress->country = $shippingAddress->country;
                    $billingAddress->state = $shippingAddress->state;
                    $billingAddress->address = $shippingAddress->address;
                    $billingAddress->city = $shippingAddress->city;
                    $billingAddress->addressType = 'billing';
                    $billingAddress->save();
                }
            }
        } catch (Exception $e) {
            $this->getMessage()->setFailure($e->getMessage());
        }
        
        $layout = $this->getLayout();
        $content = $layout->getChild('content');
        $grid = \Mage::getBlock('Block\Admin\Cart\Grid');
        $grid->setCart($this->getCart());

        $content->addChild($grid,'grid');
		echo $layout->toHtml();

       
    }

    public function savePaymentAction() {
		try {
			$paymentMethodId = (int)$this->getRequest()->getPost('payment');
			$paymentModel = \Mage::getModel('Model\Payment');

			if(!$paymentMethodId) {
				throw new \Exception("Select payment method.");
			}
			
			$cart = $this->getCart();
			$cart->paymentMethodId = $paymentMethodId;
			$cart->save();
		} catch (\Exception $e) {
			$this->getMessage()->setFailure($e->getMessage());
		}
		$layout = $this->getLayout();
        $content = $layout->getChild('content');
        $grid = \Mage::getBlock('Block\Admin\Cart\Grid');
        $grid->setCart($this->getCart());

        $content->addChild($grid,'grid');
		echo $layout->toHtml();
	}

	public function saveShippingAction() {
		try {
			$shippingMethodId = (int)$this->getRequest()->getPost('shipping');
			$shippingModel = \Mage::getModel('Model\Shipping');

			if(!$shippingMethodId) {
				throw new \Exception("Pls select shipping method.");
			}
			if(!$shippingModel = $shippingModel->load($shippingMethodId)) {
				throw new Exception("Invalid shipping method.");
			}


			$cart = $this->getCart();
			$cart->shippingMethodId = $shippingMethodId;
			$cart->shippingAmount = $shippingModel->amount;
			$cart->save();
			$this->getMessage()->setSuccess('Shipping Method Selected');
		} catch (\Exception $e) {
			$this->getMessage()->setFailure($e->getMessage());
		}
		$layout = $this->getLayout();
        $content = $layout->getChild('content');
        $grid = \Mage::getBlock('Block\Admin\Cart\Grid');
        $grid->setCart($this->getCart());

        $content->addChild($grid,'grid');
		echo $layout->toHtml();
	}

    public function placeOrderAction(){
        /*echo '11';
        die();*/
        $customerId = $this->getRequest()->getPost('customerId');
        $cart = $this->getCart($customerId);
        $cartId = $cart->cartId;

        $order = \Mage::getModel('Model\Order');
        $order->customerId = $cart->customerId;
        $order->paymentMethodId = $cart->paymentMethodId;
        $order->shippingMethodId = $cart->shippingMethodId;
        $order->shippingAmount = $cart->shippingAmount;
        $order->total = $cart->total;
        $order->discount = $cart->discount;
        $order->createdDate = date('Y-m-d H:i:s' );
        $order = $order->save();
        //echo '<pre>';
        /*print_r($order);
        die();*/

        $orderId = $order->orderId;
        $cartAddress = \Mage::getModel('Model\Cart\Address');
        echo $query = "SELECT * 
        FROM `cartaddress` 
        WHERE `cartId` = '{$cartId}' 
        AND `addressType`= 'shipping' ";
        $cartAddress = $cartAddress->fetchAll($query);
        
            foreach ($cartAddress as $key => $address) {
                    $orderAddress = \Mage::getModel('Model\Order\Address');
                    $orderAddress->orderId = $orderId;
                    $orderAddress->address = $address->address;
                    $orderAddress->city = $address->city;
                    $orderAddress->state = $address->state;
                    $orderAddress->zipcode = $address->zipcode;
                    $orderAddress->country = $address->country;
                    $orderAddress->addressId = $address->addressId;
                    $orderAddress->addressType = $address->addressType;
                    $orderAddress->save();
                    //print_r($orderAddress);
            }





        $cartItem = \Mage::getModel('Model\Cart\Item');
        $query = "SELECT * FROM `cartitem` WHERE `cartId` = '{$cartId}' ";
        $cartItem = $cartItem->fetchAll($query);
        foreach ($cartItem as $key => $item) {
                    $orderItem = \Mage::getModel('Model\Order\Item');
                    $orderItem->orderId = $orderId;
                    $orderItem->productId = $item->productId;
                    $orderItem->quantity = $item->quantity;
                    $orderItem->basePrice = $item->basePrice;
                    $orderItem->price = $item->price;
                    $orderItem->discount = $item->discount;
                    $orderItem->createdDate = date('Y-m-d H:i:s' );
                    $orderItem->save();
        }

        
        
        

    }




}

?>