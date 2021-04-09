<?php 
namespace Controller;
\Mage::loadFileByClassName('Controller\Core\Customer');

class Home extends Core\Customer{
	public function gridAction(){
		$layout = $this->getLayout();
		$content = $layout->getChild('content');
		$grid = \Mage::getBlock('Block\Home\Index');
		$content->addChild($grid,'grid');
		echo $layout->toHtml();
	}

	public function pageAction(){
		$page = \Mage::getController('Controller\Core\Pager');

		$product = \Mage::getModel('Model\Product');
		$query = "SELECT * FROM `product`";
		$productCount = $product->getAdapter()->fetchOne($query);
		$page->setTotalRecords($productCount);

		echo '<pre>';
		print_r($page);
	}
}


 ?>