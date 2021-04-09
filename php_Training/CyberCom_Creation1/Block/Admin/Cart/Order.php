<?php 
namespace Block\Admin\Cart;

class Order extends \Block\Core\Template{
    protected $cart = null;


    public function __construct(){
        parent::__construct();
        $this->setTemplate('./View/admin/cart/order.php');
    }


   public function getCart() {
        $session = \Mage::getModel('Model\Admin\Session');
        $cart = \Mage::getModel('Model\Cart');        
        $customerId = $session->customerId;
        echo '11';
        print_r($_SESSION);
        die();
        if(!$customerId) {
            return false;
        }

        if($customerId) {
            $query = "SELECT * FROM `cart` WHERE customerId = {$customerId}";
            $cart->fetchRow($query);
            $this->cart = $cart;
            return $this->cart;
        }
    }

   
}


?>