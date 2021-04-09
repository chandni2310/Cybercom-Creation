<?php 
namespace Controller\Core;

class Pager{
	protected $totalRecords = null;
	protected $recordsPerPage = null;
	protected $noOfPages = null;
	protected $start = null;
	protected $end = null;
	protected $previous = null;
	protected $next = null;

	public function setTotalRecords($totalRecords){
		$this->totalRecords = $totalRecords;
		return $this;

	}

	public function getTotalRecords(){
		return $this->totalRecords;

	}

	public function setRecordPerPage($recordPerPage){
		$this->recordPerPage = $recordPerPage;
		return $this;

	}

	public function getRecordPerPage(){
		return $this->recordPerPage;

	}

	public function setNoOfPages($noOfPages){
		$this->noOfPages = $noOfPages;
		return $this;

	}

	public function getNoOfPages(){
		return $this->noOfPages;

	}

	public function setStart($start){
		$this->start = $start;
		return $this;

	}

	public function getStart(){
		return $this->start;

	}

	public function setEnd($end){
		$this->end = $end;
		return $this;

	}

	public function getEnd(){
		return $this->end;

	}


}


 ?>