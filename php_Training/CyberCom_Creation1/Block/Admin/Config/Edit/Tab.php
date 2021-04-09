<?php 
namespace Block\Admin\Config\Edit;

class Tab extends \Block\Core\Edit\Tabs{

	
	public function prepareTab(){
		$this->addTab('configGroup',['label'=>'Information','default'=>true, 'block'=>'Block\Admin\Config\Edit\Tabs\Form']);
		$this->addTab('config',['label'=>'Configuration','default'=>true, 'block'=>'Block\Admin\Config\Edit\Tabs\Config']);
		

		$this->setDefaultTab('configGroup');

		return $this;
			
		

	}

	
}


 ?>