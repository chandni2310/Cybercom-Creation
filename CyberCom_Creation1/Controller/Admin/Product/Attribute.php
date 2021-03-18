<?php  

namespace Controller\Admin\Product;
\Mage::loadFileByClassName('Controller\Core\Admin');

class Attribute extends \Controller\Core\Admin{

	 public function saveAction()
    {
        try {

            if (!$this->getRequest()->isPost()) {
                throw new \Exception('Invalid Request');
            }
            $product = \Mage::getModel('Model\Product');
            $productId = (int)$this->getRequest()->getGet('productId');
            $productData = $this->getRequest()->getPost('product');
            $product->addColumn($productData);

            if (!$productData) {
                throw new \Exception('Add details.');
            }

            array_filter($productData, function ($value, $key)  use (&$productData) {
                
                if (is_array($value)) {
                    $productData[$key] = implode(',', $value);
                }
            }, ARRAY_FILTER_USE_BOTH);

            
            $product->productId = $productId;
            $product->setData($productData);

            if (!$product->save()) {
                throw new \Exception('Record Not saved');
            }

            $this->getMessage()->setSuccess('Record updated.');
            $editBlock = \Mage::getBlock('Block\Admin\Product\Edit');
            $editBlock->setTableRow($product);
            $editBlock = $editBlock->toHtml();            
        } catch (Exception $e) {
            $this->getMessage()->setFailure($e->getMessage());
        }
        //$this->redirect('save','product');
        
    }
}



?>