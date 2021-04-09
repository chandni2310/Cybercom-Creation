<?php 
namespace Block\Admin\Shipping\Edit;
\Mage::loadFileByClassName('Block\Core\Edit\Tabs');

class Tab extends \Block\Core\Edit\Tabs{

	
	
	
	public function prepareTab(){
		$this->addTab('shipping',['label'=>'Shipping Information','default'=>true, 'block'=>'Block\Admin\Shipping\Edit\Tabs\Form']);
		

		$this->setDefaultTab('shipping');

		return $this;
			
		

	}

	
}


 ?>