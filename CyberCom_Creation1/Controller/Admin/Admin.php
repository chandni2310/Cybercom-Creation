<?php
namespace Controller\Admin;
\Mage::loadFileByClassName('Model\Core\Url'); 
\Mage::loadFileByClassName('Controller\Core\Admin');


class Admin extends \Controller\Core\Admin{

	protected $admin=[];


	public function __construct(){
		parent::__construct();
	}

	public function testAction(){

		/*echo '<pre>';
		$session = new Model_Core_Session();
		print_r($_SESSION);
		$session->name = 'excellent';
		print_r($_SESSION);*/
	}

	public function gridAction(){
		

		$layout = $this->getLayout();
		$layout->setTemplate('./View/core/layout/oneColumn.php');


		$content = $layout->getChild('content');
		$grid = \Mage::getBlock('Block\Admin\Admin\Grid');
		$grid->setController($this);
		$content->addChild($grid,'grid');
		echo $layout->toHtml();
		




		
	}

	
	public function formAction(){
		try {
			$admin = \Mage::getModel('Model\Admin');
			if($id = $this->getRequest()->getGet('adminId')){
				$admin = $admin->load($id);
			}

			
			$layout = $this->getLayout();

			$content = $layout->getChild('content');
			$edit = \Mage::getBlock('Block\Admin\Admin\Edit');
			$edit->setTableRow($admin);
			$content->addChild($edit,'edit');
			echo $layout->toHtml();

			
			
		} catch (\Exception $e) {
			$this->getMessage()->setFailure($e->getMessage());
			
		}
	}

	

	public function saveAction(){

		try {

				if(!$this->getRequest()->isPost()){
					throw new Exception("Invalid");
					
				}
				$admin= \Mage::getModel('Model\Admin');
				if($id=$this->getRequest()->getGet('adminId')){
					$admin = $admin->load($id);
					if(!$admin) {
						throw new Exception('no record');
					}
					//$product->updatedDate = date('Y-m-d H:i:s');
					$this->getMessage()->setSuccess('Updated successfully');
				} else{
					$admin->createdDate = date('Y-m-d H:i:s');
					$this->getMessage()->setSuccess('Created successfully');
				}
				$adminData=$this->getRequest()->getPost('admin');
				$admin->setData($adminData);
				
				$result=$admin->save();
				$this->redirect('grid');
				

	} catch (Exception $e) {
			echo $e->getMessage();
			
		}
		
}

	
	
	public function deleteAction(){
		try{
		$request = \Mage::getModel('Model\Core\Request');
		 //if (!$request->getGet('productId')) $this->redirect('grid');
		 $admin = \Mage::getModel('Model\Admin');
		 $admin->load($request->getGet('adminId'));
		 if($admin->delete()){
		 	$this->getMessage()->setSuccess('record deleted');
		 } else{
		 	$this->getMessage()->setFailure('record  not deleted');

		 }
		} catch (Exception $e){
			$this->getMessage()->setFailure($e->getMessage());

	}
	$this->redirect('grid');





}
}



 ?>