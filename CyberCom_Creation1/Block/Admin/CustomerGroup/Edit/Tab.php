<?php 
namespace Block\Admin\CustomerGroup\Edit;
\Mage::loadFileByClassName('Block\Core\Template');
//require_once './Block/Product/Edit/Tabs/Media.php';

class Tab extends \Block\Core\Template{

	protected $tabs = [];
	protected $defaultTab = null;

	public function __construct(){
		parent :: __construct();
		$this->setTemplate('./View/admin/customer_group/edit/tab.php');
		$this->prepareTab();
	}

	public function setTabs(array $tabs){
		$this->tabs = $tabs;
		return $this;
	}

	public function getTabs(){
		return $this->tabs;

	}

	public function prepareTab(){
		$this->addTab('customerGroup',['label'=>'Customer Group Information','default'=>true, 'block'=>'Block\Admin\CustomerGroup\Edit\Tabs\Form']);
		

		$this->setDefaultTab('customerGroup');

		return $this;
			
		

	}

	public function setDefaultTab($defaultTab){
		$this->defaultTab = $defaultTab;
		return $this;

	}
	public function getDefaultTab(){
		return $this->defaultTab;
	}

	 public function addTab($key,$tab = []){
	 	$this->tabs[$key] = $tab;
	 	return $this;

	}

	 public function getTab($key){
	 	if(!array_key_exists($key,$this->tabs)){
	 		return null;
	 	}
	 	return $this->tabs[$key];

	}

	 public function removeTab($key){
	 	if(array_key_exists($key,$this->tabs)){
	 		unset($this->tabs[$key]);
	 	}

	}

}


 ?>