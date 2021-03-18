<?php
namespace Controller\Admin;
\Mage::loadFileByClassName('Controller\Core\Admin');
\Mage::loadFileByClassName('Model\Core\Url');

class CmsPage extends \Controller\Core\Admin{

	protected $cmsPage=[];

	public function __construct(){
		parent::__construct();
	}

	public function gridAction(){
		$layout = $this->getLayout();
		$layout->setTemplate('./View/core/layout/oneColumn.php');


		$content = $layout->getChild('content');
		$grid = \Mage::getBlock('Block\Admin\CmsPage\Grid');
		$content->addChild($grid,'grid');

		echo $layout->toHtml();


		
	}


	public function formAction(){
		

		try {
			$cmsPage = \Mage::getModel('Model\cmsPage');
			if($id = $this->getRequest()->getGet('pageId')){
				$cmsPage = $cmsPage->load($id);
			}

			$layout = $this->getLayout();

			$content = $layout->getChild('content');
			$edit = \Mage::getBlock('Block\Admin\CmsPage\Edit');
			$edit->setTableRow($cmsPage);
			$content->addChild($edit,'edit');

			echo $layout->toHtml();

			
			
		} catch (\Exception $e) {
			echo $e->getMessage();
		}
	}

	
	public function saveAction(){
		try {
			if(!$this->getRequest()->isPost()){
					throw new \Exception("Invalid");
					
				}
				$cmsPage = \Mage::getModel('Model\CmsPage');
				if($id=$this->getRequest()->getGet('pageId')){
					$cmsPage = $cmsPage->load($id);
					if(!$cmsPage) {
						throw new Exception('no record');
					}
					$this->getMessage()->setSuccess('Updated successfully');
				} else{
					$cmsPage->createdDate = date('Y-m-d H:i:s');
					$this->getMessage()->setSuccess('Created successfully');
				}
				$cmsPageData=$this->getRequest()->getPost('cmsPage');
				$cmsPage->setData($cmsPageData);
				$cmsPage->save();
				/*echo '<pre>';
				print_r($cmsPage);
				die();*/
				 $this->redirect('grid');

			
			
		} catch (\Exception $e) {
			echo $e->getMessage();
			
		}
	}

	
	public function deleteAction(){

		 try {
		 	$request = \Mage::getModel('Model\Core\Request');
			 if (!$request->getGet('pageId')) $this->redirect('grid');
			 $cmsPage = \Mage::getModel('Model\CmsPage');
			 $cmsPage->load($request->getGet('pageId'));
			 if($cmsPage->delete()){
		 	$this->getMessage()->setSuccess('record deleted');
		 } else{
		 	$this->getMessage()->setFailure('record  not deleted');

		 }
		} catch (\Exception $e){
			$this->getMessage()->setFailure($e->getMessage());
		}
       	$this->redirect('grid');

	}

}



 ?>