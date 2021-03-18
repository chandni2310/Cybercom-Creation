<?php
namespace Controller\Admin;
\Mage::loadFileByClassName('Controller\Core\Admin');
\Mage::loadFileByClassName('Model\Core\Url');

//require_once 'Adapter.php';
class Shipping extends \Controller\Core\Admin{

	protected $shipping=[];

	public function __construct(){
		parent::__construct();
	}

	public function gridAction(){
		$layout = $this->getLayout();
		$layout->setTemplate('./View/core/layout/oneColumn.php');


		$content = $layout->getChild('content');
		$grid = \Mage::getBlock('Block\Admin\Shipping\Grid');
		$content->addChild($grid,'grid');

		echo $layout->toHtml();


		
	}

	


	public function formAction(){
		

		try {
			$shipping = \Mage::getModel('Model\Shipping');
			if($id = $this->getRequest()->getGet('shippingId')){
				$shipping = $shipping->load($id);
			}

			$layout = $this->getLayout();

			$content = $layout->getChild('content');
			$edit = \Mage::getBlock('Block\Admin\Shipping\Edit');
			$edit->setTableRow($shipping);
			$content->addChild($edit,'edit');

			/*$contentl = $layout->getChild('left');
			$left = \Mage::getBlock('Block\Admin\Shipping\Edit\Tab');
			$contentl->addChild($left,'left');*/
			echo $layout->toHtml();

			
			
		} catch (\Exception $e) {
			echo $e->getMessage();
		}
	}

	
	public function saveAction(){
		try {
			if(!$this->getRequest()->isPost()){
					throw new Exception("Invalid");
					
				}
				$shipping = \Mage::getModel('Model\Shipping');
				if($id=$this->getRequest()->getGet('shippingId')){
					$shipping = $shipping->load($id);
					if(!$shipping) {
						throw new \Exception('no record');
					}
					$this->getMessage()->setSuccess('Updated successfully');
				} else{
					$shipping->createdDate = date('Y-m-d H:i:s');
					$this->getMessage()->setSuccess('Created successfully');
				}
				$shippingData=$this->getRequest()->getPost('shipping');
				$shipping->setData($shippingData);
				$result=$shipping->save();
				 $this->redirect('grid');

			
			
		} catch (Exception $e) {
			echo $e->getMessage();
			
		}
	}

	
	public function deleteAction(){

		 try {
		 	$request = \Mage::getModel('Model\Core\Request');
			 if (!$request->getGet('shippingId')) $this->redirect('grid');
			 $shipping = \Mage::getModel('Model\Shipping');
			 $shipping->load($request->getGet('shippingId'));
			 if($shipping->delete()){
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