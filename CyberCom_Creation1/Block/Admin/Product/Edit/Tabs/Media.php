<?php 
namespace Block\Admin\Product\Edit\Tabs;
\Mage::loadFileByClassName('Block\Core\Edit');

class Media extends \Block\Core\Edit{
	protected $image = [];

	public function __construct(){
		parent::__construct();
		$this->setTemplate('./View/admin/product/edit/tabs/media.php');
	}

	public function setImage($image = null){
	if($image){
			$this->image = $image;
			return $this;
		}

		$image = \Mage::getModel('Model\ProductMedia');
		if($id = $this->getRequest()->getGet('productId')){
			$query = "SELECT * FROM `{$image->getTablename()}` WHERE `productId`=$id";
			$image = $image->fetchAll($query);
			//$image = $image->load($id);
		}

		$this->image = $image;
		return $this;
	}

	public function getImage(){
		if(!$this->image){
			$this->setImage();
		}
		
		return $this->image;

	}

	public function getGalleryOption(){
		$image = \Mage::getModel('Model\ProductMedia');
		$id = $this->getRequest()->getGet('productId');
		$query = "SELECT `gallery` FROM `{$image->getTablename()}` WHERE `productId`=$id";
		$image = $image->getAdapter()->fetchAll($query);
		foreach ($image as $key => $value) {
			$gallery[] = implode(',',$value);
		}
		return $gallery;
	}

}

 ?>