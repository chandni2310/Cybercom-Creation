<?php 
namespace Block\Admin\Category; 
\Mage::loadFileByClassName('Block\Core\Edit');


class Edit extends \Block\Core\Edit{


	public function __construct(){
		parent::__construct();
		$this->setTabClassName(\Mage::getBlock('Block\Admin\Category\Edit\Tab'));

	
	}


}


 ?>