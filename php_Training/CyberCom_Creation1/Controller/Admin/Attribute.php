<?php
namespace Controller\Admin;
\Mage::loadFileByClassName('Controller\Core\Admin');
\Mage::loadFileByClassName('Model\Core\Url');

class Attribute extends \Controller\Core\Admin{

	protected $attribute=[];

	public function __construct(){
		parent::__construct();
	}

	public function gridAction(){
		$layout = $this->getLayout();
		$layout->setTemplate('./View/core/layout/oneColumn.php');


		$content = $layout->getChild('content');
		$grid = \Mage::getBlock('Block\Admin\Attribute\Grid');
		$content->addChild($grid,'grid');

		echo $layout->toHtml();


		
	}

	
	public function formAction(){
		

		try {
			$attribute = \Mage::getModel('Model\Attribute');
			if($id = $this->getRequest()->getGet('attributeId')){
				$attribute = $attribute ->load($id);
			}
			

			$layout = $this->getLayout();

			$content = $layout->getChild('content');
			$edit = \Mage::getBlock('Block\Admin\Attribute\Edit');
			$edit->setTableRow($attribute);
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
				$attribute = \Mage::getModel('Model\Attribute');
				if($id=$this->getRequest()->getGet('attributeId')){
					$attribute = $attribute->load($id);
					if(!$attribute) {
						throw new \Exception('no record');
					}
				} else{
					$this->getMessage()->setSuccess('Created successfully');
				}
				$attributeData=$this->getRequest()->getPost('attribute');
				$attribute->setData($attributeData);
				$result=$attribute->save();
				 $this->redirect('grid');

			
			
		} catch (\Exception $e) {
			echo $e->getMessage();
			
		}
	}

	
	public function deleteAction(){

		 try {
		 	$request = \Mage::getModel('Model\Core\Request');
			 if (!$request->getGet('attributeId')) $this->redirect('grid');
			 $attribute = \Mage::getModel('Model\Attribute');
			 $attribute->load($request->getGet('attributeId'));
			 if($attribute->delete()){
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