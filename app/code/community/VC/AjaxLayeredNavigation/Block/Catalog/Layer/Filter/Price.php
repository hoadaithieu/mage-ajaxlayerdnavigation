<?php
include 'app/code/core/Mage/Catalog/Block/Layer/Filter/Price.php';

class VC_AjaxLayeredNavigation_Block_Catalog_Layer_Filter_Price extends Mage_Catalog_Block_Layer_Filter_Price
{
    /**
     * Initialize Price filter module
     *
     */
    public function __construct()
    {
        parent::__construct();
		$this->setTemplate('vc_ajaxlayerednavigation/catalog/layer/filter.phtml');
    }
}
