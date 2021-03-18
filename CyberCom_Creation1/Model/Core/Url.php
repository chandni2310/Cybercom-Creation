<?php 
namespace Model\Core;
//require_once './Model/Core/Request.php';

class Url{

	protected $request = null;

	public function __construct(){
		$this->setRequest();
	}



	 public function setRequest(){
        $this->request = \Mage::getModel('Model\Core\Request');
        return $this;
    }

    public function getRequest(){
        return $this->request;
    }


	 public function getUrl($actionName=null, $controllerName=null, $params=[], $resetParams=false){
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


    public function baseUrl($subUrl = null){
        $url = "http://localhost/php_Training/Cybercom_Creation1/";
        if($subUrl){
            $url .= $subUrl;
        }
        return $url;
    }


}
 ?>
