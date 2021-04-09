<?php
namespace Controller\Admin;


class Config extends \Controller\Core\Admin{

	protected $configGroup = [];

	public function __construct(){
		parent::__construct();
	}

	public function gridAction(){
		$layout = $this->getLayout();
		$layout->setTemplate('./View/core/layout/oneColumn.php');


		$content = $layout->getChild('content');
		$grid = \Mage::getBlock('Block\Admin\Config\Grid');
		$content->addChild($grid,'grid');

		echo $layout->toHtml();


		
	}

	
	public function formAction(){
		

		try {
			$configGroup = \Mage::getModel('Model\Config\Group');
			if($id = $this->getRequest()->getGet('groupId')){
				$configGroup = $configGroup ->load($id);
			}
			

			$layout = $this->getLayout();

			$content = $layout->getChild('content');
			$edit = \Mage::getBlock('Block\Admin\Config\Edit');
			$edit->setTableRow($configGroup);
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
				$configGroup = \Mage::getModel('Model\Config\Group');
				if($id=$this->getRequest()->getGet('groupId')){
					$configGroup = $configGroup->load($id);
					if(!$configGroup) {
						throw new \Exception('no record');
					}
				} else{
					$configGroup->createdDate = date('Y-m-d H:i:s');
					$this->getMessage()->setSuccess('Created successfully');
				}
				$configGroupData=$this->getRequest()->getPost('configGroup');
				$configGroup->setData($configGroupData);
				$result=$configGroup->save();
				 $this->redirect('grid');

			
			
		} catch (\Exception $e) {
			echo $e->getMessage();
			
		}
	}

	
	public function deleteAction(){

		 try {
		 	$request = \Mage::getModel('Model\Core\Request');
			 if (!$request->getGet('groupId')) $this->redirect('grid');
			 $configGroup = \Mage::getModel('Model\Config\Group');
			 $configGroup->load($request->getGet('groupId'));
			 if($configGroup->delete()){
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