<?php 
namespace Block\Admin\Payment\Edit;
\Mage::loadFileByClassName('Block\Core\Edit\Tabs');
//require_once './Block/Product/Edit/Tabs/Media.php';

class Tab extends \Block\Core\Edit\Tabs{

	
	public function prepareTab(){
		$this->addTab('payment',['label'=>'Payment Method Information','default'=>true, 'block'=>'Block\Admin\Payment\Edit\Tabs\Form']);

		$this->setDefaultTab('payment');

		return $this;

	}

	

}


 ?>