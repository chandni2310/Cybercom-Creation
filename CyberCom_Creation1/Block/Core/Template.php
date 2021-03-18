<?php 
namespace Block\Core;
\Mage::loadFileByClassName('Model\Core\Url');
\Mage::loadFileByClassName('Model\Core\Request');

//require_once './Block/Product/Edit/Tabs/Form.php';


class Template{
		protected $template = null;
		protected $children = [];
		protected $request = null;
		protected $tabs = null;

		protected $controller;
		protected $url = null;

		public function __construct(){
			$this->setUrl();
			$this->setRequest();
		}




	public function setTemplate($template){
		$this->template = $template;
		return $this;

	}

	public function getTemplate(){
		return $this->template;
	}

	public function toHtml(){
		//require_once $this->getTemplate();
		
		ob_start();
		require $this->getTemplate();
		$content = ob_get_contents();
		ob_end_clean();
		return $content;
		//echo $content;

	}

	public function setController(\Controller\Core\Admin $controller ){
		$this->controller = $controller;
	}

	public function getController(){
		return $this->controller;
	}
	 public function setRequest(){
        $this->request=\Mage::getModel('Model\Core\Request');
        return $this;
    }

    public function getRequest(){
        return $this->request;
    }


	public function setUrl($url = null){
		$this->url = \Mage::getModel('Model\Core\Url');
    	return $this;
	}

	public function getUrl(){


		return $this->url;
	}

	/* public function getUrl($actionName=null, $controllerName=null, $params=null, $resetParams=false) {
	 	return $this->getController()->getUrl($actionName, $controllerName, $params, $resetParams);
	 }
*/
	 

	
	public function setChildren( array $children = []){
		$this->children = $children;
		return $this;

	}
	public function getChildren(){
		return $this->children;

	}

	public function addChild(Template $child, $key = null){
		if(!$key){
			$key = get_class($child);
		}
		$this->children[$key] = $child;
		return $this;

	}

	public function removeChild($key){
		if(array_key_exists($key, $this->children)){
			unset($this->children[$key]);
		}
		return $this;

	}

	public function getMessage(){
		//return $this->getController()->getMessage();
		return \Mage::getModel('Model\Admin\Message');
	}
	public function createBlock($className){
		//return new $className(); 
		return \Mage::getBlock($className);
	}
	public function getChild($key){
		if(!array_key_exists($key, $this->children)){
			return null;
		}
		return $this->children[$key];



	}

	public function baseUrl($subUrl = null){
		return $this->getUrl()->baseUrl($subUrl);
	}

	public function setTabs(array $tabs){
		$this->tabs = $tabs;
		return $this;
	}

	public function getTabs(){
		return $this->tabs;

	}

	public function setDefaultTab($defaultTab){
		$this->defaultTab = $defaultTab;
		return $this;

	}
	public function getDefaultTab(){
		return $this->defaultTab;
	}

	 public function addTab($key,$tab = []){
	 	$this->tabs[$key] = $tab;
	 	return $this;

	}

	/* public function getTab($key){
	 	if(!array_key_exists($key,$this->tabs)){
	 		return null;
	 	}
	 	return $this->tabs[$key];

	}*/

	 public function removeTab($key){
	 	if(array_key_exists($key,$this->tabs)){
	 		unset($this->tabs[$key]);
	 	}

	}


}


 ?>