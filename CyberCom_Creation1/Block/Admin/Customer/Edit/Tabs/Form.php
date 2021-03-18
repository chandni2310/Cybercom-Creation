<?php 
namespace Block\Admin\Customer\Edit\Tabs;
\Mage::loadFileByClassName('Block\Core\Edit');

class Form extends \Block\Core\Edit{

	protected $customer = [];

	public function __construct(){
		parent::__construct();
		$this->setTemplate('./View/admin/customer/edit/tabs/form.php');
	}


	
}

 ?>