<?php 
namespace Controller\Admin\Product;
\Mage::loadFileByClassName('Controller\Core\Admin');

class GroupPrice extends \Controller\Core\Admin{

	public function __construct(){
		parent::__construct();
	}

	public function formAction(){
		try{
		$productId = (int)$this->getRequest()->getGet('productId');
		$product = \Mage::getModel('Model\Product')->load($productId);
		if(!$product){
			throw new \Exception("No record found");
			
		}

		
		$layout = $this->getLayout();
		$layout->setTemplate('./View/core/layout/threeColumn.php');
		$contentl = $layout->getChild('left');
		$left = \Mage::getBlock('Block\Admin\Product\Edit\Tab');
		$contentl->addChild($left,'left');

		$content = $layout->getChild('content');
		$edit = \Mage::getBlock('Block\Admin\Product\Edit\Tabs\GroupPrice')->setProduct($product);
		$content->addChild($edit,'edit');

		echo $layout->toHtml();
	} catch (Exception $e){
		echo $e->getMessage();
	}

	}

	public function saveAction(){
		$groupData = $this->getRequest()->getPost('groupPrice');
		$productId = $this->getRequest()->getGet('productId');
		foreach ($groupData['exist'] as $groupId => $price) {
			$query = "SELECT * FROM `product_group_price` WHERE productId={$productId} AND customerGroupId = {$groupId}";
			$groupPrice = \Mage::getModel('Model\Product\Group\Price');
			$groupPrice->fetchRow($query);
			$groupPrice->price = $price;
			$groupPrice->save();
			//print_r($groupPrice);
		}

		foreach ($groupData['new'] as $groupId => $price) {
			$groupPrice = \Mage::getModel('Model\Product\Group\Price');
			$groupPrice->customerGroupId = $groupId;
			$groupPrice->productId = $productId;
			$groupPrice->price = $price;
			$groupPrice->save();
			
		}
		$this->redirect('form','product');
	}


	}


 ?>