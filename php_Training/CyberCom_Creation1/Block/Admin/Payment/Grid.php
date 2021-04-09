<?php 
namespace Block\Admin\Payment;
\Mage::loadFileByClassName('Block\Core\Template');
\Mage::loadFileByClassName('Model\Core\Url');



class Grid extends \Block\Core\Template{

	protected $payment = [];

	public function __construct(){
		//$this->setController($controller);
		parent:: __construct();
		$this->setTemplate('./View/admin/payment/payment.php');
		$this->setPayment();
	}


	
	public function setPayment($payment = null){
		if(!$payment){
			$payment = \Mage::getBlock('Model\Payment');
			$payment = $payment->fetchAll();
		}


		$this->payment=$payment;
		return $this;

	}

	public function getPayment(){
		
		return $this->payment;
	}

	
}


 ?>