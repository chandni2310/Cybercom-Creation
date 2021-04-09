<?php 
namespace Block\Admin\Cart;

class Grid extends \Block\Core\Template{
	protected $cart = null;
	protected $customers = null;
	public function __construct(){
		parent::__construct();
		$this->setTemplate('./View/admin/cart/grid.php');
	}

	public function setCart( $cart){
		$this->cart = $cart;
		return $this;
	}

	public function getCart(){
		if(!$this->cart){
			throw new \Exception("Cart not set");
			
		}
		return $this->cart;

	}

	public function getCustomers()
    {
        if (!$this->customers) {
            $this->setCustomers();
        }
        return $this->customers;
    }

    public function setCustomers($customers = [])
    {
        if ($customers) {
            $this->customers = $customers;
            return $this;
        }

        $customer = \Mage::getModel('Model\Customer');
        $customers = $customer->fetchAll();

        if (!$customers) {
            return false;
        }
        $this->customers = $customers;
        return $this;
    }


}

?>