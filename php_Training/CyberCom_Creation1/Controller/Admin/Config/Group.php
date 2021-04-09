<?php 
namespace Controller\Admin\Config;
\Mage::loadFileByClassName('Controller\Core\Admin');

class Group extends \Controller\Core\Admin{

	public function __construct(){
		parent::__construct();
	}

	public function formAction(){
		try{
		$groupId = (int)$this->getRequest()->getGet('groupId');
		$configGroup = \Mage::getModel('Model\Config\Group')->load($groupId);
		if(!$configGroup){
			throw new \Exception("No record found");
			
		}

		
		$layout = $this->getLayout();
		$layout->setTemplate('./View/core/layout/oneColumn.php');
		$contentl = $layout->getChild('left');
		$left = \Mage::getBlock('Block\Admin\Config\Edit\Tab');
		$contentl->addChild($left,'left');

		$content = $layout->getChild('content');
		$edit = \Mage::getBlock('Block\Admin\Config\Edit\Tabs\Config')->setConfigGroup($configGroup);
		$content->addChild($edit,'edit');

		echo $layout->toHtml();
	} catch (\Exception $e){
		echo $e->getMessage();
	}

	}

	public function saveAction(){
		try {
           

			if(!$this->getRequest()->getPost()){
				throw new \Exception("Invalid Request");
				
			}
			$configGroup = \Mage::getModel('Model\Config\Group');
			if($id = $this->getRequest()->getGet('groupId')){
				$configGroup = $configGroup->load($id);
			}

			$configData = $this->getRequest()->getPost('config');
          /*  echo '<pre>';
            print_r($configData);
            die();*/



			$configs = $configGroup->getConfig();
            /*echo '<pre>';
            print_r($configs);
            die();*/
            $configIds = [];
            if (is_array($configs)) {
                foreach ($configs as $config) {
                    $configIds[] = $config->groupId;
                }
            }


            $config = \Mage::getModel('Model\Config');
           

            if (array_key_exists('exists', $configData)) {
                $exitsData = $configData['exists'];
                


                if ($configs) {
                    foreach ($exitsData as $key => $data) {
                        $configIds = array_diff($configIds, [$key]);
                        $config->setData($data);
                        $config->configId = $key;
                        $config->groupId = $id;
                        if (!$config->save()) {
                            throw new \Exception('Unabled to Save Record');
                        }
                    }

        
                }
            }
            if (array_key_exists('new', $configData)) {
                $newData = $configData['new'];
                /*echo '<pre>';
                print_r($newData);
                die();*/
            
                    foreach ($newData['title'] as $key => $value) {
                        $config = \Mage::getModel('Model\Config');
                        $config->title = $value;
                        $config->groupId = $id;
                        $config->code = $newData['code'][$key];
                        $config->value = $newData['value'][$key];
                        if (!$config->save()) {
                            throw new \Exception('Record Not saved');
                        }
                    }
                
            }

            $this->getMessage()->setSuccess('Record saved successfully');

			
		} catch (\Exception $e) {
			
		}
		
		$this->redirect('form','config');
	}


	}


 ?>