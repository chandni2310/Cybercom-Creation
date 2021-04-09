<?php
namespace Controller\Admin;
\Mage::loadFileByClassName('Controller\Core\Admin');

class ProductMedia extends \Controller\Core\Admin{

	protected $products=[];


	public function __construct(){
		parent::__construct();
	}

	

	public function gridAction(){
		
		$layout = $this->getLayout();
		$layout->setTemplate('./View/core/layout/threeColumn.php');


		$content = $layout->getChild('content');
		$grid = \Mage::getBlock('Block\Admin\Product\Grid');
		$grid->setController($this);
		$content->addChild($grid,'grid');
		
		echo $layout->toHtml();
		
		
	}

	
	public function formAction(){
		try {
			
			$layout = $this->getLayout();

			
			$contentl = $layout->getChild('left');
			$left = \Mage::getBlock('Block\Admin\Product\Edit\Tab');
			$contentl->addChild($left,'left');

			$content = $layout->getChild('content');
			$edit = \Mage::getBlock('Block\Admin\Product\Edit');
			$content->addChild($edit,'edit');


			echo $layout->toHtml();
			
			
		} catch (\Exception $e) {
			$this->getMessage()->setFailure($e->getMessage());
			
		}
	}

	public function saveAction(){
		//if($_FILES)
		$this->imageUpload();
		$productMedia =  \Mage::getModel('Model\ProductMedia');
		$productId = $this->getRequest()->getGet('productId');
		$imageData = $this->getRequest()->getPost('image');
		
		foreach ($imageData['data'] as $key => $value) {
			
			$productMedia = $productMedia->load($key);
			$productMedia->gallery = 0;
			//$productMedia->save();
			$productMedia->setData($imageData['data'][$key]);
			$productMedia->save();
		
		}
		
	
		array_shift($imageData);
		$thumbId = $imageData['data2']['thumb'];
		$smallId = $imageData['data2']['small'];
		$baseId = $imageData['data2']['base'];
		$productMedia->saveImage($productId,$thumbId,$smallId,$baseId);
		
		$this->redirect('form','product');


		/*foreach ($imageData['data2'] as $key => $value) {
			
			$productMedia = $productMedia->load($key);
			$productMedia->setData($imageData['data2'][$key]);

			$productMedia->save();
		
		}
		echo '<pre>';
		print_r($productMedia);
		die();

		$base = $imageData['base'];
		//$productMedia = $productMedia->load($base);
		$productMedia->setData($imageData);
		$productMedia->save();
		echo '<pre>';
		print_r($productMedia);*/
		//$this->imageUpload(); 
	}

	


	public function imageUpload(){
		try {
				
				$productMedia = \Mage::getModel('Model\ProductMedia');
				$photo = $_FILES['photo']['name'];
				$tmpName = $_FILES['photo']['tmp_name'];
				$path = 'Image/Product/';
				move_uploaded_file($tmpName,$path.$photo);
				$productMedia->image = $photo;
				$productMedia->productId = $this->getRequest()->getGet('productId');
				$productMedia->save();
				//$this->redirect('form','product');

				

			
	} catch (\Exception $e) {
			echo $e->getMessage();
			
		}
		
}

	
	
	public function deleteAction(){
		try{
			$productMedia = \Mage::getModel('Model\ProductMedia');
			$data = $this->getRequest()->getPost('image');
			$productMedia->setData($data);
			$delete = $productMedia->remove;
			$row = implode(",",$delete);
			$productMedia->deleteImage($row);
			$productMedia->delete("DELETE FROM `{$productMedia->getTableName()}`WHERE `{$productMedia->getPrimaryKey()}` IN ($row)");

			if($productMedia->delete("DELETE FROM `{$productMedia->getTableName()}`WHERE `{$productMedia->getPrimaryKey()}` IN ($row)")){
			 	$this->getMessage()->setSuccess('record deleted');
			 } else{
			 	$this->getMessage()->setFailure('record  not deleted');

			 }
			} catch (\Exception $e){
				$this->getMessage()->setFailure($e->getMessage());
			}




		$this->redirect('form','product');


	}

}



 ?>