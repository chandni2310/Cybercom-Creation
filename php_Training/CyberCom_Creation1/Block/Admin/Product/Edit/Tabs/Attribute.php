<?php 
namespace Block\Admin\Product\Edit\Tabs;
\Mage::loadFileByClassName('Block\Core\Edit');

class Attribute extends \Block\Core\Edit{
	protected $attributes = [];

	public function __construct(){
		parent::__construct();
		$this->setTemplate('./View/admin/product/edit/tabs/attribute.php');
	}

	public function setAttributes($attributes = null)
    {
        if ($attributes) {
            $this->attributes = $attributes;
            return $this;
        }


        $attribute = \Mage::getModel('Model\Attribute');
        $query = "SELECT * FROM `{$attribute->getTableName()}` where `entityTypeId` = 'product' ORDER BY `sortOrder` ASC ";
        $attributes = $attribute->fetchAll($query);

        if (!$attributes) {
            return false;
        }
        $this->attributes = $attributes;
        return $this;
    }

    public function getAttributes()
    {
        if (!$this->attributes) {
            $this->setAttributes();
        }
        return $this->attributes;
    }
}




 ?>