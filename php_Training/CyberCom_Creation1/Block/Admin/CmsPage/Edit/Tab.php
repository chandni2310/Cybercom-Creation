<?php 
namespace Block\Admin\CmsPage\Edit;
\Mage::loadFileByClassName('Block\Core\Edit\Tabs');

class Tab extends \Block\Core\Edit\Tabs{


	public function prepareTab(){
		$this->addTab('cmsPage',['label'=>'Cms Page Information','default'=>true, 'block'=>'Block\Admin\CmsPage\Edit\Tabs\Form']);
		

		$this->setDefaultTab('cmsPage');

		return $this;
			
		

	}

	
}


 ?>