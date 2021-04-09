<?php
namespace Controller\Admin;
\Mage::loadFileByClassName('Controller\Core\Admin');
//Mage::loadFileByClassName('Model_Core_Url');


class Product extends \Controller\Core\Admin{


	public function __construct(){
		parent::__construct();
	}

	public function testAction(){

		/*$response = [
			'status'=>'success',
			'message'=>'hello world',
			'postdata'=>$_POST 

		];
		header('Content-Type:application/json');
		echo json_encode($response);*/
		
		

	}

	public function gridAction(){
		

		
		$layout = $this->getLayout();
		$layout->setTemplate('./View/core/layout/oneColumn.php');


		$content = $layout->getChild('content');
		$grid = \Mage::getBlock('Block\Admin\Product\Grid');
		$content->addChild($grid,'grid');

		echo $layout->toHtml();
		

		
	}

	public function filterAction(){
		echo '1';



		/*$_SESSION = $_POST;
		if(isset($_SESSION['filter'])){
			$filterData = $_SESSION['filter'];

		}
		$this->redirect('grid');
*/

	


		//print_r($_SESSION);


	}


	public function formAction(){
		try {
			$product = \Mage::getModel('Model\Product');
			if($id = $this->getRequest()->getGet('productId')){
				$product = $product->load($id);
			}
			
			$layout = $this->getLayout();
			$layout->setTemplate('./View/core/layout/oneColumn.php');

			/*$contentl = $layout->getChild('left');
			$left = \Mage::getBlock('Block\Admin\Product\Edit\Tab');
			$contentl->addChild($left,'left');
*/
			$content = $layout->getChild('content');
			$edit = \Mage::getBlock('Block\Admin\Product\Edit');
			$edit->setTableRow($product);
			$content->addChild($edit,'edit');

			echo $layout->toHtml();

			
		} catch (\Exception $e) {
			$this->getMessage()->setFailure($e->getMessage());
			
		}
	}

	
	public function saveAction(){

		try {

				if(!$this->getRequest()->isPost()){
					throw new \Exception("Invalid");
					
				}

				/*if($tab=$this->getRequest()->getGet('tab')){
					if($tab == 'product'){
						echo 'product';
					}
				}
				die();*/
				$product = \Mage::getModel('Model\Product');
				if($id=$this->getRequest()->getGet('productId')){
					$product = $product->load($id);
					if(!$product) {
						throw new \Exception('no record');
					}
					$product->updatedDate = date('Y-m-d H:i:s');
					$this->getMessage()->setSuccess('Updated successfully');
				} else{
					$product->createdDate = date('Y-m-d H:i:s');
					$this->getMessage()->setSuccess('Created successfully');
				}
				$productData=$this->getRequest()->getPost('product');
				$product->setData($productData);
				$r=$product->save();
				/*echo '<pre>';
				print_r($r);*/
				$this->redirect('grid');
			
	} catch (\Exception $e) {
			echo $e->getMessage();
			
		}
		
}

	
	
	public function deleteAction(){
		try{
		$request = \Mage::getModel('Model\Core\Request');
		 //if (!$request->getGet('productId')) $this->redirect('grid');
		 $product = \Mage::getModel('Model\Product');
		 $product->load($request->getGet('productId'));
		 if($product->delete()){
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