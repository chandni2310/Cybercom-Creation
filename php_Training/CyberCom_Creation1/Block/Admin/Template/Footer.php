<?php 
namespace Block\Template;
\Mage::loadFileByClassName('Block\Core\Template');

class Footer extends \Block\Core\Template{
	public function __construct(){
		parent :: __construct();

		//$this->setController($controller);
		$this->setTemplate('./View/admin/footer.php');
		

	}

}


 ?>