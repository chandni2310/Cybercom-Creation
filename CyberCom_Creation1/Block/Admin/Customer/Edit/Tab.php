<?php 
namespace Block\Admin\Customer\Edit;
\Mage::loadFileByClassName('Block\Core\Edit\Tabs');

class Tab extends \Block\Core\Edit\Tabs{

	

	
	public function prepareTab(){
		$this->addTab('customer',['label'=>'Customer Information','default'=>true, 'block'=>'Block\Admin\Customer\Edit\Tabs\Form']);
		$this->addTab('address',['label'=>'Address','default'=>true,'block'=>'Block\Admin\Customer\Edit\Tabs\Address']);
		
		$this->setDefaultTab('customer');

		return $this;
			
		

	}

	
}


 ?>