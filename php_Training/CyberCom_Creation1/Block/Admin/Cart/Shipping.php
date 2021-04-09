<?php 
namespace Block\Admin\Cart;

class Shipping extends \Block\Core\Template{

	protected $shippingMethods = null;
	 public function __construct(){
        parent::__construct();
        $this->setTemplate('./View/admin/cart/shipping.php');
    }

    public function setShippingMethods($shippingMethods = null)
    {
        if ($shippingMethods) {
            $this->shippingMethods = $shippingMethods;
            return $this;
        }

        $shippingMethod = \Mage::getModel('Model\Shipping');
        $query = "SELECT * FROM `{$shippingMethod->getTableName()}`";
        $shippingMethods = $shippingMethod->fetchAll($query);
        $this->shippingMethods = $shippingMethods;
        return $this;
    }

    public function getShippingMethods()
    {
        if (!$this->shippingMethods) {
            $this->setShippingMethods();
        }
        return $this->shippingMethods;
    }
}

?>