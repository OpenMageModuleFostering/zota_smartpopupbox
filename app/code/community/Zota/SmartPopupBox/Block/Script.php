<?php
class Zota_SmartPopupBox_Block_Script extends Mage_Core_Block_Template
{
	const XML_PATH_SMARTPOPUPBOX_AVAILABILITY = 'smartpopupbox/settings/availability';
	const XML_PATH_SMARTPOPUPBOX_SCRIPT_CODE = 'smartpopupbox/settings/code_pool';

	public function isEnable() {
		$is_enabled = Mage::getStoreConfig(self::XML_PATH_SMARTPOPUPBOX_AVAILABILITY);
		if ($is_enabled) {
			return true;
		}
		return false;
	}

    public function getScript() {
    	$script = Mage::getStoreConfig(self::XML_PATH_SMARTPOPUPBOX_SCRIPT_CODE);
    	if (isset($script) && !empty($script)) {
    		return $script;
    	}
        return false;
    }
}