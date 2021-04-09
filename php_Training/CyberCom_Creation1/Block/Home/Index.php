<?php 

namespace Block\Home;
\Mage::loadFileByClassName('Block\Core\Template');
/**
 * Index Class
 */
class Index extends \Block\Core\Template
{
	public function __construct()
	{
		parent::__construct();
		$this->setTemplate('./View/home/index.php');
		
	}

	

	
}

?>