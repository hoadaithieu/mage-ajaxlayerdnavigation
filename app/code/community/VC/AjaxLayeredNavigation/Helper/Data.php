<?php
class VC_AjaxLayeredNavigation_Helper_Data extends Mage_Core_Helper_Abstract {
	public function getFilterUrl() {
		return $this->_getUrl('vc_ajaxlayerednavigation/index/filter');
	}
	
	public function getCleanUrl() {
		return $this->getFilterUrl();
	}
	
	
	public function getItemQuery($ar) {
		$rs = array();
		if ($query = Mage::registry('vc_query')) {
			$ar += $query;
			
		}
		
		if (is_array($ar) && count($ar) > 0) {
			foreach ($ar as $k => $v) {
				$rs[] = $k.'='.$v;
			}
		}
		return implode('&', $rs);
	}
	
	public function getDeleteQuery($ar, $removeKey = '') {
		$rs = array();
		if ($query = Mage::registry('vc_query')) {
			$ar += $query;
		}
		
		if (isset($ar[$removeKey])) {
			unset($ar[$removeKey]);
		}
		
		if (is_array($ar) && count($ar) > 0) {
			foreach ($ar as $k => $v) {
				$rs[] = $k.'='.$v;
			}
		}
		return implode('&', $rs);
	}
	
	public function getContainer() {
		$container = '';
		$layout = !Mage::registry('vc_layout') ? Mage::app()->getLayout()->getBlock('root')->getTemplate() : Mage::registry('vc_layout');
		if (strpos($layout, '3columns')) {
			$container =  Mage::getStoreConfig('vc_ajaxlayerednavigation/general/container_3columns');
		} else if (strpos($layout, '2columns-left')) {
			$container =  Mage::getStoreConfig('vc_ajaxlayerednavigation/general/container_2columns_left');
		}
	
		return $container;
	}
	
	public function getItemUrl($ar) {
		return Mage::registry('vc_category_url').'?'.(is_string($ar) ? $ar: $this->getItemQuery($ar));
	}
	
	public function getClearedUrl() {
		return Mage::registry('vc_category_url');
	}
}