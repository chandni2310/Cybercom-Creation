<?php 
namespace Controller\Core;
\Mage::loadFileByClassName('Block\Core\Template');
\Mage::loadFileByClassName('Block\Core\Layout');
\Mage::loadFileByClassName('Model\Core\Url');

class Abstracts{

    protected $request=null;
    protected $layout=null;
    public function __construct(){
        $this->setRequest();
        $this->setLayout();
        $this->setMessage();
    }



    public function setLayout( \Block\Core\Layout $layout = null){
       /* if(!$layout){
        $this->layout =  new Block_Core_Layout();
    }*/
    $this->layout = \Mage::getBlock('Block\Core\Layout');
    return $this;
    }

    public function getLayout(){
        return $this->layout;
    }

    public function renderLayout(){
        return $this->getLayout()->toHtml();
    }

    public function setRequest(){
        $this->request = \Mage::getModel('Model\Core\Request');
        return $this;
    }

    public function getRequest(){
        return $this->request;
    }



	public function redirect($actionName = NULL, $controllerName = NULL,$params=null,$resetparams=false) {
        header('location:' . $this->getUrl($actionName, $controllerName,$params,$resetParams));
        exit(0);
    }

    public function getUrl($actionName=null, $controllerName=null, $params=null, $resetParams=false){
    	$final=$_GET;

    	if($resetParams){
    		$final=[];
    	}

    	if($actionName==null){
    		$actionName=$_GET['a'];
    	}

    	if($controllerName==null){
    		$controllerName=$_GET['c'];
    	}

        if($params==null){
            $params=[];
        }
    	$final['c']=$controllerName;
    	$final['a']=$actionName;

    	$final=array_merge($final,$params);
    	$queryString=http_build_query($final);
        

    	unset($final);

    	return "http://localhost/php_Training/Cybercom_Creation1/index.php?{$queryString}";

    }

    public function setMessage(){
        $this->message = \Mage::getModel('Model\Core\Message');
        return $this;
    }

    public function getMessage(){
        return $this->message;
    }




}



 ?>