<?php 
namespace Block\Admin\Cart;

class Payment extends \Block\Core\Template{

	protected $paymentMethods = null;
	 public function __construct(){
        parent::__construct();
        $this->setTemplate('./View/admin/cart/payment.php');
    }

     public function getPaymentMethods()
    {
        if (!$this->paymentMethods) {
            $this->setPaymentMethods();
        }
        return $this->paymentMethods;
    }

    public function setPaymentMethods($paymentMethods = null)
    {
        if ($paymentMethods) {
            $this->paymentMethods = $paymentMethods;
            return $this;
        }

        $paymentMethod = \Mage::getModel('Model\Payment');
        $query = "SELECT * FROM `{$paymentMethod->getTableName()}`";
        $paymentMethods = $paymentMethod->fetchAll($query);

        if (!$paymentMethods) {
            return false;
        }

        $this->paymentMethods = $paymentMethods;
        return $this;
    }

   
}

?>