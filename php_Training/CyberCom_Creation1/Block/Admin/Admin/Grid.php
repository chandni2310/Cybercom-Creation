<?php 
namespace Block\Admin\Admin;
\Mage::loadFileByClassName('Block\Core\Template');
//require_once './Model/Core/Url.php';



class Grid extends \Block\Core\Template{

	protected $admin = [];

	public function __construct(){
		parent ::__construct();
		//$this->setController($controller);
		$this->setTemplate('./View/admin/admin/admin.php');
		$this->setAdmin();

	}


	
	public function setAdmin($admin = null){
		if(!$admin){
			$admin = \Mage::getModel('Model\Admin');
			$admin = $admin->fetchAll();
		}


		$this->admin=$admin;
		return $this;

	}

	public function getAdmin(){
		
		return $this->admin;
	}

	
}


 ?>