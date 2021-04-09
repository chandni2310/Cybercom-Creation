<?php
namespace Controller\Admin;
\Mage::loadFileByClassName('Controller\Core\Admin');
\Mage::loadFileByClassName('Model\Core\Url');

class Brand extends \Controller\Core\Admin{

	protected $brand=[];

	public function __construct(){
		parent::__construct();
	}

	public function gridAction(){
		$layout = $this->getLayout();
		$layout->setTemplate('./View/core/layout/oneColumn.php');


		$content = $layout->getChild('content');
		$grid = \Mage::getBlock('Block\Admin\Brand\Grid');
		$content->addChild($grid,'grid');

		echo $layout->toHtml();


		
	}


	public function formAction(){
		

		try {
			$brand = \Mage::getModel('Model\brand');
			if($id = $this->getRequest()->getGet('brandId')){
				$brand = $brand->load($id);
			}

			$layout = $this->getLayout();

			$content = $layout->getChild('content');
			$edit = \Mage::getBlock('Block\Admin\Brand\Edit');
			$edit->setTableRow($brand);
			$content->addChild($edit,'edit');

			echo $layout->toHtml();

			
			
		} catch (\Exception $e) {
			echo $e->getMessage();
		}
	}

	
	public function saveAction(){
				/*print_r($_FILES);
				$imgName = ($_FILES['image']['name']);
				if($imgName){
					echo 'image';
				}
				echo ' noimage';

				die();*/
		try {
			if(!$this->getRequest()->isPost()){
					throw new \Exception("Invalid");
					
				}
				$brand = \Mage::getModel('Model\Brand');
				if($id=$this->getRequest()->getGet('brandId')){
					$brand = $brand->load($id);
					if(!$brand) {
						throw new Exception('no record');
					}
					$this->getMessage()->setSuccess('Updated successfully');
				} else{
					$brand->createdDate = date('Y-m-d H:i:s');
					$this->getMessage()->setSuccess('Created successfully');
				}
				$brandData=$this->getRequest()->getPost('brand');
				$brandImage = $this->getRequest()->getFiles('image');
				$brand->image = '';
				if(array_key_exists('name',$brandImage) && $brandImage['name']){
					$image = $_FILES['image']['name'];
					$tmpName = $_FILES['image']['tmp_name'];
					$path = 'Image/Brand/';
					move_uploaded_file($tmpName,$path.$image);
					$brand->image = $image;
				}
				$brand->setData($brandData);
				$brand->save();
				$this->redirect('grid');

			
			
		} catch (\Exception $e) {
			echo $e->getMessage();
			
		}
	}

	
	public function deleteAction(){

		 try {
		 	$request = \Mage::getModel('Model\Core\Request');
			 if (!$request->getGet('brandId')) $this->redirect('grid');
			 $brand = \Mage::getModel('Model\Brand');
			 $brand->load($request->getGet('brandId'));
			 $image = $brand->image; 
			if ($image) {
				unlink('Image/Brand/'.$image);
			}
			if($brand->delete()){
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