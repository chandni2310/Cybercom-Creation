<?php
namespace Controller\Admin;
\Mage::loadFileByClassName('Controller\Core\Admin');
//Mage::loadFileByClassName('Model_Core_Url');


class Category extends \Controller\Core\Admin{

	protected $category=[];

	public function __construct(){
		parent::__construct();
	}

	
	public function gridAction(){
		

		$layout = $this->getLayout();
		$layout->setTemplate('./View/core/layout/oneColumn.php');


		$content = $layout->getChild('content');
		$grid = \Mage::getBlock('Block\Admin\Category\Grid');
		$content->addChild($grid,'grid');


		echo $layout->toHtml();

		
	}



	public function formAction(){
		

		try {
			$category = \Mage::getModel('Model\Category');
			if($id = $this->getRequest()->getGet('categoryId')){
				$category = $category->load($id);
			}

			
			$layout = $this->getLayout();

			$content = $layout->getChild('content');
			$edit = \Mage::getBlock('Block\Admin\Category\Edit');
			$edit->setTableRow($category);
			$content->addChild($edit,'edit');

			echo $layout->toHtml();

			
		} catch (\Exception $e) {
			echo $e->getMessage();
		}
	}

	
	


	public function saveAction(){
		$postData = $this->getRequest()->getPost('category');
		$category = \Mage::getModel('Model\Category');
		if($id=$this->getRequest()->getGet('categoryId')){
			$category = $category->load($id);
			if(!$category) {
				throw new \Exception('no record');
			}
			$this->getMessage()->setSuccess('Updated successfully');
		} else{
			$this->getMessage()->setSuccess('Created successfully');
		}

		$categoryPathId = $category->pathId; 
		$category->setData($postData);
		$category->save();
	

		$category->updatePathId();
		//managing childrens
		$category->updateChildrenPathIds($categoryPathId);
		

		/*echo '<pre>';
		print_r($category);*/
		$this->redirect('grid');


	}



	public function deleteAction(){

		try{
		 $request = \Mage::getModel('Model\Core\Request');
		 if (!$request->getGet('categoryId')) $this->redirect('grid');
		 $category = \Mage::getModel('Model\Category');
		 $category->load($request->getGet('categoryId'));
		 $pathId = $category->pathId;
		 $parentId = $category->parentId;
		 $category->updateChildrenpathIds($pathId,$parentId);
		 die();

		if($category->delete()){
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