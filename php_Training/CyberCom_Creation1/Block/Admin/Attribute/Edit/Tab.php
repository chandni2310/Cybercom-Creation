<?php 
namespace Block\Admin\Attribute\Edit;
\Mage::loadFileByClassName('Block\Core\Edit\Tabs');

class Tab extends \Block\Core\Edit\Tabs{

	
	public function prepareTab(){
		$this->addTab('attribute',['label'=>'Attribute Information','default'=>true, 'block'=>'Block\Admin\Attribute\Edit\Tabs\Form']);
		$this->addTab('option',['label'=>'Attribute Options','default'=>true, 'block'=>'Block\Admin\Attribute\Edit\Tabs\Option']);
		

		$this->setDefaultTab('attribute');

		return $this;
			
		

	}

	
}


 ?>