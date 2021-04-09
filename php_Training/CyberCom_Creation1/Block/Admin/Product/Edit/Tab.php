<?php 
namespace Block\Admin\Product\Edit;
\Mage::loadFileByClassName('Block\Core\Edit\Tabs');

class Tab extends \Block\Core\Edit\Tabs{

	protected $tabs = [];
	protected $defaultTab = null;

	/*public function __construct(){
		parent :: __construct();
		$this->setTemplate('./View/admin/product/edit/tab.php');
		$this->prepareTab();
	}*/

	/*public function setTabs(array $tabs){
		$this->tabs = $tabs;
		return $this;
	}

	public function getTabs(){
		return $this->tabs;

	}
*/
	public function prepareTab(){
		$this->addTab('product',['label'=>'Product Information','default'=>true, 'block'=>'Block\Admin\Product\Edit\Tabs\Form']);
		$this->addTab('media',['label'=>'Media','default'=>true,'block'=>'Block\Admin\Product\Edit\Tabs\Media']);
		$this->addTab('groupPrice',['label'=>'Group Price','default'=>true,'block'=>'Block\Admin\Product\Edit\Tabs\GroupPrice']);
		$this->addTab('attribute',['label'=>'Attribute','default'=>true,'block'=>'Block\Admin\Product\Edit\Tabs\Attribute']);

		$this->setDefaultTab('product');

		return $this;
			
		

	}

	/*public function setDefaultTab($defaultTab){
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

	}*/

}


 ?>