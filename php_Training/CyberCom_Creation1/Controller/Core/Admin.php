<?php 
namespace Controller\Core;
\Mage::loadFileByClassName('Block\Core\Template');
\Mage::loadFileByClassName('Block\Core\Layout');
\Mage::loadFileByClassName('Controller\Core\Abstracts');
\Mage::loadFileByClassName('Model\Core\Url');

class Admin extends Abstracts{

    
    public function setLayout( \Block\Core\Layout $layout = null){
    if(!$layout){
        $layout =  \Mage::getBlock('Block\Admin\Layout');
    }
    if(!$layout instanceof \Block\Admin\Layout){
        throw new \Exception("must be instance of \Block\Admin\Layout");
    }
    $this->layout = $layout;
    return $this;
    }

   
    public function setMessage(){
        $this->message = \Mage::getModel('Model\Admin\Message');
        return $this;
    }

   




}



 ?>