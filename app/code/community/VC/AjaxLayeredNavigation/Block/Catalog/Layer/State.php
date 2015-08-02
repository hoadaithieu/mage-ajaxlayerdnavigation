<?php
include 'app/code/core/Mage/Catalog/Block/Layer/State.php';
class VC_AjaxLayeredNavigation_Block_Catalog_Layer_State extends Mage_Catalog_Block_Layer_State
{
    /**
     * Initialize Layer State template
     *
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('vc_ajaxlayerednavigation/catalog/layer/state.phtml');
    }

}
