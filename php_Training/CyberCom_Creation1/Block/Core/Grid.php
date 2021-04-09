<?php 
namespace Block\Core;
\Mage::loadFileByClassName('Block\Core\Template');

class Grid extends \Block\Core\Template{

	protected $collection = [];
	protected $columns = [];
	protected $actions = [];
	protected $methodName = null;
	protected $buttons = [];

	public function __construct(){
		parent ::__construct();
		//$this->setController($controller);
		$this->setTemplate('./View/core/grid.php');
		$this->prepareColumns();
		$this->prepareActions();
		$this->prepareButtons();

	}

	public function prepareCollection(){
		
		return $this;

	}


	
	public function setCollection($collection){
	
		$this->collection=$collection;
		return $this;

	}

	public function getCollection(){
		if(!$this->collection){
			$this->prepareCollection();
		}
		
		return $this->collection;
	}

	public function getColumns(){
		return $this->columns;
	}

	public function addColumn($key,$value){
		$this->columns[$key] = $value;
		return $this;

	}

	public function prepareColumns(){
		return $this;
	}

	public function getFieldValue($row, $field){
		return $row->$field;
	}

	public function getActions(){
		return $this->actions;

	}

	public function addActions($key,$value){
		$this->actions[$key] = $value;
		return $this;
	}

	public function prepareActions(){
		return $this;

	}

	public function getMethodUrl($row, $methodName){
		return $this->$methodName($row); 

	}

	
	public function getTitle(){
		return 'Manage Module';
	}

	public function getButtons(){
		return $this->buttons;

	}

	public function addButtons($key,$value){
		$this->buttons[$key] = $value;
		return $this;
	}

	public function prepareButtons(){
		return $this;

	}

	public function getButtonUrl( $methodName){
		return $this->$methodName(); 

	}

	

}


?>