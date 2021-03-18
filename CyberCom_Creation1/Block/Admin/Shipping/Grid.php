<?php 
namespace Block\Admin\Shipping;
\Mage::loadFileByClassName('Block\Core\Template');
\Mage::loadFileByClassName('Model\Core\Url');

class Grid extends \Block\Core\Template{

	protected $shipping=[];

	public function __construct(){
		parent :: __construct();
		//$this->setController($controller);
		$this->setTemplate('./View/admin/shipping/shipping.php');
		$this->setShipping();
	}


	
	public function setShipping($shipping = null){
		if(!$shipping){
			$shipping = \Mage::getModel('Model\Shipping');
			$shipping = $shipping->fetchAll();
		}


		$this->shipping=$shipping;
		return $this;

	}

	public function getShipping(){
		
		return $this->shipping;
	}
	
}


 ?>