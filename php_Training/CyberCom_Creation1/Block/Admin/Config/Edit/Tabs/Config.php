<?php 
namespace Block\Admin\Config\Edit\Tabs;
\Mage::loadFileByClassName('Block\Core\Edit');

class Config extends \Block\Core\Edit{

	protected $config = [];
	protected $configGroup = [];

	public function __construct(){
		parent::__construct();
		$this->setTemplate('./View/admin/config/edit/tabs/config.php');
	}


	



	public function setConfig($config = null){
		if($config){
			$this->config = $config;
			return $this;
		}

		$config = \Mage::getModel('Model\Config');
		/*if($id = $this->getRequest()->getGet('optionId')){
			$option = $option ->load($id);
		}*/

		$this->config = $config;
		return $this;


		

	}

	public function getConfig(){
		if(!$this->config){
			$this->setConfig();
		}
		
		return $this->config;
	}

	public function setConfigGroup($configGroup = null){
		if($configGroup){
			$this->configGroup = $configGroup;
			return $this;
		}

		$configGroup = \Mage::getModel('Model\Config\Group');
		if($id = $this->getRequest()->getGet('groupId')){
			$configGroup = $configGroup ->load($id);
		}

		$this->configGroup = $configGroup;
		return $this;


		

	}

	public function getConfigGroup(){
		if(!$this->configGroup){
			$this->setConfigGroup();
		}
		
		return $this->configGroup;
	}



}

 ?>