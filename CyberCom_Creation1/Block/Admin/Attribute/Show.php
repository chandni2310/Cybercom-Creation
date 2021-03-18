<?php 
namespace Block\Admin\Attribute;
\Mage::loadFileByClassName('Block\Core\Edit');


class Show extends \Block\Core\Edit{
	protected $attribute = null;
    protected $entity = null;

    public function __construct()
    {
        $this->setTemplate('./View/admin/attribute/show.php');
    }

    public function getAttribute()
    {
        return $this->attribute;
    }

    public function setAttribute(\Model\Attribute $attribute)
    {
        $this->attribute = $attribute;
        return $this;
    }

    public function getEntity()
    {
        return $this->entity;
    }

    public function setEntity($entity)
    {
        $this->entity = $entity;
        return $this;
    }

}

 ?>