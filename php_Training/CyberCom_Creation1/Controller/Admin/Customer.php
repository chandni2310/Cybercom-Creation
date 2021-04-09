<?php
namespace Controller\Admin;
\Mage::loadFileByClassName('Controller\Core\Admin');
\Mage::loadFileByClassName('Model\Core\Url');



class Customer extends \Controller\Core\Admin{

	protected $customer=[];
	public function __construct(){
		parent::__construct();
	}

	public function gridAction(){

		$layout = $this->getLayout();
		$layout->setTemplate('./View/core/layout/oneColumn.php');


		$content = $layout->getChild('content');
		$grid = \Mage::getBlock('Block\Admin\Customer\Grid');
		$content->addChild($grid,'grid');

		
		echo $layout->toHtml();



		
	}

	public function setCustomer($customer){
		$this->customer=$customer;
		return $this;

	}

	public function getCustomer(){
		return $this->customer;
	}

	public function formAction(){

		try {
			$customer = \Mage::getModel('Model\Customer');
			if($id = $this->getRequest()->getGet('customerId')){
				$customer = $customer->load($id);
			}
			$layout = $this->getLayout();

			$content = $layout->getChild('content');
			$edit = \Mage::getBlock('Block\Admin\Customer\Edit');
			$edit->setTableRow($customer);
			$content->addChild($edit,'edit');
			echo $layout->toHtml();

			
			
			
		} catch (\Exception $e) {
			echo $e->getMessage();
		}

}



	public function saveAction(){
		try {
			date_default_timezone_set("Asia/Calcutta");

			if(!$this->getRequest()->isPost()){
					throw new \Exception("Invalid");
					
				}

				/*$tab = $this->getRequest()->getGet('tab');
				if($tab == 'address'){
					$billingAddress = new Model_CustomerAddress();
					$billingAddressData = $this->getRequest()->getPost('billingAddress');
					$billingAddress->setData($billingAddressData);
					$result= $billingAddress->save();
					if ($result){
						$this->redirect('grid');
					} else{
						echo 'error';
					}
				}*/


				$customer= \Mage::getModel('Model\Customer');
				$tab = $this->getRequest()->getGet('tab','customer');
				$id=$this->getRequest()->getGet('customerId');
				if($tab =='customer'){
				if($id=$this->getRequest()->getGet('customerId')){
					$customer = $customer->load($id);
					if(!$customer) {
						throw new \Exception('no record');
					}
					$customer->updatedDate = date('Y-m-d H:i:s');
					$this->getMessage()->setSuccess('Updated successfully');
				} else{
					$customer->createdDate = date('Y-m-d H:i:s');
					$this->getMessage()->setSuccess('Created successfully');
				}

				$customerData=$this->getRequest()->getPost('customer');
				$customer->setData($customerData);
				$result=$customer->save();
				
			}
			 	else if($tab =='address'){
			 		
					$shippingAddress = \Mage::getModel('Model\CustomerAddress');
					$billingAddress = \Mage::getModel('Model\CustomerAddress');
					$billingData = $this->getRequest()->getPost('billingAddress');
					$shippingData = $this->getRequest()->getPost('shippingAddress');
					$shippingAddress->setData($shippingData);
					$billingAddress->setData($billingData);
					$billingAddress->setData(['customerId'=> $id]);
					$shippingAddress->setData(['customerId'=> $id]);
					$shippingAddress->save();
					$billingAddress->save();


				}

				$this->redirect('grid');

	
		} catch (\Exception $e) {
			echo $e->getMessage();
			
		}

		
	}

	

	public function deleteAction(){
		try {

		 $request = \Mage::getModel('Model\Core\Request');
		 if (!$request->getGet('customerId')) $this->redirect('grid');
		 $customer= \Mage::getModel('Model\Customer');
		 $customer->load($request->getGet('customerId'));
		 if($customer->delete()){
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