<?php
include 'app/code/core/Mage/Catalog/Block/Layer/Filter/Attribute.php';
class VC_AjaxLayeredNavigation_Block_Catalog_Layer_Filter_Attribute extends Mage_Catalog_Block_Layer_Filter_Attribute
{
    public function __construct()
    {
        parent::__construct();
		$this->setTemplate('vc_ajaxlayerednavigation/catalog/layer/filter.phtml');
    }
}
