<?php
namespace Controller\Admin;
\Mage::loadFileByClassName('Controller\Core\Admin');
\Mage::loadFileByClassName('Model\Core\Url');


class Payment extends \Controller\Core\Admin{

	protected $payment=[];


	public function __construct(){
		parent::__construct();
	}

	public function gridAction(){
		$layout = $this->getLayout();
		$layout->setTemplate('./View/core/layout/oneColumn.php');


		$content = $layout->getChild('content');
		$grid = \Mage::getBlock('Block\Admin\Payment\Grid');
		$content->addChild($grid,'grid');

		
		echo $layout->toHtml();

	}

	public function setPayment($payment){
		$this->payment=$payment;
		return $this;

	}

	public function getPayment(){
		return $this->payment;
	}

	public function formAction(){
		try {

			$payment = \Mage::getModel('Model\Payment');
			if($id = $this->getRequest()->getGet('methodId')){
				$payment = $payment->load($id);
			}

			$layout = $this->getLayout();
			$layout->setTemplate('./View/core/layout/oneColumn.php');

			$content = $layout->getChild('content');
			$edit = \Mage::getBlock('Block\Admin\Payment\Edit');
			$edit->setTableRow($payment);
			$content->addChild($edit,'edit');

			echo $layout->toHtml();

			
			

			
		} catch (\Exception $e) {
			
		}
	}






	public function saveAction(){

		try {

				if(!$this->getRequest()->isPost()){
					throw new Exception("Invalid");
					
				}
				$payment = \Mage::getModel('Model\Payment') ;
				if($id=$this->getRequest()->getGet('methodId')){
					$payment = $payment->load($id);
					if(!$payment) {
						throw new \Exception('no record');
					}
					//$product->updatedDate = date('Y-m-d H:i:s');
					$this->getMessage()->setSuccess('Updated successfully');
				} else{
					$payment->createdDate = date('Y-m-d H:i:s');
					$this->getMessage()->setSuccess('Created successfully');
				}
				$paymentData=$this->getRequest()->getPost('payment');
				$payment->setData($paymentData);
				$result=$payment->save();
				 $this->redirect('grid');
				

	} catch (\Exception $e) {
			echo $e->getMessage();
			
		}
		
}

	

			

	public function deleteAction(){
		try {
			$request = \Mage::getModel('Model\Core\Request');
		  	if (!$request->getGet('methodId')) $this->redirect('grid');
		 	$payment = \Mage::getModel('Model\Payment');
		 	$payment->load($request->getGet('methodId'));
		 	if($payment->delete()){
		 	$this->getMessage()->setSuccess('record deleted');
		 } else{
		 	$this->getMessage()->setFailure('record  not deleted');

		 }
		} catch (\Exception $e) {
			$this->getMessage()->setFailure($e->getMessage());
			
		}
		
       $this->redirect('grid');
	}





}



 ?>