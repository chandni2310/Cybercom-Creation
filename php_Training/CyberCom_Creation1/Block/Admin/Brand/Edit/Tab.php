<?php 
namespace Block\Admin\Brand\Edit;
\Mage::loadFileByClassName('Block\Core\Edit\Tabs');

class Tab extends \Block\Core\Edit\Tabs{

	
	

	public function prepareTab(){
		$this->addTab('brand',['label'=>'Brand Information','default'=>true, 'block'=>'Block\Admin\Brand\Edit\Tabs\Form']);
		
		$this->setDefaultTab('brand');

		return $this;

	}

	
}


 ?>