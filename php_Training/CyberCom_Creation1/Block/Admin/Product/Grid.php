<?php 
namespace Block\Admin\Product;
\Mage::loadFileByClassName('Block\Core\Grid');

class Grid extends \Block\Core\Grid{

	

	public function prepareCollection(){
		$product = \Mage::getModel('Model\Product');
		$collection = $product->fetchAll();
		$this->setCollection($collection);
		return $this;

	}


	
	

	public function prepareColumns(){
		$this->addColumn('productId',[
			'field'=>'productId',
			'label'=>'Product Id',
			'type'=>'number'
		]);
		$this->addColumn('name',[
			'field'=>'name',
			'label'=>' Product Name',
			'type'=>'text'
		]);
		$this->addColumn('price',[
			'field'=>'price',
			'label'=>' product price',
			'type'=>'decimal'
		]);
		$this->addColumn('sku',[
			'field'=>'sku',
			'label'=>'Product SKU',
			'type'=>'number'
		]);
		return $this;
	}

	

	public function prepareActions(){
		$this->addActions('edit',[
			'label'=>'Edit',
			'method'=>'getEditUrl'
		]);
		$this->addActions('delete',[
			'label'=>'Delete',
			'method'=>'getDeleteUrl'
		]);
		$this->addActions('addToCart',[
			'label'=>'Add to Cart',
			'method'=>'getCartUrl'
		]);
		return $this;

	}

	

	public function getEditUrl($row){
		return $this->getUrl()->getUrl('form', NULL, ['productId'=>$row->productId],true);

	}

	public function getDeleteUrl($row){
		return $this->getUrl()->getUrl('delete', NULL, ['productId'=>$row->productId],true);


	}

	public function getCartUrl($row){
		return $this->getUrl()->getUrl('addToCart', 'cart', ['productId'=>$row->productId],true);


	}

	 

	public function prepareButtons(){
		$this->addButtons('addNew',[
			'label'=>'Add New',
			'method'=>'getAddNewUrl'
		]);
		$this->addButtons('addFilter',[
			'label'=>'Add Filter',
			'method'=>'getAddFilterUrl'
		]);
		
		return $this;
	}


	public function getAddNewUrl(){
		return $this->getUrl()->getUrl('form');

	}

	public function getAddFilterUrl(){
		return $this->getUrl()->getUrl('filter');

	}





	
}


 ?>