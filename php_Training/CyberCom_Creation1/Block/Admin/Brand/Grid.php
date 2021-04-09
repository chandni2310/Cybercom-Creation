<?php 
namespace Block\Admin\Brand;
\Mage::loadFileByClassName('Block\Core\Grid');
//require_once './Model/Core/Url.php';



class Grid extends \Block\Core\Grid{

	public function prepareCollection(){
		$brand = \Mage::getModel('Model\Brand');
		$collection = $brand->fetchAll();
		$this->setCollection($collection);
		return $this;

	}

	public function prepareColumns(){
		$this->addColumn('brandId',[
			'field'=>'brandId',
			'label'=>'Brand Id',
			'type'=>'number'
		]);
		$this->addColumn('name',[
			'field'=>'name',
			'label'=>'Name',
			'type'=>'text'
		]);
		$this->addColumn('status',[
			'field'=>'status',
			'label'=>' Status',
			'type'=>'text'
		]);
		$this->addColumn('createdDate',[
			'field'=>'createdDate',
			'label'=>'Created Date',
			'type'=>'date'
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
		return $this;

	}

	

	public function getEditUrl($row){
		return $this->getUrl()->getUrl('form', NULL, ['brandId'=>$row->brandId],true);

	}

	public function getDeleteUrl($row){
		return $this->getUrl()->getUrl('delete', NULL, ['brandId'=>$row->brandId],true);


	}

	 

	public function prepareButtons(){
		$this->addButtons('addNew',[
			'label'=>'Add New',
			'method'=>'getAddNewUrl'
		]);
		
		return $this;
	}


	public function getAddNewUrl(){
		return $this->getUrl()->getUrl('form');

	}

	public function getTitle(){
		return 'Manage Brand';
	}



	
}


 ?>