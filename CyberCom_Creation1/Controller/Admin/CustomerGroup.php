<?php 
namespace Controller\Admin;
\Mage::loadFileByClassName('Controller\Core\Admin');
\Mage::loadFileByClassName('Model\Core\Url');



class CustomerGroup extends \Controller\Core\Admin{
	protected $customerGroup=[];
	public function __construct(){
		parent::__construct();
	}

	public function gridAction(){
		$layout = $this->getLayout();
		$layout->setTemplate('./View/core/layout/oneColumn.php');


		$content = $layout->getChild('content');
		$grid = \Mage::getBlock('Block\Admin\CustomerGroup\Grid');
		$content->addChild($grid,'grid');

		echo $layout->toHtml();


}

public function formAction(){
		try {
			/*$product=new Model_Product();
			if($id = $this->getRequest()->getGet('productId')){
				$product = $product->load($id);
			}*/
			$layout = $this->getLayout();

			$contentl = $layout->getChild('left');
			$left = \Mage::getBlock('Block\Admin\CustomerGroup\Edit\Tab');
			$contentl->addChild($left,'left');

			$content = $layout->getChild('content');
			$edit = \Mage::getBlock('Block\Admin\CustomerGroup\Edit');
			$content->addChild($edit,'edit');

			echo $layout->toHtml();

			
		} catch (Exception $e) {
			$this->getMessage()->setFailure($e->getMessage());
			
		}

	}


	public function saveAction(){
		try {
			if(!$this->getRequest()->isPost()){
					throw new Exception("Invalid");
					
				}
				$customerGroup = \Mage::getModel('Model\CustomerGroup');
				if($id=$this->getRequest()->getGet('groupId')){
					$customerGroup = $customerGroup->load($id);
					if(!$customerGroup) {
						throw new Exception('no record');
					}
					$this->getMessage()->setSuccess('Updated successfully');
				} else{
					$customerGroup->createdDate = date('Y-m-d H:i:s');
					$this->getMessage()->setSuccess('Created successfully');
				}
				$customerGroupData=$this->getRequest()->getPost('customerGroup');
				$customerGroup->setData($customerGroupData);
				$result=$customerGroup->save();
				if($result){
				 $this->redirect('grid');
				} else{
					echo 'error';
				}


			
			
		} catch (Exception $e) {
			echo $e->getMessage();
			
		}
	}


	public function deleteAction(){
		try{
		$request = \Mage::getModel('Model\Core\Request');
		 //if (!$request->getGet('productId')) $this->redirect('grid');
		 $customerGroup = \Mage::getModel('Model\CustomerGroup');
		 $customerGroup->load($request->getGet('groupId'));
		 if($customerGroup->delete()){
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