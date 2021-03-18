<?php 
namespace Controller\Core;

class Front{
	public static function init(){
		$request = \Mage::getModel('Model\Core\Request');
		$controller=$request->getControllerName();
		$actionName=$request->getActionName()."Action";
		$controllerClassName = self::prepareClassName($controller,'Controller\\Admin');
		$controller = \Mage::getController($controllerClassName);
		$controller->$actionName();
	}

	public static function prepareClassName($key,$nameSpace)
	{
		$className = $nameSpace."_".$key;
		$className = str_replace('_',' ',$className);
		$className = ucwords($className);
		$className = str_replace(' ','\\',$className);
		return $className;

	
	}

	



	
}

 ?>