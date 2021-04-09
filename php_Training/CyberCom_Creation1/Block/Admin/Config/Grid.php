<?php 
namespace Block\Admin\Config;

class Grid extends \Block\Core\Grid{

	

	public function prepareCollection(){
		$configGroup = \Mage::getModel('Model\Config\Group');
		$collection = $configGroup->fetchAll();
		$this->setCollection($collection);
		return $this;

	}


	
	

	public function prepareColumns(){
		$this->addColumn('groupId',[
			'field'=>'groupId',
			'label'=>'Group Id',
			'type'=>'number'
		]);
		$this->addColumn('name',[
			'field'=>'name',
			'label'=>' Group Name',
			'type'=>'text'
		]);
		$this->addColumn('Created Date',[
			'field'=>'createdDate',
			'label'=>'created Date',
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
		return $this->getUrl()->getUrl('form', NULL, ['groupId'=>$row->groupId],true);

	}

	public function getDeleteUrl($row){
		return $this->getUrl()->getUrl('delete', NULL, ['groupId'=>$row->groupId],true);


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

	




	
}


 ?>