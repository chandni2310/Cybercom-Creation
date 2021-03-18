<?php 
namespace Block\Admin\CmsPage;
\Mage::loadFileByClassName('Block\Core\Template');
\Mage::loadFileByClassName('Model\Core\Url');

class Grid extends \Block\Core\Template{

	protected $cmsPage=[];

	public function __construct(){
		parent :: __construct();
		//$this->setController($controller);
		$this->setTemplate('./View/admin/cmsPage/cmsPage.php');
		$this->setCmsPage();
	}


	
	public function setCmsPage($cmsPage = null){
		if(!$cmsPage){
			$cmsPage = \Mage::getModel('Model\CmsPage');
			$cmsPage = $cmsPage->fetchAll();
		}


		$this->cmsPage=$cmsPage;
		return $this;

	}

	public function getCmsPage(){
		
		return $this->cmsPage;
	}
	
}


 ?>