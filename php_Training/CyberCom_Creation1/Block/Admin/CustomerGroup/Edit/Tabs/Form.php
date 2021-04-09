<?php 
namespace Block\Admin\CustomerGroup\Edit\Tabs;
\Mage::loadFileByClassName('Block\Core\Template');

class Form extends \Block\Core\Template{

	protected $customerGroup = [];

	public function __construct(){
		parent::__construct();
		$this->setTemplate('./View/admin/customer_group/edit/tabs/form.php');
	}


	



	public function setCustomerGroup($customerGroup = null){
		if($customerGroup){
			$this->customerGroup = $customerGroup;
			return $this;
		}

		$customerGroup = \Mage::getModel('Model\CustomerGroup');
		if($id = $this->getRequest()->getGet('groupId')){
			$customerGroup = $customerGroup ->load($id);
		}

		$this->customerGroup = $customerGroup;
		return $this;


		

	}

	public function getCustomerGroup(){
		if(!$this->customerGroup){
			$this->setCustomerGroup();
		}
		
		return $this->customerGroup;
	}


}

 ?>