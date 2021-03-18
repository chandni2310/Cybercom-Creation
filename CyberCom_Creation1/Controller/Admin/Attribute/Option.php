<?php 
namespace Controller\Admin\Attribute;
\Mage::loadFileByClassName('Controller\Core\Admin');

class Option extends \Controller\Core\Admin{

	public function __construct(){
		parent::__construct();
	}

	public function formAction(){
		try{
		$attributeId = (int)$this->getRequest()->getGet('attributeId');
		$attribute = \Mage::getModel('Model\Attribute')->load($attributeId);
		if(!$attribute){
			throw new \Exception("No record found");
			
		}

		
		$layout = $this->getLayout();
		$layout->setTemplate('./View/core/layout/threeColumn.php');
		$contentl = $layout->getChild('left');
		$left = \Mage::getBlock('Block\Admin\Attribute\Edit\Tab');
		$contentl->addChild($left,'left');

		$content = $layout->getChild('content');
		$edit = \Mage::getBlock('Block\Admin\Attribute\Edit\Tabs\Option')->setAttribute($attribute);
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
			$attribute = \Mage::getModel('Model\Attribute');
			if($id = $this->getRequest()->getGet('attributeId')){
				$attribute = $attribute->load($id);
			}

			$optionsData = $this->getRequest()->getPost('option');



			$options = $attribute->getOptions();
            $optionsIds = [];
            if (is_array($options)) {
                foreach ($options as $option) {
                    $optionsIds[] = $option->optionId;
                }
            }

            if (!$optionsData and !$options) {
                throw new \Exception('No Records in Database');
            }

            $option = \Mage::getModel('Model\Attribute\Option');
            if (!$optionsData) {
                if (!$option->deleteOptions($optionsIds)) {
                    throw new Exception('Unabled to delete records.');
                }
            }

            if (array_key_exists('exits', $optionsData)) {
                $exitsData = $optionsData['exits'];


                if ($options) {
                    foreach ($exitsData as $key => $data) {
                        $optionsIds = array_diff($optionsIds, [$key]);
                        $option->setData($data);
                        $option->optionId = $key;
                        $option->attributeId = $attributeId;
                        if (!$option->save()) {
                            throw new \Exception('Unabled to Save Record');
                        }
                    }

                    if (!empty($optionsIds)) {
                        if (!$option->deleteOptions($optionsIds)) {
                            throw new \Exception('Unabled to delete records.');
                        }
                    }
                }
            }
            if (array_key_exists('new', $optionsData)) {
                $newData = $optionsData['new'];
                if (is_array($newData['name'])) {
                    foreach ($newData['name'] as $key => $value) {
                        $option = \Mage::getModel('Model\Attribute\Option');
                        $option->name = $value;
                        $option->attributeId = $id;
                        $option->sortOrder = $newData['sortOrder'][$key];
                        if (!$option->save()) {
                            throw new \Exception('Unabled to Save Record');
                        }
                    }
                }
            }

            $this->getMessage()->setSuccess('Records has been successfully saved.');

			
		} catch (\Exception $e) {
			
		}
		
		$this->redirect('form','attribute');
	}


	}


 ?>