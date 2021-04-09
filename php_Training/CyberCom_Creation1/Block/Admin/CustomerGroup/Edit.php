<?php 
namespace Block\Admin\CustomerGroup;
\Mage::loadFileByClassName('Block\Core\Template'); 


class Edit  extends \Block\Core\Template{
	protected $customerGroup = [];

	public function __construct(){
		//$this->setController($controller);
		parent :: __construct();
		$this->setTemplate('./View/admin/customer_group/update.php');
		//	$this->setProduct();
	}

	

	public function getTabContent(){
		$getTabs = \Mage::getBlock('Block\Admin\CustomerGroup\Edit\Tab');
		$tabs = $getTabs->getTabs();
		$tab = $this->getRequest()->getGet('tab',$getTabs->getDefaultTab()); 
		if(!array_key_exists($tab, $tabs)){
			return null;
		}
		//print_r($tabs[$tab]['block']);
		$blockClassName = ($tabs[$tab]['block']);
		$block = \Mage::getBlock($blockClassName);
		echo $block->toHtml();
		//print_r($block);


	}

}




 ?>