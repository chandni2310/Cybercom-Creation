<?php 
namespace Block\Admin\Config;


class Edit extends \Block\Core\Edit{


	public function __construct(){
		parent :: __construct();
		$this->setTabClassName(\Mage::getBlock('Block\Admin\Config\Edit\Tab'));
	}

	



	
}


 ?>