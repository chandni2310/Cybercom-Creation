<?php 
namespace Block\Admin\Shipping\Edit\Tabs;
\Mage::loadFileByClassName('Block\Core\Edit');

class Form extends \Block\Core\Edit{

	protected $shipping = [];

	public function __construct(){
		parent::__construct();
		$this->setTemplate('./View/admin/shipping/edit/tabs/form.php');
	}



}

 ?>